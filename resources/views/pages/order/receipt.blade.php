@extends('layouts.default')

@section('page_title', 'Order Receipt')

@section('body_style', 'font-[Poppins] bg-gray-50')

@section('page_content')
    <div class="min-h-screen py-8">
        <div class="container max-w-4xl px-4 mx-auto">
            <!-- Back Button -->
            <a href="{{ route('orders.user') }}" class="inline-flex items-center mb-6 text-gray-600 transition hover:text-gray-900 gap-x-2">
                <x-mdi-arrow-left class="w-5 h-5" />
                Recent Orders
            </a>

            <!-- Receipt Card -->
            <div class="overflow-hidden bg-white shadow-2xl rounded-2xl">
                <!-- Header with Pattern -->
                <div class="relative px-8 py-12 bg-gradient-to-br from-gray-900 to-gray-700">
                    <div class="absolute top-0 right-0 opacity-10">
                        <x-mdi-qrcode class="w-64 h-64 text-white" />
                    </div>

                    <div class="relative flex items-center justify-between">
                        <div>
                            <h1 class="text-4xl font-light text-white">Payment Receipt</h1>
                            <p class="mt-2 text-gray-300">Thank you for your purchase</p>
                        </div>
                        <div class="text-right">
                            <div class="text-3xl font-bold text-white">#{{ $order->order_number }}</div>
                            <div class="mt-1 text-sm text-gray-300">{{ $order->created_at->format('F d, Y - H:i') }}</div>
                        </div>
                    </div>
                </div>

                <!-- Status Badge -->
                <div class="flex items-center justify-between px-8 py-4 border-b border-gray-200 bg-gray-50">
                    <div class="flex items-center gap-x-4">
                        <span class="text-sm font-medium text-gray-600">Payment Status:</span>
                        <span class="px-3 py-1 text-sm font-medium text-green-800 bg-green-100 rounded-full">
                            {{ ucfirst($order->payment_status) }}
                        </span>
                    </div>
                    <div class="flex items-center gap-x-4">
                        <span class="text-sm font-medium text-gray-600">Order Status:</span>
                        <span class="px-3 py-1 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">
                            {{ ucfirst($order->status) }}
                        </span>
                    </div>
                </div>

                <!-- Customer Info -->
                <div class="px-8 py-6 border-b border-gray-200">
                    <h3 class="mb-4 text-sm font-medium tracking-wider text-gray-500 uppercase">Customer Information</h3>
                    <div class="grid grid-cols-2 gap-6">
                        <div>
                            <p class="text-sm text-gray-500">Name</p>
                            <p class="font-medium text-gray-900">{{ $order->user->name }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="font-medium text-gray-900">{{ $order->user->email }}</p>
                        </div>
                    </div>
                </div>

                <!-- Order Items -->
                <div class="px-8 py-6">
                    <h3 class="mb-4 text-sm font-medium tracking-wider text-gray-500 uppercase">Order Items</h3>

                    <!-- Items Header (hidden on mobile) -->
                    <div class="hidden grid-cols-12 gap-4 px-4 py-3 mb-2 text-xs font-medium text-gray-500 uppercase bg-gray-100 rounded-lg sm:grid">
                        <div class="col-span-6">Product</div>
                        <div class="col-span-2 text-center">Price</div>
                        <div class="col-span-2 text-center">Quantity</div>
                        <div class="col-span-2 text-right">Total</div>
                    </div>

                    <!-- Items List -->
                    <div class="space-y-4">
                        @foreach($order->items as $item)
                            <div class="grid grid-cols-1 gap-4 p-4 transition border border-gray-200 rounded-lg sm:grid-cols-12 hover:border-gray-400">
                                <div class="sm:col-span-6">
                                    <div class="flex items-center gap-4">
                                        @if($item->product && $item->product->image)
                                            <img src="{{ asset('storage/' . $item->product->image) }}"
                                                 alt="{{ $item->product_name }}"
                                                 class="object-cover w-16 h-16 rounded-lg">
                                        @else
                                            <div class="flex items-center justify-center w-16 h-16 text-gray-400 bg-gray-100 rounded-lg">
                                                <x-mdi-image-outline class="w-8 h-8" />
                                            </div>
                                        @endif
                                        <div>
                                            <h4 class="font-medium text-gray-900">{{ $item->product_name }}</h4>
                                            <p class="text-sm text-gray-500">SKU: {{ $item->product->sku ?? 'N/A' }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between sm:col-span-2 sm:justify-center">
                                    <span class="text-sm text-gray-500 sm:hidden">Price:</span>
                                    <span class="font-medium text-gray-900">Rp {{ number_format($item->price, 0, ',', '.') }}</span>
                                </div>
                                <div class="flex items-center justify-between sm:col-span-2 sm:justify-center">
                                    <span class="text-sm text-gray-500 sm:hidden">Qty:</span>
                                    <span class="font-medium text-gray-900">{{ $item->quantity }}</span>
                                </div>
                                <div class="flex items-center justify-between sm:col-span-2 sm:justify-end">
                                    <span class="text-sm text-gray-500 sm:hidden">Subtotal:</span>
                                    <span class="font-semibold text-gray-900">Rp {{ number_format($item->subtotal, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Payment Summary -->
                <div class="px-8 py-6 border-t border-gray-200 bg-gray-50">
                    <div class="max-w-xl mx-auto">
                        <h3 class="mb-4 text-sm font-medium tracking-wider text-gray-500 uppercase">Payment Summary</h3>

                        <div class="space-y-3">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="font-medium text-gray-900">Rp {{ number_format($order->subtotal, 0, ',', '.') }}</span>
                            </div>

                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax (10%)</span>
                                <span class="font-medium text-gray-900">Rp {{ number_format($order->tax, 0, ',', '.') }}</span>
                            </div>

                            <div class="flex justify-between pt-3 text-lg font-bold border-t border-gray-300">
                                <span class="text-gray-900">Total</span>
                                <span class="text-gray-900">Rp {{ number_format($order->total, 0, ',', '.') }}</span>
                            </div>

                            <div class="pt-4">
                                <div class="flex justify-between text-sm">
                                    <span class="text-gray-500">Payment Method</span>
                                    <span class="font-medium text-gray-900">{{ strtoupper($order->payment_method) }}</span>
                                </div>
                                <div class="flex justify-between mt-1 text-sm">
                                    <span class="text-gray-500">Paid At</span>
                                    <span class="font-medium text-gray-900">{{ $order->paid_at->format('F d, Y H:i') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer -->
                <div class="px-8 py-6 text-center border-t border-gray-200">
                    <p class="mb-4 text-sm text-gray-500">This receipt serves as proof of your purchase. For any inquiries, please contact our customer support.</p>

                    <div class="flex items-center justify-center gap-4">
                        <button onclick="window.print()" class="inline-flex items-center px-6 py-3 text-sm font-medium text-gray-700 transition bg-white border border-gray-300 rounded-lg hover:bg-gray-50 gap-x-2">
                            <x-mdi-printer class="w-5 h-5" />
                            Print Receipt
                        </button>

                        <a href="{{ route('main.index') }}" class="inline-flex items-center px-6 py-3 text-sm font-medium text-white transition bg-gray-900 rounded-lg hover:bg-gray-800 gap-x-2">
                            <x-mdi-shopping-outline class="w-5 h-5" />
                            Continue Shopping
                        </a>
                    </div>
                </div>
            </div>

            <!-- Security Badge -->
            <div class="flex items-center justify-center gap-4 mt-8">
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <x-mdi-lock-outline class="w-5 h-5 text-gray-400" />
                    <span>Secure Transaction</span>
                </div>
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <x-mdi-check-circle-outline class="w-5 h-5 text-gray-400" />
                    <span>Verified Payment</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Print-specific styles -->
    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            .receipt-card, .receipt-card * {
                visibility: visible;
            }
            .receipt-card {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }
            .no-print {
                display: none !important;
            }

            /* Print-friendly colors */
            .bg-gradient-to-br {
                background: #1a1a1a !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .bg-gray-50, .bg-gray-100 {
                background-color: #f5f5f5 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .text-white {
                color: black !important;
            }

            .border, .border-t, .border-b {
                border-color: #ddd !important;
            }
        }

        /* Smooth hover transitions */
        .hover\:border-gray-400:hover {
            transition: border-color 0.2s ease;
        }

        /* Better shadow on hover */
        .shadow-2xl {
            transition: box-shadow 0.3s ease;
        }

        .shadow-2xl:hover {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
        }
    </style>
@endsection
