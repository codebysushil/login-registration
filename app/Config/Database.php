<?php

declare(strict_types=1);

namespace App\Config;

use PDO;
use PDOException;

final class Database
{
    private ?PDO $connection = null;

    private string $dns;

    public function __construct(
        private EnvLoader $env
    ) {
        $driver = $this->env->get('DB_CONNECTION', 'mysql');
        $host = $this->env->get('DB_HOST', '127.0.0.1');
        $port = $this->env->get('DB_PORT', '3306');
        $database = $this->env->get('DB_DATABASE');
        $username = $this->env->get('DB_USERNAME');
        $password = $this->env->get('DB_PASSWORD');

        if ($driver === 'mysql') {
            $this->dns = sprintf(
                '%s:host=%s;port=%d;dbname=%s;charset=utf8mb4',
                (string)$driver,
                (string)$host,
                (int)$port,
                (string)$database
            );
        } else {
            $this->dns = "$driver:../$database";
        }

        try {
            $this->connection = new PDO(
                $this->dns,
                $username,
                $password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
        } catch (PDOException $e) {
            throw new PDOException(
                'Database connection failed: '.$e->getMessage(),
                (int) $e->getCode(),
                $e
            );
        }
    }

    public function connection(): PDO|null
    {
        return $this->connection;
    }
}
