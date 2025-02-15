<?php

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

Route::get('/tasks', [TaskController::class, 'index']) -> name('tasks.index');