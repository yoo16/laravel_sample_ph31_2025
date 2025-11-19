<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ItemTestTrait を使う宣言を追加
use App\Models\Traits\ItemTestTrait;

class ItemController extends Controller
{
    // ItemTestTrait を使う宣言を追加
    use ItemTestTrait;

    // 商品一覧を表示（管理者用）
    public function index()
    {
        // JSON データを取得して表示
        $items = $this->fetchAll();
        dd($items);

        // TODO: 商品一覧をDBから取得
        // TODO: ビューを表示
        return view('item.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    // $id を数字限定の時は、int
    // $id を文字にするときは、string
    public function show(int $id)
    {
        $message = "Item id is {$id}";
        $data = [
            'message' => $message,
            'id' => $id
        ];

        // http://127.0.0.1:8000/item/xxxx のようにアクセス
        // ビューにデータを渡す
        return view('item.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('item.edit');
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
