<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Product;
use App\Models\Order; // You'll need to create this model
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::with('product')->where('user_id', Auth::id())->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        $taxRate = 0.1;
        $tax = $subtotal * $taxRate;
        $total = $subtotal + $tax;

        return view('pages.cart.index', [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'tax' => $tax,
            'total' => $total,
        ]);
    }

    public function addToCart($productId)
    {
        $product = Product::findOrFail($productId);

        $cartItem = CartItem::where('user_id', Auth::id())->where('product_id', $productId)->first();

        if ($cartItem) {
            $cartItem->delete();
            ToastMagic::info('Produk dihapus dari keranjang: ', $product->name);
            return back()->with('success', 'Item removed from cart');
        }

        CartItem::create([
            'user_id' => Auth::id(),
            'product_id' => $productId,
            'quantity' => 1,
        ]);

        ToastMagic::success('Berhasil menambahkan produk ke keranjang: ', $product->name);
        return back()->with('success', 'Item added to cart!');
    }

    public function increase($id)
    {
        $cartItem = CartItem::where('user_id', Auth::id())->findOrFail($id);
        $cartItem->increment('quantity');
        return back();
    }

    public function decrease($id)
    {
        $cartItem = CartItem::where('user_id', Auth::id())->findOrFail($id);

        if ($cartItem->quantity > 1) {
            $cartItem->decrement('quantity');
        }

        return back();
    }

    public function remove($id)
    {
        $cartItem = CartItem::where('user_id', Auth::id())->findOrFail($id);
        $cartItem->delete();

        return back()->with('success', 'Item removed from cart');
    }

    public function checkout(Request $request)
    {
        // 1. Validasi input, termasuk file bukti pembayaran
        $request->validate([
            'payment_proof' => $request->payment_method === 'cod' ? 'nullable' : 'required|image|max:2048',
            'payment_method' => 'required|string',
        ]);

        $cartItems = CartItem::with('product')->where('user_id', Auth::id())->get();

        if ($cartItems->isEmpty()) {
            return back()->with('error', 'Your cart is empty!');
        }

        try {
            // 2. Simpan file bukti pembayaran ke storage/app/public/payment_proofs
            $proofPath = null;
            if ($request->hasFile('payment_proof')) {
                $proofPath = $request->file('payment_proof')->store('payment_proofs', 'public');
            }

            $order = DB::transaction(function () use ($cartItems, $request, $proofPath) {
                $subtotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
                $tax = $subtotal * 0.1;
                $total = $subtotal + $tax;

                // 3. Masukkan 'payment_proof' ke dalam pembuatan Order
                $order = Order::create([
                    'order_number' => 'ORD-' . strtoupper(Str::random(10)),
                    'user_id' => Auth::id(),
                    'subtotal' => $subtotal,
                    'tax' => $tax,
                    'total' => $total,
                    'status' => 'processing', // Status awal saat admin perlu verifikasi
                    'payment_method' => $request->payment_method,
                    'payment_status' => 'pending', // Pending sampai admin klik "Accept"
                    'payment_proof' => $proofPath, // Path file yang baru saja diupload
                    'paid_at' => now(),
                ]);

                foreach ($cartItems as $item) {
                    $product = $item->product;

                    if ($product->stock < $item->quantity) {
                        throw new \Exception("Stok tidak mencukupi untuk {$product->name}");
                    }

                    $order->items()->create([
                        'product_id' => $product->id,
                        'product_name' => $product->name,
                        'price' => $product->price,
                        'quantity' => $item->quantity,
                        'subtotal' => $product->price * $item->quantity,
                    ]);

                    $product->decrement('stock', $item->quantity);
                }

                CartItem::where('user_id', Auth::id())->delete();

                return $order;
            });

            ToastMagic::success('Bukti pembayaran berhasil diunggah! Menunggu konfirmasi admin.');
            return redirect()->route('order.receipt', $order->order_number);
        } catch (\Exception $e) {
            // Jika DB Transaction gagal, hapus foto yang sudah terlanjur diupload
            if (isset($proofPath)) {
                Storage::disk('public')->delete($proofPath);
            }

            ToastMagic::error('Checkout gagal: ' . $e->getMessage());
            return back()->with('error', $e->getMessage());
        }
    }

    public function receipt($orderNumber)
    {
        $order = Order::with('items.product')->where('order_number', $orderNumber)->where('user_id', Auth::id())->firstOrFail();

        return view('pages.order.receipt', compact('order'));
    }

    public function orders()
    {
        // Mengambil order milik user yang login, diurutkan dari yang terbaru
        $orders = Order::where('user_id', Auth::id())->latest()->get();

        return view('pages.main.orders', compact('orders'));
    }
}
