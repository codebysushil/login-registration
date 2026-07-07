<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class AuthController extends BaseController
{
    public function index(): mixed
    {
        return view('auth/login');
    }

    public function login()
    {
        $user = new User;

        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        if($user->login()){
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->name;
            redirect('/');
            exit;
        } else {
            echo 'Unable to Login';
        }
    }

    public function register(): mixed
    {
        return view('auth/register');
    }

    public function store()
    {
        $user = new User();
    }
}
