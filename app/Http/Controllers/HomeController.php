<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Item モデルを使う宣言を追加
use App\Models\Item;
class HomeController extends Controller
{
    public function index()
    {
        // items から 最新の３件を取得して $items に代入する処理など
        // $items = Item::lastest()->take(3)->get();
        $items = Item::with('category')
                    ->orderBy('created_at', 'desc')
                    ->limit(3)
                    ->get();
        // SELECT * FROM items ORDER BY created_at DESC LIMIT 3;
        // dd($items);
        $data = [
            'items' => $items
        ];
        // resources/views/home/index.blade.php を表示する
        return view('home.index', $data);
    }

    public function about()
    {
        // resources/views/about.blade.php を表示する
        return view('about');
    }

    public function search(Request $request)
    {
        // TODO: キーワードからデータベースを検索
        // 今回は仮のデータを作成
        $data = [
            'keyword' => $request->keyword,
            'result' => '何も見つかりませんでした',
        ];
        // resources/views/search.blade.php を表示する
        // $data をビューに渡す
        // http://127.0.0.1:8000/search?keyword=hal のようにアクセス
        return view('search', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
