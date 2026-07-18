<?php

session_start();

require_once __DIR__.'/../vendor/autoload.php';

require __DIR__.'/../bootstrap/App.php';

use App\Services\Router\RouterService as Router;

$route = new Router;

require_once __DIR__.'/../routes/web.php';

$route->handle();
