<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // resources/views/home/index.blade.php を表示する
        return view('home.index');
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
