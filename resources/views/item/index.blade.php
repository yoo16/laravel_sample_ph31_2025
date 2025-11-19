@extends('layouts.app')

@section('content')
    <main class="container mx-auto px-4">
        <h2 class="font-bold text-2xl text-center p-2">商品一覧</h2>
        <!-- 新規追加ボタン -->
        <div class="py-4 flex justify-start">
            <a href="{{ route('item.create') }}" class="text-white bg-sky-500 hover:bg-sky-600 py-1 px-3 rounded shadow">
                新規追加
            </a>
        </div>

        <!-- ヘッダー行 -->
        <div class="grid grid-cols-[15%_40%_15%_15%_15%] bg-gray-100 font-semibold text-gray-700 py-2 px-3 rounded">
            <div class="text-center">編集</div>
            <div>商品名</div>
            <div>価格</div>
            <div>在庫</div>
            <div class="text-center">詳細</div>
        </div>

        <!-- 商品一覧 -->
        @foreach ($items as $item)
            <div class="grid grid-cols-[15%_40%_15%_15%_15%] items-center border-b py-3 px-3 hover:bg-gray-50">

                <!-- 編集 -->
                <div class="text-center">
                    <a href="{{ route('item.edit', $item->id) }}" class="text-green-600 hover:underline">
                        編集
                    </a>
                </div>

                <!-- 商品名 -->
                <div>{{ $item->name }}</div>

                <!-- 価格 -->
                <div>¥{{ number_format($item->price) }}</div>

                <!-- 在庫 -->
                <div>{{ $item->stock ?? '-' }}</div>

                <!-- 詳細 -->
                <div class="text-center">
                    <a href="{{ route('item.show', $item->id) }}" class="text-blue-500 hover:underline">
                        詳細
                    </a>
                </div>

            </div>
        @endforeach

        @if (!$items)
            <p class="text-center text-gray-500 py-10">商品がありません。</p>
        @endif

    </main>
@endsection
