{{-- resouces/views/layouts/app.blade.php をレイアウトとする --}}
@extends('layouts.app')

@section('content')
    <main class="container mx-auto">
        <section class="my-6">
            <h2 class="text-4xl font-light tracking-wide text-gray-800 mb-6">
                Embrace Every Moment with Comfort
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
                春のそよ風のように、軽やかに。<br>
                Spring Apparel は、あなたの日常に寄り添うワードローブをお届けします。
            </p>
        </section>

        <section id="product-section" class="my-4">
            <!-- TODO: フィルターボタンと検索フォーム: components/product-nav.blade.php -->

            <div id="product-list" class="mt-4 grid grid-cols-1 sm:grid-cols-3 gap-4">
                ここに商品カードのリストが表示
            </div>
        </section>
    </main>
@endsection
