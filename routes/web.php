<?php

use Directory\app\Http\Controllers\WEB\HomeController;
use Directory\app\Http\Controllers\WEB\UserController;
use Directory\app\Models\User;
use Src\Router;

Router::get('/', [HomeController::class, 'home']);
Router::get('/about', [HomeController::class, 'about']);
Router::get('/login', [HomeController::class, 'login']);
Router::get('/register', [HomeController::class, 'register']);

Router::get('/dashboard', [UserController::class, 'home']);
Router::get('/dashboard/quizzes', [UserController::class, 'quizzes']);
Router::get('/dashboard/create_quiz', [UserController::class, 'create_quiz']);
Router::get('/dashboard/statistic', [UserController::class, 'statistic']);
Router::get('/take_quiz', [UserController::class, 'take_quiz']);

Router::get('/dashboard/quizzes/{id}/update', [UserController::class, 'update']);


Router::notFound();
