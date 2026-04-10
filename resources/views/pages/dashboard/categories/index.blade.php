@extends('layouts.default')

@section('page_content')
    <div class="min-h-screen font-[Poppins]">
        <header class="bg-white border-b shadow-sm border-slate-200">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex items-center gap-3">
                        <div class="p-2 rounded-lg bg-indigo-50">
                            <x-mdi-shape-outline class="w-6 h-6 text-indigo-600" />
                        </div>
                        <h1 class="text-2xl font-bold tracking-tight text-slate-900">Category Management</h1>
                    </div>

                    <div class="flex items-center gap-3">
                        <a href="{{ route('products.index') }}"
                            class="inline-flex items-center px-4 py-2 text-xs font-bold tracking-widest text-indigo-600 uppercase transition-all border-2 border-indigo-600 rounded-xl hover:bg-indigo-50">
                            <x-mdi-package-variant-closed class="w-4 h-4 mr-2" />
                            Back to Products
                        </a>

                        <a href="{{ route('categories.create') }}"
                            class="inline-flex items-center px-4 py-2 text-xs font-bold tracking-widest text-white uppercase transition-all transform bg-indigo-600 border border-transparent shadow-lg rounded-xl shadow-indigo-100 hover:bg-indigo-700 active:scale-95">
                            <x-mdi-plus class="w-4 h-4 mr-2" />
                            Add Category
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <main class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="overflow-hidden bg-white shadow sm:rounded-lg">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Name</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Description</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                        Total Products</th>
                                    <th
                                        class="px-6 py-3 text-xs font-medium tracking-wider text-right text-gray-500 uppercase">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($categories as $category)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-semibold text-gray-900">{{ $category->name }}</div>
                                        </td>
                                        <td class="px-6 py-4">
                                            <div class="text-sm text-gray-500 line-clamp-1">
                                                {{ $category->description ?? '-' }}</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-3 py-1 text-xs font-medium text-indigo-700 bg-indigo-100 rounded-full">
                                                {{ $category->products_count }} Products
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                            <div class="flex justify-end space-x-3">
                                                {{-- Tombol Edit tetap ada --}}
                                                <a href="{{ route('categories.edit', $category->id) }}"
                                                    class="text-zinc-600 hover:text-indigo-600">
                                                    <x-mdi-pencil class="w-5 h-5" />
                                                </a>

                                                {{-- Logika Pembatasan Hapus --}}
                                                @if ($category->products_count > 0)
                                                    {{-- Tampilan jika kategori memiliki produk (Disabled) --}}
                                                    <button type="button"
                                                        title="Cannot delete: Category still has products"
                                                        class="text-gray-300 cursor-not-allowed">
                                                        <x-mdi-trash-can-outline class="w-5 h-5" />
                                                    </button>
                                                @else
                                                    {{-- Tampilan jika kategori kosong (Bisa dihapus) --}}
                                                    <form action="{{ route('categories.destroy', $category->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('Are you sure you want to delete this empty category?');"
                                                        class="inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-zinc-600 hover:text-red-600">
                                                            <x-mdi-trash-can-outline class="w-5 h-5" />
                                                        </button>
                                                    </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-10 text-center text-gray-500">No categories found.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
