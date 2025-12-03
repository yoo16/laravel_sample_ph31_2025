<!-- TODO: レイアウト指定(extends): layouts/app.blade.php -->
@extends('layouts.app')

@section('content')
<!-- TODO: メインコンテンツ(section): content -->
    <main class="container mx-auto px-4 pt-6">
        <section class="flex">
            <div class="w-1/2 rounded-lg overflow-hidden">
                <img src="/images/Oxford-Shirt.png" class="">
            </div>
            <div class="w-1/2 pl-6 flex flex-col justify-between">
                <div>
                    <div class="info p-3 space-y-3">
                        <h3 class="name font-semibold text-2xl">{{ $item->name }}</h3>
                        <p class="note text-gray-500">{{ $item->note }}</p>
                        <p class="price font-bold text-2xl">&yen;{{ number_format($item->price) }}</p>
                    </div>
                </div>
                <div class="text-center border-t">
                    <button class="add-cart-btn text-white text-lg bg-sky-500 px-3 py-2 w-full rounded-lg">
                        Add Cart
                    </button>
                </div>
            </div>
        </section>
    </main>
@endsection