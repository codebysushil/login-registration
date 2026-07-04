<?php


require_once(__DIR__."/../vendor/autoload.php");

require_once(__DIR__."/../config/app.php");

use App\Router;

$route = new Router();

require_once APP_ROOT .'/routes/route.php';
$route->handle();
