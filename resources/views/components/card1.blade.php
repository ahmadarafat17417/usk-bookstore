@props([
    'image',
    'name',
    'price',
    'category',
    'stock',
    'product',
    'description',
    'addToCart',
    'addToWishlist',
    'inCart' => false,
    'inWishlist' => false
])

<div class="flex items-start justify-between gap-4 p-4 transition-shadow bg-white border rounded-lg shadow-sm hover:shadow-md">
    <img src="{{ $image }}" alt="{{ $name }}"
        class="object-cover w-16 h-16 rounded shrink-0 lg:w-20 lg:h-20" />

    <div class="flex-1 min-w-0 space-y-1">
        <div class="flex items-start justify-between">
            <h3 class="text-sm font-semibold text-gray-900 truncate lg:text-lg">{{ $name }}</h3>
            <p class="ml-2 text-sm font-medium text-gray-900 lg:text-md whitespace-nowrap">Rp. {{ number_format($price, 0, ',', '.') }}</p>
        </div>

        <div class="flex items-center gap-2">
            <span class="px-2 py-0.5 text-xs font-medium rounded-full bg-blue-100 text-blue-800">{{ $category }}</span>
            <span class="px-2 py-0.5 text-xs font-medium rounded-full {{ ($product->stock > 0) ? ' bg-green-100 text-green-800' : 'bg-red-100 text-red-800'}}">
                {{ ($product->stock > 0) ? 'Tersedia' : 'Habis'}} ({{ $stock }})
            </span>
        </div>


        <p class="text-xs text-gray-500 line-clamp-2 lg:text-sm lg:line-clamp-3">
            {{ $description }}
        </p>
    </div>

    <div class="flex flex-col justify-center h-full gap-3 ml-2">
        <form method="POST" action="{{ $addToWishlist }}">
            @csrf
            <button type="submit"
                class="{{ $inWishlist ? 'text-red-500' : 'text-gray-400 hover:text-red-500' }} transition-transform active:scale-125 duration-150"
                aria-label="Wishlist">
                @if($inWishlist)
                    <x-fas-heart class="w-5 h-5 lg:w-6 lg:h-6" />
                @else
                    <x-far-heart class="w-5 h-5 lg:w-6 lg:h-6" />
                @endif
            </button>
        </form>

        <form action="{{ $addToCart }}" method="POST">
            @csrf
            <button type="submit"
                class="{{ $inCart ? 'text-blue-600' : 'text-gray-400 hover:text-blue-600' }} transition-transform active:scale-125 duration-150"
                {{ $product->stock <= 0 ? 'disabled' : '' }}
                aria-label="Cart">
                @if($inCart)
                    <x-fas-shopping-cart class="w-5 h-5 lg:w-6 lg:h-6" />
                @else
                    <x-fas-cart-plus class="w-5 h-5 lg:w-6 lg:h-6" />
                @endif
            </button>
        </form>
    </div>
</div>
