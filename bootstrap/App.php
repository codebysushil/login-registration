<?php

declare(strict_types=1);

define('APP_ROOT', dirname(__DIR__));

spl_autoload_register(function (string $class): void {
    $prefix = 'App\\';

    if (!str_starts_with($class, $prefix)) {
        return;
    }

    $relative = substr($class, strlen($prefix));

    $file = APP_ROOT
        . DIRECTORY_SEPARATOR
        . 'app'
        . DIRECTORY_SEPARATOR
        . str_replace('\\', DIRECTORY_SEPARATOR, $relative)
        . '.php';

    if (is_file($file)) {
        require_once $file;
    }
});

use App\Config\Database;
use App\Config\EnvLoader;

$env = new EnvLoader();
$env->load();

return [
    'env' => $env,
    'db'  => new Database($env),
];
