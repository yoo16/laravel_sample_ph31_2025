<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// ItemTestTrait を使う宣言を追加
use App\Models\Traits\ItemTestTrait;
// Category モデルを使う宣言を追加
use App\Models\Category;
// Item モデルを使う宣言を追加
use App\Models\Item;

class ItemController extends Controller
{
    // ItemTestTrait を使う宣言を追加
    use ItemTestTrait;

    // 商品一覧を表示（管理者用）
    public function index()
    {
        // JSON データを取得して表示
        // $items = $this->fetchAll();
        // items からすべてのデータを取得
        $items = Item::get();
        // SELECT * FROM items;

        // デバッグで強制終了
        // dd($items);

        // TODO: 商品一覧をDBから取得
        $data = [
            'items' => $items
        ];
        // TODO: データをビューに渡して表示
        return view('item.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // categories テーブルからすべてのデータを取得
        // SELECT * FROM categories;
        $categories = Category::get();
        // dd($categories);
        // Viewに渡すデータを作成
        $data = [
            'categories' => $categories
        ];

        return view('item.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // フォームから送信されたデータを取得
        $posts = $request->all();
        // デバッグ表示
        // dd($posts);
        Item::create($posts);
        // INSERT INTO items (...) VALUES (...);

        // リダイレクト: 商品一覧へ
        return redirect('/item/');
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
        // TODO: DBから指定IDの商品を取得
        // 指定したIDの商品を取得
        // $item = $this->findById($id);
        $item = Item::find($id);
        // SELECT * FROM items WHERE id = $id;
        // データ作成
        $data = [
            'item' => $item
        ];
        // ビューにデータを渡す
        return view('item.edit', $data);
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
