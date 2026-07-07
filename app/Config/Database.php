<?php

declare(strict_types=1);

namespace App\Config;

class Database
{
    public $db;

    $this->db = null;

    try {
        $this->db = new PDO(APP_ROOT .'/database/database.sqlite');

        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e)
    {
        exit("Error :" . $e);
    }
}
