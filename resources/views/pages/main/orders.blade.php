@extends('layouts.default')

@section('page_title', 'My Orders')

@section('page_content')
<div class="min-h-screen font-[Poppins] bg-gray-50">
    <header class="bg-white border-b shadow-sm border-slate-200">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center gap-3">
                <div class="p-2 rounded-lg bg-indigo-50">
                    <x-mdi-package-variant class="w-6 h-6 text-indigo-600" />
                </div>
                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-slate-900">My Orders</h1>
                    <p class="text-sm font-semibold tracking-widest uppercase text-slate-500">Track and manage your purchases</p>
                </div>
            </div>
        </div>
    </header>

    <main class="py-8 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="px-4 sm:px-0">
            @if($orders->isEmpty())
                <div class="flex flex-col items-center justify-center py-20 bg-white shadow-sm rounded-2xl">
                    <x-mdi-basket-outline class="w-20 h-20 text-slate-200" />
                    <h2 class="mt-4 text-xl font-bold text-slate-900">No orders yet</h2>
                    <p class="mt-2 text-slate-500">When you buy something, it will appear here.</p>
                    <a href="{{ route('main.index') }}" class="px-6 py-2 mt-6 font-bold text-white transition bg-indigo-600 rounded-xl hover:bg-indigo-700">
                        Start Shopping
                    </a>
                </div>
            @else
                <div class="overflow-hidden bg-white border shadow-sm rounded-2xl border-slate-200">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-slate-200">
                            <thead class="bg-slate-50">
                                <tr>
                                    <th class="px-6 py-4 text-xs font-bold tracking-widest text-left uppercase text-slate-500">Order Details</th>
                                    <th class="px-6 py-4 text-xs font-bold tracking-widest text-left uppercase text-slate-500">Order Status</th>
                                    <th class="px-6 py-4 text-xs font-bold tracking-widest text-left uppercase text-slate-500">Payment</th>
                                    <th class="px-6 py-4 text-xs font-bold tracking-widest text-left uppercase text-slate-500">Total Amount</th>
                                    <th class="px-6 py-4 text-xs font-bold tracking-widest text-right uppercase text-slate-500">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-slate-100">
                                @foreach ($orders as $order)
                                <tr class="transition hover:bg-slate-50/50">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-bold text-indigo-600">#{{ $order->order_number }}</div>
                                        <div class="text-[11px] text-slate-400 font-medium">{{ $order->created_at->format('d M Y, H:i') }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @php
                                            $statusClasses = [
                                                'processing' => 'bg-amber-100 text-amber-700',
                                                'completed' => 'bg-emerald-100 text-emerald-700',
                                                'cancelled' => 'bg-rose-100 text-rose-700',
                                            ];
                                            $class = $statusClasses[$order->status] ?? 'bg-slate-100 text-slate-700';
                                        @endphp
                                        <span class="px-3 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full {{ $class }}">
                                            {{ $order->status }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center gap-2">
                                            <div class="w-2 h-2 rounded-full {{ $order->payment_status == 'paid' ? 'bg-emerald-500' : 'bg-amber-500' }}"></div>
                                            <span class="text-xs font-bold tracking-tighter uppercase text-slate-600">{{ $order->payment_status }}</span>
                                        </div>
                                        <div class="text-[10px] text-slate-400 font-medium">{{ strtoupper($order->payment_method) }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm italic font-black text-slate-900">Rp {{ number_format($order->total, 0, ',', '.') }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap">
                                        <a href="{{ route('order.receipt', $order->order_number) }}"
                                           class="inline-flex items-center px-4 py-2 text-xs font-bold text-white transition shadow-lg bg-slate-900 rounded-xl hover:bg-indigo-600 shadow-slate-100">
                                            <x-mdi-file-document-outline class="w-4 h-4 mr-2" />
                                            View Receipt
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </main>
</div>
@endsection
