<?php

use Dotenv\Dotenv;

$root = dirname(__DIR__);

 define('APP_ROOT', $root);

$dotenv = Dotenv::createImmutable($root);
$dotenv->safeLoad();

$config = [];

$config[] = [
    'DB_CONNECTION' => $_ENV['DB_CONNECTION'],
    'DB_DATABASE' => $_ENV['DB_DATABASE']
];

define('DB_CONNECTION', $_ENV['DB_CONNECTION']);
define('DB_DATABASE', $_ENV['DB_DATABASE']);

//dd($config);
//
//echo APP_ROOT;
