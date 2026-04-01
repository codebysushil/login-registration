<?php

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable("../");
$dotenv->load();

//echo $path = "/../".__DIR__;
//$dotenv = Dotenv\Dotenv::createImmutable("../");
//$dotenv->safeLoad();

//echo $_ENV['APP_NAME'];
