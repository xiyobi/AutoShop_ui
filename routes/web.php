<?php

use App\Http\Controllers\WEB\UserController;
use App\Http\Controllers\WEB\HomeController;
use App\Models\User;
use Src\Router;

Router::get('/', [HomeController::class, 'home']);
Router::get('/about', [HomeController::class, 'about']);
Router::get('/login', [HomeController::class, 'login']);
Router::get('/register', [HomeController::class, 'register']);




Router::notFound();
