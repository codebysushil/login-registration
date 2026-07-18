<?php

declare(strict_types=1);

namespace App\Middleware;

class Auth
{
    public function __construct()
    {
        if (! isset($_SESSION['user_id'])) {
            redirect('login');
            exit;
        }
    }
}
