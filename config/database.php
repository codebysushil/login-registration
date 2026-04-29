<?php

require_once(__DIR__.'/envloader.php');

$driver = $_ENV['DB_CONNECTION'];
$database = APP_ROOT.'/database/'. $_ENV['DB_DATABASE'];

$db = null;

try {
    $db = new PDO("$driver:$database");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
    echo $err->getMessage();
}
