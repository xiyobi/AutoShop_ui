<?php

use App\Http\Controllers\WEB\UserController;
use App\Http\Controllers\WEB\HomeController;
use App\Models\User;
use Src\Router;

Router::get('/', [HomeController::class, 'home']);
Router::get('/catalog', [HomeController::class, 'catalog']);
Router::get('/login', [HomeController::class, 'login']);
Router::get('/register', [HomeController::class, 'register']);
Router::get('/product-card', [HomeController::class, 'productCard']);
Router::get('/favourites', [HomeController::class, 'favourites']);

Router::get('/dashboard', [UserController::class, 'about']);
Router::get('/dashboard/account-settings', [UserController::class, 'accountSettings']);
Router::get('/dashboard/favorites', [UserController::class, 'favorites']);
Router::get('/dashboard/listings', [UserController::class, 'listings']);







Router::notFound();
