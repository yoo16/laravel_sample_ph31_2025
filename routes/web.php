<?php

use Illuminate\Support\Facades\Route;

// GETリクエストで、トップページにアクセスしたときのルーティング
Route::get('/', function () {
    // return view('welcome');
    return 'Hello, World!';
});

// /about でアクセスしたときのルーティング
Route::get('/about', function () {
    // return view('welcome');
    return 'This is the about page.';
});