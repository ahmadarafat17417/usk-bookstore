@extends('layouts.default')

@section('page_content')
    <div class="min-h-screen font-[Poppins]">
        <!-- Header -->
        <header class="bg-white border-b shadow-sm border-slate-200">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">

                    <div class="flex items-center gap-3">
                        <div class="p-2 rounded-lg bg-indigo-50">
                            <x-mdi-package-variant-closed class="w-6 h-6 text-indigo-600" />
                        </div>
                        <h1 class="text-2xl font-bold tracking-tight text-slate-900">Product Management</h1>
                    </div>

                    <div class="flex flex-wrap items-center gap-3">
                        <a href="{{ route('admin.contacts.index') }}"
                            class="inline-flex items-center px-4 py-2 text-xs font-bold tracking-widest text-green-600 uppercase transition-all border-2 border-green-600 rounded-xl hover:bg-green-50 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2">
                            <x-mdi-message class="w-4 h-4 mr-2" />
                            Messages
                        </a>
                        {{-- Button Recent Orders --}}
                        <a href="{{ route('orders.index') }}"
                            class="inline-flex items-center px-4 py-2 text-xs font-bold tracking-widest uppercase transition-all border-2 text-zinc-600 border-zinc-600 rounded-xl hover:bg-zinc-50 focus:outline-none focus:ring-2 focus:ring-zinc-500 focus:ring-offset-2">
                            <x-mdi-history class="w-4 h-4 mr-2" />
                            Recent Orders
                        </a>

                        <a href="{{ route('categories.index') }}"
                            class="inline-flex items-center px-4 py-2 text-xs font-bold tracking-widest text-indigo-600 uppercase transition-all border-2 border-indigo-600 rounded-xl hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            <x-mdi-shape-outline class="w-4 h-4 mr-2" />
                            Categories
                        </a>

                        <a href="{{ route('admin.users.index') }}"
                            class="inline-flex items-center px-4 py-2 text-xs font-bold tracking-widest uppercase transition-all border-2 text-cyan-600 border-cyan-600 rounded-xl hover:bg-cyan-50 focus:outline-none focus:ring-2 focus:ring-cyan-500 focus:ring-offset-2">
                            <x-mdi-account class="w-4 h-4 mr-2" />
                            Users
                        </a>

                        <a href="{{ route('products.create') }}"
                            class="inline-flex items-center px-4 py-2 text-xs font-bold tracking-widest text-white uppercase transition-all transform bg-indigo-600 border border-transparent shadow-lg rounded-xl shadow-indigo-100 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 active:scale-95">
                            <x-mdi-plus class="w-4 h-4 mr-2" />
                            Add Product
                        </a>
                    </div>

                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8 font-[Poppins]">
            <div class="px-4 py-6 sm:px-0">
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <!-- Products Table -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Image</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Name</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Category</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Price</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Stock</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Status</th>
                                    <th scope="col"
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-right text-gray-500 uppercase">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex-shrink-0 w-10 h-10">
                                                <img class="object-cover w-10 h-10 rounded-full"
                                                    src="{{ asset('storage/' . $product->image) }}" alt="Product image">
                                            </div>
                                        </td>

                                        <td class="px-6 py-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                                            <div class="max-w-xs text-xs text-gray-500 break-words whitespace-normal">
                                                {{ $product->description }}
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{-- Mengambil properti 'name' dari objek category --}}
                                            {{ $product->category->name ?? 'Uncategorized' }}
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                            {{ $product->stock }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full  {{ $product->stock > 0 ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }} ">
                                                {{ $product->stock > 0 ? 'Tersedia' : 'Habis' }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                            <div class="flex justify-end space-x-3">
                                                <a href="{{ route('products.edit', $product->id) }}"
                                                    class="text-zinc-600 hover:text-zinc-900" title="Edit Product">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>

                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                                    onsubmit="return confirm('Are you sure you want to delete this product?');"
                                                    class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="cursor-pointer text-zinc-600 hover:text-red-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="px-4 py-3 bg-white border-t border-gray-200 sm:px-6">
                        <div class="flex items-center justify-between">
                            <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-sm text-gray-700">
                                        Showing <span class="font-medium">1</span> to <span class="font-medium">2</span>
                                        of <span class="font-medium">2</span> results
                                    </p>
                                </div>
                                <div>
                                    <nav class="relative z-0 inline-flex -space-x-px rounded-md shadow-sm"
                                        aria-label="Pagination">
                                        <a href="#"
                                            class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-l-md hover:bg-gray-50">
                                            <span class="sr-only">Previous</span>
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                        <a href="#" aria-current="page"
                                            class="relative z-10 inline-flex items-center px-4 py-2 text-sm font-medium border text-zinc-600 border-zinc-500 bg-zinc-50">
                                            1
                                        </a>
                                        <a href="#"
                                            class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 hover:bg-gray-50">
                                            2
                                        </a>
                                        <a href="#"
                                            class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-r-md hover:bg-gray-50">
                                            <span class="sr-only">Next</span>
                                            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
