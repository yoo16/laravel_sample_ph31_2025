<div class="my-2 flex items-center space-x-4">
    <button id="all-filter-btn" class="px-3 py-1 text-xs bg-gray-600 text-white rounded-lg">All</button>
    <button id="men-filter-btn" class="px-2 py-1 text-xs bg-sky-600 text-white rounded-lg">Men</button>
    <button id="women-filter-btn" class="px-2 py-1 text-xs bg-pink-600 text-white rounded-lg">Women</button>
    <form action="/search" method="get" class="text-xs">
        <input id="keyword" type="text" name="keyword" value="{{ $keyword }}" placeholder="Search products..."
            class="px-3 py-1 border border-gray-300 rounded-lg">
        <button type="submit" class="px-3 py-1 bg-gray-600 text-white rounded-lg">Search</button>
    </form>
</div>
