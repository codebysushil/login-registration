<?php

declare(strict_types=1);

namespace App\Config;

use Dotenv\Dotenv;

final class EnvLoader
{
    private bool $loaded = false;

    private array $config = [];

    public function load(): void
    {
        if ($this->loaded) {
            return;
        }

        $root = dirname(__DIR__, 2);

        if (! defined('APP_ROOT')) {
            define('APP_ROOT', $root);
        }

        Dotenv::createImmutable($root)->safeLoad();

        $this->loaded = true;
    }

    public function setEnv(): void
    {
        $this->load();

        $this->config = [
            'APP_NAME' => $_ENV['APP_NAME'] ?? 'MyApp',
            'APP_ENV' => $_ENV['APP_ENV'] ?? 'local',
            'APP_KEY' => $_ENV['APP_KEY'] ?? '',
            'DB_CONNECTION' => $_ENV['DB_CONNECTION'] ?? 'mysql',
            'DB_DATABASE' => $_ENV['DB_DATABASE'] ?? '',
            'DB_HOST' => $_ENV['DB_HOST'] ?? '127.0.0.1',
            'DB_PORT' => $_ENV['DB_PORT'] ?? '3306',
            'DB_USERNAME' => $_ENV['DB_USERNAME'] ?? '',
            'DB_PASSWORD' => $_ENV['DB_PASSWORD'] ?? '',
            'BCRYPT_ROUNDS' => $_ENV['BCRYPT_ROUNDS'] ?? 12,
        ];
    }

    public function get(string $key, mixed $default = null): mixed
    {
        $this->load();

        return $_ENV[$key] ?? $default;
    }

    public function all(): array
    {
        $this->load();

        return $_ENV;
    }

    public function config(): array
    {
        if ($this->config === []) {
            $this->setEnv();
        }

        return $this->config;
    }
}
