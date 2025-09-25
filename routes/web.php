<?php

use Illuminate\Support\Facades\Route;
// Requestクラスをインポート
use Illuminate\Http\Request;

// GETリクエストで、トップページにアクセスしたときのルーティング
Route::get('/', function () {
    // resources/views/home/index.blade.php を表示する
    return view('home.index');
});

// /about でアクセスしたときのルーティング
Route::get('/about', function () {
    // resources/views/about.blade.php を表示する
    return view('about');
});

// /item/{id} でアクセスしたときのルーティング
Route::get('/item/{id}', function (int $id) {
    $message = "Item id is {$id}";
    // resources/views/item/show.blade.php を表示する
    return view('item.show');
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