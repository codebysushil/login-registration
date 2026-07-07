<?php

use App\Router as Route;
//use App\Middleware\Auth;
//use App\Middleware\Guest;

Route::get('', 'HomeController', 'index');

Route::get('login', 'AuthController', 'index');
