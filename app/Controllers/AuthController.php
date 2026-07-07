<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthController extends BaseController
{
    public function index(): mixed
    {
        return view('login');
    }
}
