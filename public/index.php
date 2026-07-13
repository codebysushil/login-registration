<?php
require_once __DIR__ .'/../vendor/autoload.php';

$app = require __DIR__ .'/../bootstrap/App.php';

$pdo = $app['db']->connection();

use App\Services\Router\RouterService as Router;

$route = new Router;

require_once APP_ROOT .'/routes/web.php';
$route->handle();
