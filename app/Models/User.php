<?php

declare(strict_types=1);

namespace App\Models;

use App\Config\Database;

class User
{
    private string $table = 'users';
    public int $id;
    private string $createdAt = 'created_at';
    private string $updatedAt = 'updated_at';
    private int $limit = 10;

    public function create($columns=[])
    {
        //
    }

    public function fetchAll(){
        $db = new Database();

        $result = $db->query("SELECT * FROM $this->table LIMIT $this->limit;");
        return $result;
    }
}
