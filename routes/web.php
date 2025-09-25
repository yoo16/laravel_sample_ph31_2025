<?php

use Illuminate\Support\Facades\Route;
// Requestクラスをインポート
use Illuminate\Http\Request;

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
Route::get('/search', function (Request $request) {
    // $keyword = $_GET['keyword'] ?? 'No keyword';
    // dd(): デバッグ関数で強制終了する
    // dd($request->all());
    // $keyword = $request->input('keyword', 'No keyword');
    $keyword = $request->keyword ?? 'No keyword';
    return $keyword;
});