<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/search', [HomeController::class, 'search']);

// ItemControllerのshowメソッドを呼び出すルートを定義
// ルート名：item.show
Route::get('/item/show/{id}', [ItemController::class, 'show'])->name('item.show');
// ルート名：item.edit
Route::get('/item/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
// ルート名：item.index
Route::get('/item/', [ItemController::class, 'index'])->name('item.index');
// ルート名：item.index
Route::get('/item/create', [ItemController::class, 'create'])->name('item.create');
// POSTリクエストで商品の更新（UPDATE）: Route で POST にする
Route::post('/item/update/{id}', [ItemController::class, 'update'])->name('item.update');
// POSTリクエストで商品の更新（DELETE）: Route で POST にする
Route::post('/item/destroy/{id}', [ItemController::class, 'destroy'])->name('item.destroy');
// POSTリクエストで商品の追加（INSERT）: Route で POST にする
Route::post('/item/store', [ItemController::class, 'store'])->name('item.store');
