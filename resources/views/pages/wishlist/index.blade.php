@extends('layouts.default')

@section('page_title', 'Your Wishlist')

@section('body_style', 'font-[Poppins] bg-gray-50')

@section('page_content')
    <div class="container px-4 py-12 mx-auto max-w-7xl">
        <!-- Header dengan Breadcrumb -->
        <div class="mb-8">
            <nav class="flex mb-4 text-sm text-gray-500">
                <a href="{{ route('products.index') }}" class="hover:text-blue-600">Home</a>
                <span class="mx-2">/</span>
                <a href="{{ route('wishlist.index') }}" class="hover:text-blue-600">Wishlist</a>
            </nav>

            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-3xl font-light tracking-tight text-gray-900">My Wishlist</h1>
                    <p class="mt-1 text-sm text-gray-500">Products you've saved for later</p>
                </div>
                <div class="flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm">
                    <x-mdi-heart-outline class="w-5 h-5 text-gray-400" />
                    <span class="text-sm font-medium text-gray-700">{{ $wishlistItems->count() }} Items</span>
                </div>
            </div>
        </div>

        @if ($wishlistItems->isEmpty())
            <div class="py-20 text-center bg-white border border-gray-100 shadow-sm rounded-2xl">
                <div class="flex items-center justify-center w-24 h-24 mx-auto mb-6 rounded-full bg-gray-50">
                    <x-mdi-heart-outline class="w-12 h-12 text-gray-300" />
                </div>
                <h2 class="text-2xl font-light text-gray-900">Your wishlist is empty</h2>
                <p class="mt-2 text-gray-500">Looks like you haven't added any items to your wishlist yet.</p>
                <div class="flex justify-center mt-8">
                    <a href="{{ route('products.index') }}"
                        class="inline-flex items-center px-8 py-3 text-sm font-medium text-white transition-all bg-gray-900 rounded-full shadow-lg hover:bg-gray-800 gap-x-2 shadow-gray-200">
                        <x-mdi-shopping-outline class="w-5 h-5" />
                        Start Shopping
                    </a>
                </div>
            </div>
        @else
            <div class="space-y-4">
                @foreach ($wishlistItems as $index => $item)
                    <div class="relative flex flex-col items-start gap-6 p-6 transition-all duration-300 bg-white border border-gray-100 shadow-sm group rounded-2xl hover:shadow-md md:flex-row md:items-center">

                        <!-- Product Image with zoom effect -->
                        <div class="relative flex-shrink-0 w-32 h-32 overflow-hidden bg-gray-100 rounded-xl">
                            <img src="{{ asset('storage/' . $item->product->image) }}"
                                 alt="{{ $item->product->name }}"
                                class="object-cover w-full h-full transition-transform duration-500 transform group-hover:scale-105">

                            <!-- Stock Badge on Image (Mobile) -->
                            <div class="absolute top-2 left-2 md:hidden">
                                <span class="inline-flex items-center px-2 py-1 text-xs font-medium rounded-full gap-x-1
                                    {{ $item->product->stock > 0 ? 'bg-green-50 text-green-700' : 'bg-red-50 text-red-700' }}">
                                    <x-dynamic-component :component="'mdi-' . ($item->product->stock > 0 ? 'check-circle' : 'close-circle')" class="w-3 h-3" />
                                    {{ $item->product->stock > 0 ? 'In Stock' : 'Out of Stock' }}
                                </span>
                            </div>
                        </div>

                        <!-- Product Details -->
                        <div class="flex-1 text-center md:text-left">
                            <div class="flex items-center justify-center gap-2 md:justify-start">
                                <span class="text-[10px] uppercase tracking-widest text-gray-400 font-semibold">{{ $item->product->category }}</span>
                                @if($item->product->is_new)
                                    <span class="px-2 py-0.5 text-[10px] font-semibold text-blue-600 uppercase bg-blue-50 rounded-full">New</span>
                                @endif
                            </div>

                            <h3 class="mt-1 text-lg font-medium text-gray-800">{{ $item->product->name }}</h3>

                            <div class="flex flex-col items-center mt-2 md:items-start">
                                <!-- Stock Status (Desktop) -->
                                <span class="items-center hidden px-2 py-0.5 text-xs rounded-full md:inline-flex gap-x-1
                                    {{ $item->product->stock > 0 ? 'bg-green-50 text-green-700' : 'bg-red-50 text-red-700' }}">
                                    <x-dynamic-component :component="'mdi-' . ($item->product->stock > 0 ? 'check-circle' : 'close-circle')" class="w-4 h-4" />
                                    {{ $item->product->stock > 0 ? 'In Stock' : 'Out of Stock' }}
                                </span>

                                <!-- Price -->
                                <div class="mt-2">
                                    @if($item->product->old_price)
                                        <span class="text-sm text-gray-400 line-through">Rp {{ number_format($item->product->old_price, 0, ',', '.') }}</span>
                                    @endif
                                    <p class="text-2xl font-light text-gray-900">Rp {{ number_format($item->product->price, 0, ',', '.') }}</p>
                                </div>

                                <!-- Product Rating (Optional) -->
                                @if($item->product->rating)
                                    <div class="flex items-center mt-2 gap-x-1">
                                        @for($i = 1; $i <= 5; $i++)
                                            <x-mdi-star :class="$i <= $item->product->rating ? 'text-yellow-400' : 'text-gray-200'" class="w-4 h-4" />
                                        @endfor
                                        <span class="ml-1 text-xs text-gray-500">({{ $item->product->reviews_count ?? 0 }})</span>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col items-center w-full gap-3 md:w-auto md:flex-row">
                            <!-- Add to Cart Button -->
                            <form action="{{ route('wishlist.move-to-cart', $item->id) }}" method="POST" class="w-full md:w-auto">
                                @csrf
                                <button type="submit"
                                    class="inline-flex items-center justify-center w-full px-6 py-3 text-sm text-white transition-all bg-gray-900 rounded-lg md:w-auto hover:bg-gray-800 gap-x-2 disabled:opacity-30 disabled:cursor-not-allowed group"
                                    {{ $item->product->stock <= 0 ? 'disabled' : '' }}>
                                    <x-mdi-cart-outline class="w-5 h-5 transition-transform group-hover:-translate-y-0.5" />
                                    <span>Add to Cart</span>
                                </button>
                            </form>

                            <!-- Remove Button -->
                            <form action="{{ route('wishlist.remove', $item->id) }}" method="POST" class="w-full md:w-auto">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-flex items-center justify-center w-full px-4 py-3 text-sm text-gray-500 transition-all rounded-lg bg-gray-50 md:w-auto hover:text-red-500 hover:bg-red-50 gap-x-2"
                                    onclick="return confirm('Remove this item from your wishlist?')">
                                    <x-mdi-delete-outline class="w-5 h-5" />
                                    <span class="md:hidden">Remove</span>
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Bottom Actions -->
            <div class="flex items-center justify-between mt-8">
                <a href="{{ route('products.index') }}"
                   class="inline-flex items-center text-sm text-gray-500 transition hover:text-gray-700 gap-x-2">
                    <x-mdi-arrow-left class="w-4 h-4" />
                    Continue Shopping
                </a>
            </div>
        @endif
    </div>
@endsection
