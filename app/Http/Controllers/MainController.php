<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function welcome()
    {
        // awalnya ini redirect ke page welcome tapi sekarang redirect ke page login aja
        return view('pages.auth.login');
    }

    public function index()
    {
        $products = Product::with('category')->get();
        return view('pages.main.index', compact('products'));
    }

    public function about()
    {
        return view('pages.main.about');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Cari produk yang namanya mirip atau kategori namanya mirip
        $products = Product::with('category')
            ->where('name', 'LIKE', "%{$query}%")
            ->orWhereHas('category', function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%");
            })
            ->get();

        return view('pages.main.search', compact('products', 'query'));
    }
}
