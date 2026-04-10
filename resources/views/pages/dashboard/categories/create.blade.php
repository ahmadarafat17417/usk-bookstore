@extends('layouts.default')

@section('page_title', 'Add Category')

@section('page_content')
    <div class="min-h-screen bg-gray-100 font-[Poppins]">
        <header class="bg-white shadow">
            <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h1 class="text-2xl font-bold text-gray-900">Add New Category</h1>
            </div>
        </header>

        <main class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="px-4 py-6 sm:px-0">
                <div class="mx-auto overflow-hidden bg-white shadow sm:rounded-lg">
                    <form action="{{ route('categories.store') }}" method="POST" class="px-8 py-8">
                        @csrf

                        <div class="mb-6">
                            <label for="name" class="block text-sm font-medium text-gray-700">Category Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="e.g. Makanan Berat" required
                                class="block w-full px-4 py-3 mt-1 border border-gray-300 shadow-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('name')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-8">
                            <label for="description" class="block text-sm font-medium text-gray-700">Description (Optional)</label>
                            <textarea name="description" id="description" rows="4" placeholder="Describe this category..."
                                class="block w-full px-4 py-3 mt-1 border border-gray-300 shadow-sm rounded-xl focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">{{ old('description') }}</textarea>
                            @error('description')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end gap-3">
                            <a href="{{ route('categories.index') }}"
                                class="px-6 py-2 text-sm font-semibold text-gray-600 transition-all bg-white border border-gray-300 rounded-xl hover:bg-gray-50">
                                Cancel
                            </a>
                            <button type="submit"
                                class="px-6 py-2 text-sm font-semibold text-white transition-all bg-indigo-600 border border-transparent shadow-lg rounded-xl shadow-indigo-100 hover:bg-indigo-700">
                                Save Category
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
@endsection
