@extends('layouts.app')

@section('content')
    <main class="container mx-auto">
        <div>
            <h1 class="text-2xl text-center p-2">検索結果</h1>
            <p>{{ $result }}</p>
        </div>

        <section id="product-section" class="my-4">
            <!-- TODO: フィルターボタンと検索フォーム: components/product-nav.blade.php -->

            <div id="product-list" class="mt-4 grid grid-cols-1 sm:grid-cols-3 gap-4">
                ここに商品カードのリストが表示
            </div>
        </section>
    </main>
@endsection
