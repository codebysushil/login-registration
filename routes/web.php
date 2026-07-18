<?php

use App\Middleware\Auth;
use App\Services\Router\RouterService as Route;

// use App\Middleware\Guest;

Route::get('', 'HomeController', 'index', [Auth::class]);

Route::get('login', 'AuthController', 'index');
Route::post('submit-login', 'AuthController', 'login');

Route::get('register', 'AuthController', 'register');
Route::post('submit-register', 'AuthController', 'store');
