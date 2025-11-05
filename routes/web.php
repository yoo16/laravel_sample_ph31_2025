<?php

use Illuminate\Support\Facades\Route;
// Requestクラスをインポート
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;

// HomeController の index を実行
Route::get('/', [HomeController::class, 'index']);
// HomeController の about を実行
Route::get('/about', [HomeController::class, 'about']);
// HomeController の search を実行
Route::get('/search', [HomeController::class, 'search']);

// GETリクエストで、トップページにアクセスしたときのルーティング
// Route::get('/', function () {
//     // resources/views/home/index.blade.php を表示する
//     return view('home.index');
// });
// /about でアクセスしたときのルーティング
// Route::get('/about', function () {
//     // resources/views/about.blade.php を表示する
//     return view('about');
// });

// /item/{id} でアクセスしたときのルーティング
Route::get('/item/{id}', function (int $id) {
    $message = "Item id is {$id}";
    // resources/views/item/show.blade.php を表示する
    // データ作成
    $data = [
        'message' => $message,
        'id' => $id
    ];
    // ビューにデータを渡す
    return view('item.show', $data);
});

// /search でアクセスしたときのルーティング
// Route::get('/search', function (Request $request) {
//     // $keyword = $_GET['keyword'] ?? 'No keyword';
//     // dd(): デバッグ関数で強制終了する
//     // dd($request->all());
//     // $keyword = $request->input('keyword', 'No keyword');
//     $keyword = $request->keyword ?? 'キーワードが指定されていません';
//     $date = [
//         'keyword' => $keyword,
//         'result' => '何も見つかりませんでした',
//     ];
//     // http://127.0.0.1:8000/search?keyword=xxx
//     // にアクセスすると keyword に応じたデータが表示される
//     return view('search', $date);
// });
