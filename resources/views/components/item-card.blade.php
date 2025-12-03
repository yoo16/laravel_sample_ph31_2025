<div
    class="product bg-white rounded-xl shadow cursor-pointer
                        hover:shadow-lg transition transform hover:-translate-y-1 ${cardClass}">
    <a href="{{ route('item.show', $item->id) }}">
        <img src="/images/Oxford-Shirt.png" class="rounded-t-md">
        <div class="info p-3">
            <h3 class="name font-semibold text-lg">{{ $item->name }}</h3>
            <p class="note text-sm text-gray-500">{{ $item->note }}</p>
            <p class="price font-bold text-lg">&yen;{{ number_format($item->price) }}</p>
        </div>
    </a>
    <div class="text-center border-t">
        <form action="/cart/add" method="post">
            <input type="hidden" value="">
            <button class="add-cart-btn text-white bg-sky-500 w-full px-3 py-2">
                Add Cart
            </button>
        </form>
    </div>
</div>
