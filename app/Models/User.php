<?php

declare(strict_types=1);

namespace App\Models;

use App\Models\BaseModel;
use PDO;

class User extends BaseModel
{
    private string $table = 'users';
    public int $id;
    public string $name;
    public string $email;
    public string $password;
    private string $createdAt = 'created_at';
    private string $updatedAt = 'updated_at';

    public function login()
    {
        $query = "SELECT id, name, email, password FROM ". $this->table ." WHERE email = :email";

        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if($row && password_verify($this->password, $row['password'])){
			$this->id = $row['id'];
			$this->name = $row['name'];

			return true;
		}else{
			return false;
		}
    }
}
