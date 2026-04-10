<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        return view('pages.dashboard.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Ambil semua kategori dari database
        $categories = Category::all();
        return view('pages.dashboard.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
                'price' => 'required|integer',
                'category_id' => 'required|exists:categories,id', // Validasi pastikan ID ada di tabel categories
                'description' => 'nullable|string',
                'image' => 'required|image|mimes:webp,jpeg,png,jpg,JPG,gif',
                'stock' => 'required|integer',
                'status' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            foreach ($e->errors() as $error) {
                ToastMagic::error($error[0]);
            }
            throw $e;
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('product_images', 'public');
            $validated['image'] = $path;
        }

        Product::create($validated);

        ToastMagic::success('Berhasil menambahkan produk!');
        return to_route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // Ambil semua kategori untuk pilihan di form edit
        $categories = Category::all();
        return view('pages.dashboard.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string',
                'price' => 'required|integer',
                'category' => 'required|string',
                'description' => 'nullable|string',
                'image' => 'required|image|mimes:webp,jpeg,png,jpg,JPG,gif',
                'stock' => 'required|integer',
                'status' => 'required|string',
            ]);
        } catch (ValidationException $e) {
            foreach ($e->errors() as $error) {
                ToastMagic::error($error[0]);
            }
            throw $e;
        }

        if ($request->hasFile('image')) {
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
            $path = $request->file('image')->store('product_images', 'public');
            $validated['image'] = $path;
        }

        $product->update($validated);

        ToastMagic::success('Berhasil mengupdate produk: ' . $product->name);
        return to_route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        ToastMagic::success('Berhasil menghapus produk: ' . $product->name);

        return to_route('products.index')->with('success', 'Product deleted successfully!');
    }
}
