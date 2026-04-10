<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Devrabiul\ToastMagic\Facades\ToastMagic;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        // Ambil pesanan terbaru dengan eager loading relasi user dan items
        $orders = Order::with(['user', 'items'])
            ->latest()
            ->get();
        return view('pages.dashboard.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        // Load item pesanan untuk ditampilkan di popup
        return response()->json($order->load(['user', 'items.product']));
    }

    public function accept(Order $order)
    {
        $order->update([
            'status' => 'completed',
            'payment_status' => 'paid',
        ]);

        ToastMagic::success('Berhasil menyelesaikan pesanan!');

        return back()->with('success', 'Pesanan #' . $order->order_number . ' telah diterima.');
    }

    public function decline(Order $order)
    {
        // Jika ditolak, biasanya stok dikembalikan
        foreach ($order->items as $item) {
            $item->product->increment('stock', $item->quantity);
        }

        $order->update([
            'status' => 'cancelled',
            'payment_status' => 'refunded', // atau tetap pending/failed
        ]);

        ToastMagic::error("Pesanan telah ditolak.");

        return back()->with('error', 'Pesanan #' . $order->order_number . ' telah ditolak.');
    }
}
