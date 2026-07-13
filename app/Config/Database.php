<?php

declare(strict_types=1);

namespace App\Config;

use PDO;

class Database
{
    public $db;

    public function __construct()
    {
        $this->db = null;

        try {
            $this->db = new PDO('sqlite:database.sqlite');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->exec('CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    email TEXT NOT NULL UNIQUE COLLATE NOCASE,
    password_hash TEXT NOT NULL,
    is_active INTEGER NOT NULL DEFAULT 1,
    email_verified INTEGER NOT NULL DEFAULT 0,
    last_login_at TEXT,
    created_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,
    updated_at TEXT NOT NULL DEFAULT CURRENT_TIMESTAMP,

    CHECK (is_active IN (0, 1)),
    CHECK (email_verified IN (0, 1)),
    CHECK (length(name) BETWEEN 1 AND 100)
);');
        } catch (PDOException $e) {
            exit('Error: '.$e->getMessage());
        }
    }

    public function fetchData(string $query, array $params = []): mixed
    {
        try {
            $stmt = $this->db->prepare($query);
            $stmt->execute($params);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return false;
        }
    }

    public function fetchAll($query)
    {
        $stmt = $this->db->query($query);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
