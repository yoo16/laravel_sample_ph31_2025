<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/search', [HomeController::class, 'search']);

// ItemControllerのshowメソッドを呼び出すルートを定義
// ルート名：item.show
Route::get('/item/show/{id}', [ItemController::class, 'show'])
    ->name('item.show');
// ルート名：item.edit
Route::get('/item/edit/{id}', [ItemController::class, 'edit'])
    ->name('item.edit');
// ルート名：item.index
Route::get('/item/', [ItemController::class, 'index'])
    ->name('item.index');
