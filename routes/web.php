<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/search', [HomeController::class, 'search']);

// ItemControllerのshowメソッドを呼び出すルートを定義
Route::get('/item/show/{id}', [ItemController::class, 'show'])
    ->name('item.show');
