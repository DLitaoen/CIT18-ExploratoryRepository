<?php

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