@extends('layouts.app')

@section('content')
    <main class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow">
        <form action="/item/store" method="post" class="space-y-6">
            @csrf

            <!-- 商品名 -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">商品名</label>
                <input type="text" name="name" value="{{ old('name') }}"
                    class="w-full border border-gray-300 rounded-md p-2">
            </div>

            <!-- 価格 -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">価格</label>
                <input type="number" name="price" min="0" value="{{ old('price') }}"
                    class="w-full border border-gray-300 rounded-md p-2">
            </div>

            <!-- Note -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Note</label>
                <textarea name="note" rows="4" 
                class="w-full border border-gray-300 rounded-md p-2">{{ old('note') }}</textarea>
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
    </main>
@endsection
