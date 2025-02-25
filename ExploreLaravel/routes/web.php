<?php

use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello-laravel', function () {
    return "Hello, Laravel!";
});

Route::get('/greet-view', function () {
    return view(view: 'greet');
});

Route::get('/greet', [GreetController::class, 'greet']);

Route::resource('tasks', TaskController::class);