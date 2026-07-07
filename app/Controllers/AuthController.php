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
        $user = new User();
        dd($_POST);
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
