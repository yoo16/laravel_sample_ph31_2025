@extends('layouts.app')

@section('content')
<main class="container mx-auto px-4">
    <h2 class="font-bold text-2xl text-center p-2">商品編集</h2>
    <form action="{{ route('item.update', $item->id) }}" method="post" class="space-y-6">
        @csrf

        <!-- 商品名 -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">商品名</label>
            <input type="text" name="name" value="{{ $item->name ?? old('name') }}"
                class="w-full border border-gray-300 rounded-md p-2">
        </div>

        <!-- 価格 -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">価格</label>
            <input type="number" name="price" min="0" value="{{ $item->price ?? old('price') }}"
                class="w-full border border-gray-300 rounded-md p-2">
        </div>

        <!-- Note -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Note</label>
            <textarea name="note" rows="4"
                class="w-full border border-gray-300 rounded-md p-2">{{ $item->note ?? old('note') }}</textarea>
        </div>

        <!-- ボタン -->
        <div class="flex space-x-3 pt-2">
            <button class="w-full bg-sky-500 hover:bg-sky-600 text-white rounded-md p-2 text-center">
                更新
            </button>

            <a href="/item/" class="w-full text-center p-2 border border-gray-300 rounded-md hover:bg-gray-100">
                戻る
            </a>
        </div>

    </form>

    <form method="post" action="{{ route('item.destroy', $item->id) }}" class="">
        @csrf
        <div class="pt-6 w-1/2">
            <button onclick="return confirm('削除しますか？')" class="w-full bg-red-500 hover:bg-red-600 text-white rounded-md p-2 text-center">
                削除
            </button>
        </div>
    </form>
</main>
@endsection