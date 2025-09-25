<?php

use Illuminate\Support\Facades\Route;

// GETリクエストで、トップページにアクセスしたときのルーティング
Route::get('/', function () {
    // return view('welcome');
    return 'Hello, World!';
});

// /about でアクセスしたときのルーティング
Route::get('/about', function () {
    return '<h1>This is the about page.</h1>';
});

// /item/{id} でアクセスしたときのルーティング
Route::get('/item/{id}', function (int $id) {
    $message = "Item id is {$id}";
    return $message;
});

// /search でアクセスしたときのルーティング
Route::get('/search', function () {
    $keyword = $_GET['keyword'] ?? 'No keyword';
    return $keyword;
});