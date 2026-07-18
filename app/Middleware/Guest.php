<?php

declare(strict_types=1);

namespace App\Middleware;

class Guest
{
    public function handle()
    {
        if (isset($_SESSION['user_id'])) {
            redirect('dashboard');
            exit();
        }
    }
}
