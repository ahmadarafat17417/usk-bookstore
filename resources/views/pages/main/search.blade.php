@extends('layouts.default')

@section('page_title', 'Search Results')

@section('page_content')
<div class="min-h-screen bg-slate-50 font-[Poppins] py-12">
    <div class="px-6 mx-auto max-w-7xl">

        <div class="pb-8 mb-12 border-b border-slate-200">
            <h1 class="text-3xl font-light text-slate-600">
                Hasil Pencarian untuk: <span class="font-bold text-slate-900">"{{ $query }}"</span>
            </h1>
            <p class="mt-2 text-sm italic text-slate-400">Ditemukan {{ $products->count() }} buku yang cocok.</p>
        </div>

        @if($products->isEmpty())
            <div class="flex flex-col items-center justify-center py-20 bg-white shadow-sm rounded-3xl">
                <x-mdi-book-search-outline class="w-24 h-24 mb-4 text-slate-200" />
                <h3 class="text-xl font-bold text-slate-900">Maaf, buku tidak ditemukan</h3>
                <p class="mt-2 text-slate-500">Coba gunakan kata kunci lain seperti genre atau judul buku.</p>
                <a href="{{ route('main.index') }}" class="px-8 py-3 mt-6 font-bold text-white bg-indigo-600 rounded-xl">Kembali Belanja</a>
            </div>
        @else
            <div class="grid grid-cols-2 gap-x-6 gap-y-12 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($products as $product)
                    <div class="relative flex flex-col group">
                        <div class="relative overflow-hidden bg-white aspect-[2/3] rounded-xl border border-slate-200 transition-all duration-500 group-hover:shadow-2xl group-hover:border-indigo-200">

                            <img src="{{ asset('storage/' . $product->image) }}"
                                 class="object-contain w-full h-full p-8 transition-all group-hover:scale-110"
                                 alt="{{ $product->name }}">

                            <div class="absolute flex flex-col gap-2 transition-all duration-300 translate-x-12 opacity-0 top-4 right-4 group-hover:translate-x-0 group-hover:opacity-100">
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
        @endif
    </div>
</div>
@endsection
