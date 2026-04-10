@extends('layouts.default')

@section('page_title', 'Inception Bookstore - Read Your Dreams')

@section('page_styles')
    <style>
        @keyframes zoom-in-out {
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .zoom-in-out {
            animation: zoom-in-out 500ms linear;
        }

        html { scroll-behavior: smooth; }

        .scrollbar-hide::-webkit-scrollbar { display: none; }
        .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
@endsection

@section('page_content')

    {{-- HERO BANNER - Inception Bookstore --}}
    <div class="relative w-full h-[85vh] min-h-150 flex items-center overflow-hidden bg-slate-50 font-[Poppins]">
        {{-- Background Image with Light Overlay --}}
        <div class="absolute inset-0 z-0">
            <img class="object-cover w-full h-full" src="img/about/banner.jpg" alt="Library Background">
            {{-- Light Gradient Overlay --}}
            <div class="absolute inset-0 bg-gradient-to-r from-gray-100 via-white/80 to-transparent"></div>
        </div>

        {{-- Banner Content --}}
        <div class="relative z-10 w-full px-6 mx-auto max-w-7xl">
            <div class="max-w-4xl">
                <h1 class="mb-8 font-light tracking-tight text-slate-900">
                    <span class="block mb-4 text-xl font-normal sm:text-2xl text-indigo-600 uppercase tracking-[0.3em] animate-fade-in">
                        Welcome to
                    </span>

                    <span class="block text-5xl font-black leading-none tracking-tighter uppercase sm:text-7xl md:text-8xl text-slate-900">
                        Inception
                    </span>

                    {{-- Bookstore with Indigo Stroke Effect --}}
                    <p class="mt-2 font-extrabold tracking-tighter text-indigo-500 uppercase text-8xl sm:text-8xl md:text-9xl opacity-90"
                        >
                        Bookstore
                    </p>
                </h1>

                <p class="max-w-xl mb-10 text-lg font-light tracking-wide text-slate-600 sm:text-xl">
                    Dive into worlds unknown. From gripping fantasies to profound realities, find the stories that shape your dreams.
                </p>

                <div class="flex flex-wrap gap-4">
                    <a href="#product-categories"
                        class="group relative inline-flex items-center gap-3 px-10 py-4 text-sm font-bold tracking-[0.2em] text-white uppercase transition-all bg-indigo-600 hover:bg-indigo-700 shadow-lg shadow-indigo-200">
                        Explore Catalog
                        <x-mdi-arrow-right class="w-5 h-5 transition-transform group-hover:translate-x-1" />
                    </a>
                </div>
            </div>
        </div>

        {{-- Scroll Indicator --}}
        <div class="absolute z-10 -translate-x-1/2 bottom-10 left-1/2 animate-bounce">
            <x-mdi-chevron-double-down class="w-8 h-8 text-indigo-400/50" />
        </div>
    </div>



    {{-- UPDATED CATEGORIES - Light Theme Indigo --}}
    <section id="categories" class="py-20 bg-slate-50 font-[Poppins]">
        <div class="px-6 mx-auto max-w-7xl">
            <div class="max-w-3xl mb-16">
                <h2 class="mb-4 text-4xl font-bold tracking-tight uppercase text-slate-900">Genre Collections</h2>
                <div class="w-20 h-1 mb-6 bg-indigo-600"></div>
                <p class="text-lg font-light text-slate-500">
                    Find your next obsession through our carefully curated literary genres.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                @php
                    $categories = [
                        ['id' => 'Fantasy', 'title' => 'Fantasy', 'desc' => 'Epic Worlds', 'img' => 'fantasy.png'],
                        ['id' => 'Romance', 'title' => 'Romance', 'desc' => 'Heartfelt Tales', 'img' => 'romance.png'],
                        ['id' => 'Sci-fi', 'title' => 'Sci-fi', 'desc' => 'Future Visions', 'img' => 'scifi.png'],
                        ['id' => 'Nonfiction', 'title' => 'Nonfiction', 'desc' => 'Real Knowledge', 'img' => 'nonfiction.png'],
                    ];
                @endphp

                @foreach ($categories as $cat)
                    <a href="#category-{{ $cat['id'] }}"
                        class="relative overflow-hidden transition-all bg-white border shadow-sm h-72 rounded-2xl group border-slate-200 hover:shadow-xl hover:border-indigo-200">
                        <div class="absolute inset-0 z-0 flex items-center justify-center p-8">
                            <img src="{{ asset('img/categories/' . $cat['img']) }}"
                                class="object-contain w-full h-full pb-12 transition-all duration-700 opacity-50 group-hover:opacity-100 group-hover:scale-120"
                                alt="{{ $cat['title'] }}">
                        </div>
                        <div class="absolute inset-0 z-10 flex flex-col justify-end p-6 bg-gradient-to-t from-white/30 to-transparent">
                            <span class="text-[10px] font-bold tracking-widest text-indigo-600 uppercase mb-1">{{ $cat['desc'] }}</span>
                            <h3 class="text-2xl font-extrabold tracking-tight uppercase text-slate-900">{{ $cat['title'] }}</h3>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- BEST ITEM - Indigo Accents --}}
    <section class="py-16 bg-white font-[Poppins]">
        <div class="px-6 mx-auto max-w-7xl">
            <div class="flex items-center justify-between mb-10">
                <div class="flex items-center gap-3">
                    <h2 class="text-2xl font-bold tracking-tighter uppercase text-slate-900">Must Reads</h2>
                    <span class="w-8 h-px bg-indigo-200"></span>
                    <p class="hidden text-xs font-medium tracking-widest text-indigo-500 uppercase sm:block">Current Bestsellers</p>
                </div>
            </div>

            <div class="flex gap-6 pb-8 overflow-x-auto scrollbar-hide">
                @foreach ($products->take(8) as $product)
                    <div class="min-w-[180px] sm:min-w-[240px] group">
                        <div class="relative mb-4 overflow-hidden bg-slate-50 aspect-[2/3] flex items-center justify-center p-6 rounded-xl border border-slate-100 transition-all group-hover:shadow-lg group-hover:border-indigo-100">
                            <img src="{{ asset('storage/' . $product->image) }}"
                                class="object-contain w-full h-full transition-transform duration-500 shadow-md group-hover:scale-105"
                                alt="{{ $product->name }}">

                            <div class="absolute inset-0 flex items-center justify-center gap-3 opacity-0 bg-indigo-600/5 backdrop-blur-[2px] group-hover:opacity-100 transition-all">
                                <button class="p-3 text-indigo-600 transition-all bg-white rounded-full shadow-md hover:bg-indigo-600 hover:text-white">
                                    <x-mdi-heart-outline class="w-5 h-5" />
                                </button>
                                <button class="p-3 text-indigo-600 transition-all bg-white rounded-full shadow-md hover:bg-indigo-600 hover:text-white">
                                    <x-mdi-cart-outline class="w-5 h-5" />
                                </button>
                            </div>
                        </div>
                        <div class="px-1">
                            <h3 class="text-sm font-bold uppercase truncate text-slate-900">{{ $product->name }}</h3>
                            <p class="text-sm font-semibold text-indigo-600">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- PRODUCT LISTINGS - Indigo Themed Grid --}}
    <div id="product-categories" class="py-20 bg-slate-50 font-[Poppins]">
    {{-- Revisi: Grouping berdasarkan nama kategori melalui relasi --}}
    @php
        $groupedProducts = $products->groupBy(function($product) {
            return $product->category->name ?? 'Uncategorized';
        });
    @endphp

    @foreach ($groupedProducts as $categoryName => $categoryProducts)
        {{-- Revisi: ID menggunakan Slug agar link internal (jangkar) bekerja dengan baik --}}
        <section id="category-{{ Str::slug($categoryName) }}" class="mb-24 last:mb-10 scroll-mt-24">
            <div class="px-6 mx-auto max-w-7xl">
                <div class="flex items-end justify-between pb-8 mb-10 border-b border-slate-200">
                    <div>
                        <span class="text-[10px] font-bold tracking-[0.4em] text-indigo-500 uppercase block mb-2">
                            Shelf: {{ $categoryName }}
                        </span>
                        <h2 class="text-3xl font-bold tracking-tight uppercase text-slate-900 lg:text-4xl">
                            {{ $categoryName }}
                        </h2>
                    </div>
                    <div class="hidden text-sm italic sm:block text-slate-400">
                        {{ $categoryProducts->count() }} Books available
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-x-6 gap-y-12 md:grid-cols-3 lg:grid-cols-4">
                    @foreach ($categoryProducts as $product)
                        <div class="relative flex flex-col group">
                            <div class="relative overflow-hidden bg-white aspect-[2/3] rounded-xl border border-slate-200 transition-all duration-500 group-hover:shadow-2xl group-hover:border-indigo-200">
                                @if ($loop->first)
                                    <span class="absolute top-3 left-3 z-10 bg-indigo-600 text-white text-[9px] font-bold uppercase px-2 py-1 rounded">
                                        New Arrival
                                    </span>
                                @endif

                                <img src="{{ asset('storage/' . $product->image) }}"
                                     class="object-contain w-full h-full p-8 transition-all group-hover:scale-110"
                                     alt="{{ $product->name }}">

                                {{-- Actions --}}
                                <div class="absolute flex flex-col gap-2 transition-all duration-300 translate-x-12 opacity-0 top-4 right-4 group-hover:translate-x-0 group-hover:opacity-100">
                                    {{-- Pastikan route ini sesuai dengan controller kamu --}}
                                    <form action="{{ route('wishlist.add', $product->id) }}" method="POST">
                                        @csrf
                                        <button class="p-2.5 bg-white text-slate-400 hover:text-indigo-600 rounded-full shadow-lg border border-slate-100 transition-all">
                                            <x-mdi-heart-outline class="w-5 h-5" />
                                        </button>
                                    </form>
                                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                        @csrf
                                        <button class="p-2.5 bg-white text-slate-400 hover:text-indigo-600 rounded-full shadow-lg border border-slate-100 transition-all">
                                            <x-mdi-cart-outline class="w-5 h-5" />
                                        </button>
                                    </form>
                                </div>

                                <div class="absolute inset-x-0 bottom-0 p-4 transition-all duration-300 translate-y-full group-hover:translate-y-0">
                                    <a href="#" class="block w-full py-3 bg-indigo-600 text-white text-center text-[10px] font-bold uppercase tracking-widest rounded-lg shadow-lg hover:bg-indigo-700">
                                        Go To Details
                                    </a>
                                </div>
                            </div>

                            <div class="mt-5">
                                <h3 class="text-sm font-bold uppercase truncate text-slate-900">{{ $product->name }}</h3>
                                {{-- Menampilkan Nama Kategori di bawah judul buku (opsional) --}}
                                <p class="text-[10px] text-slate-400 uppercase tracking-wider mb-1">
                                    {{ $product->category->name ?? 'General' }}
                                </p>
                                <p class="mt-1 text-sm font-bold text-indigo-600">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endforeach
</div>

@endsection
