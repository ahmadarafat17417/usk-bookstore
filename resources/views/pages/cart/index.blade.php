@extends('layouts.default')

@section('page_title', 'Your Cart')

@section('body_style', 'font-[Poppins]')

@section('page_content')
    <div class="container px-4 py-8 mx-auto max-w-7xl">
        <div class="mb-8">
            <nav class="flex mb-4 text-sm text-gray-500">
                <a href="{{ route('products.index') }}" class="hover:text-blue-600">Home</a>
                <span class="mx-2">/</span>
                <span class="text-gray-800">Cart</span>
            </nav>
            <h1 class="text-3xl font-bold text-gray-800">Shopping Cart</h1>
            <p class="text-gray-600">{{ $cartItems->count() }} item(s) in your cart</p>
        </div>

        @if ($cartItems->isEmpty())
            <div class="py-16 text-center bg-white rounded-lg shadow-sm">
                <x-mdi-cart-outline class="w-24 h-24 mx-auto text-gray-300" />
                <p class="mt-4 text-xl text-gray-600">Your cart is empty</p>
                <p class="mt-2 text-gray-500">Looks like you haven't added any items to your cart yet.</p>
                <a href="{{ route('main.index') }}"
                    class="inline-flex items-center px-6 py-3 mt-6 text-white transition bg-blue-600 rounded-lg hover:bg-blue-700 gap-x-2">
                    <x-mdi-shopping-outline class="w-5 h-5" />
                    Continue Shopping
                </a>
            </div>
        @else
            <div class="flex flex-col gap-8 lg:flex-row">
                <div class="flex-1">
                    <div class="hidden p-4 mb-4 bg-white rounded-lg shadow-sm lg:grid lg:grid-cols-12 gap-x-4">
                        <div class="col-span-6 text-sm font-medium text-gray-500">Product</div>
                        <div class="col-span-2 text-sm font-medium text-center text-gray-500">Price</div>
                        <div class="col-span-2 text-sm font-medium text-center text-gray-500">Quantity</div>
                        <div class="col-span-2 text-sm font-medium text-right text-gray-500">Total</div>
                    </div>

                    <div class="space-y-4">
                        @foreach ($cartItems as $item)
                            <div class="p-4 transition bg-white rounded-lg shadow-sm hover:shadow-md">
                                <div class="flex flex-col gap-4 lg:grid lg:grid-cols-12 lg:items-center lg:gap-x-4">
                                    <div class="flex col-span-6 gap-4">
                                        <div class="relative overflow-hidden rounded-lg w-28 h-28 group">
                                            <img src="{{ asset('storage/' . $item->product->image) }}"
                                                alt="{{ $item->product->name }}"
                                                class="object-cover w-full h-full transition group-hover:scale-110">
                                        </div>

                                        <div class="flex-1">
                                            <h3 class="text-lg font-semibold text-gray-800">{{ $item->product->name }}</h3>

                                            {{-- REVISI: Ambil nama dari relasi category --}}
                                            <p class="text-sm text-gray-500">
                                                {{ $item->product->category->name ?? 'General' }}</p>

                                            <div class="mt-2 lg:hidden">
                                                <span class="text-sm text-gray-500">Price: </span>
                                                <span class="font-medium">Rp.
                                                    {{ number_format($item->product->price) }}</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hidden col-span-2 text-center lg:block">
                                        <span class="font-medium">Rp. {{ number_format($item->product->price) }}</span>
                                    </div>

                                    <div class="col-span-2">
                                        <div class="flex items-center justify-start lg:justify-center">
                                            <div class="flex items-center bg-gray-50 rounded-xl">
                                                <form action="{{ route('cart.decrease', $item->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="w-10 h-10 text-gray-400 transition-all rounded-l-xl hover:text-blue-600 hover:bg-blue-50 hover:scale-105 active:scale-95 focus:outline-none focus:ring-2 focus:ring-blue-200">
                                                        <x-mdi-minus class="w-4 h-4 mx-auto" />
                                                    </button>
                                                </form>

                                                <span
                                                    class="w-12 text-lg font-medium text-center text-gray-700 select-none">{{ $item->quantity }}</span>

                                                <form action="{{ route('cart.increase', $item->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit"
                                                        class="w-10 h-10 text-gray-400 transition-all rounded-r-xl hover:text-blue-600 hover:bg-blue-50 hover:scale-105 active:scale-95 focus:outline-none focus:ring-2 focus:ring-blue-200">
                                                        <x-mdi-plus class="w-4 h-4 mx-auto" />
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between col-span-2">
                                        <div class="lg:text-right">
                                            <span class="text-sm text-gray-500 lg:hidden">Total: </span>
                                            <span class="font-semibold text-blue-600">Rp.
                                                {{ number_format($item->product->price * $item->quantity) }}</span>
                                        </div>

                                        <form action="{{ route('cart.remove', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="p-2 text-red-500 transition rounded-full hover:text-red-700 hover:bg-red-50"
                                                onclick="return confirm('Are you sure you want to remove this item?')">
                                                <x-mdi-delete-outline class="w-5 h-5" />
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Cart Actions -->
                    <div class="flex items-center justify-between mt-6">
                        <a href="{{ route('products.index') }}"
                            class="inline-flex items-center text-blue-600 transition hover:text-blue-800 gap-x-2">
                            <x-mdi-arrow-left class="w-5 h-5" />
                            Continue Shopping
                        </a>

                        <form method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                class="inline-flex items-center text-red-500 transition hover:text-red-700 gap-x-2"
                                onclick="return confirm('Are you sure you want to clear your cart?')">
                                <x-mdi-delete-sweep-outline class="w-5 h-5" />
                                Clear Cart
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="lg:w-80">
                    <div class="sticky p-6 bg-white rounded-lg shadow-sm top-4">
                        <h2 class="mb-6 text-xl font-semibold">Order Summary</h2>

                        <!-- Summary Items -->
                        <div class="space-y-4">
                            <div class="flex justify-between text-gray-600">
                                <span>Subtotal</span>
                                <span class="font-medium">Rp. {{ number_format($subtotal) }}</span>
                            </div>

                            <div class="flex justify-between text-gray-600">
                                <span>Tax (10%)</span>
                                <span class="font-medium">Rp. {{ number_format($tax) }}</span>
                            </div>

                            <div class="flex justify-between text-gray-600">
                                <span>Shipping</span>
                                <span class="text-green-600">Free</span>
                            </div>

                            <!-- Total -->
                            <div class="flex justify-between pt-4 text-lg font-semibold border-t">
                                <span>Total</span>
                                <span class="text-xl text-blue-600">Rp. {{ number_format($total) }}</span>
                            </div>
                        </div>

                        <!-- Checkout Button - Modified to open modal -->
                        <button type="button" onclick="openQRModal()"
                            class="inline-flex items-center justify-center w-full px-6 py-3 mt-6 text-white transition bg-blue-600 rounded-lg hover:bg-blue-700 gap-x-2">
                            Proceed to Checkout
                        </button>
                    </div>
                </div>
            </div>
        @endif
    </div>

    <!-- QR Code Modal -->
    <div id="qrModal" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <!-- Background overlay dengan blur -->
        <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75 backdrop-blur-sm" aria-hidden="true">
            </div>

            <!-- Modal panel -->
            <div
                class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="px-4 pt-5 pb-4 bg-white sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="w-full mt-3 text-center sm:mt-0 sm:text-left">
                            <!-- Modal Header -->
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">
                                    Complete Your Payment
                                </h3>
                                <button onclick="closeQRModal()" class="text-gray-400 hover:text-gray-500">
                                    <x-mdi-close class="w-6 h-6" />
                                </button>
                            </div>

                            {{-- modal body --}}
                            <div class="mt-2">
                                <p class="mb-4 text-sm text-gray-500">
                                    Total Tagihan: <span class="text-lg font-bold text-blue-600">Rp.
                                        {{ number_format($total) }}</span>
                                </p>

                                <div class="mb-6">
                                    <label
                                        class="block mb-2 text-xs font-bold tracking-widest text-gray-400 uppercase">Pilih
                                        Metode Pembayaran</label>
                                    <div class="grid grid-cols-4 gap-3">
                                        <button type="button" onclick="selectPayment('qris')" id="btn-qris"
                                            class="flex flex-col items-center p-3 transition border-2 border-blue-600 payment-btn rounded-xl bg-blue-50 ring-2 ring-blue-200">
                                            <x-mdi-qrcode class="w-6 h-6 mb-1 text-blue-600" />
                                            <span class="text-[10px] font-bold uppercase text-blue-700">QRIS</span>
                                        </button>

                                        <button type="button" onclick="selectPayment('bank')" id="btn-bank"
                                            class="flex flex-col items-center p-3 transition border-2 border-gray-200 payment-btn rounded-xl hover:bg-gray-50">
                                            <x-mdi-bank class="w-6 h-6 mb-1 text-gray-400" />
                                            <span class="text-[10px] font-bold uppercase text-gray-500">Transfer</span>
                                        </button>

                                        <button type="button" onclick="selectPayment('wallet')" id="btn-wallet"
                                            class="flex flex-col items-center p-3 transition border-2 border-gray-200 payment-btn rounded-xl hover:bg-gray-50">
                                            <x-mdi-wallet class="w-6 h-6 mb-1 text-gray-400" />
                                            <span class="text-[10px] font-bold uppercase text-gray-500">E-Wallet</span>
                                        </button>

                                        <button type="button" onclick="selectPayment('cod')" id="btn-cod"
                                            class="flex flex-col items-center p-3 transition border-2 border-gray-200 payment-btn rounded-xl hover:bg-gray-50">
                                            <x-mdi-hand-coin-outline class="w-6 h-6 mb-1 text-gray-400" />
                                            <span class="text-[10px] font-bold uppercase text-gray-500">COD</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="p-4 border border-gray-100 bg-gray-50 rounded-2xl">

                                    <div id="form-qris" class="payment-form">
                                        <div class="flex flex-col items-center py-2">
                                            <img src="{{ asset('img/about/qris.png') }}" alt="QRIS"
                                                class="h-auto mb-4 border-4 border-white rounded-lg shadow-sm w-60">
                                            <p class="text-[11px] text-center text-gray-500">Scan QR di atas menggunakan
                                                aplikasi OVO, GoPay, Dana, atau Mobile Banking.</p>
                                        </div>
                                    </div>

                                    <div id="form-bank" class="hidden payment-form">
                                        <div class="space-y-3">
                                            <div
                                                class="flex items-center justify-between p-3 bg-white border border-gray-200 rounded-xl">
                                                <div class="flex items-center gap-3">
                                                    <div
                                                        class="w-10 h-6 bg-blue-900 rounded flex items-center justify-center text-[10px] text-white font-bold">
                                                        BCA</div>
                                                    <div>
                                                        <p class="text-[10px] text-gray-400 font-bold uppercase">No.
                                                            Rekening</p>
                                                        <p class="text-sm font-bold text-gray-800">1238129389819832</p>
                                                    </div>
                                                </div>
                                                <button type="button"
                                                    class="text-xs font-bold text-blue-600 hover:underline">Salin</button>
                                            </div>
                                            <p class="text-[11px] text-gray-500 italic">A/N: Kantin 65 Jakarta</p>
                                        </div>
                                    </div>

                                    <div id="form-cod" class="hidden payment-form">
                                        <div class="flex flex-col items-center py-4 text-center">
                                            <div class="p-3 mb-3 bg-indigo-100 rounded-full">
                                                <x-mdi-truck-delivery-outline class="w-8 h-8 text-indigo-600" />
                                            </div>
                                            <h4 class="text-sm font-bold text-gray-800">Bayar di Tempat (COD)</h4>
                                            <p class="text-[11px] text-gray-500 mt-1">Silakan siapkan uang tunai sesuai
                                                total tagihan saat pesanan tiba atau diambil di kantin.</p>
                                        </div>
                                    </div>

                                    <div id="form-wallet" class="hidden payment-form">
            <div class="space-y-4">
                <div>
                    <label class="block mb-1 text-[10px] font-bold text-gray-400 uppercase">Nomor HP Dana/Gopay</label>
                    <input type="text" name="phone_number" placeholder="08xx xxxx xxxx"
                        class="w-full px-4 py-3 text-sm border border-gray-200 rounded-xl focus:ring-blue-500 focus:border-blue-500">
                </div>
                <p class="text-[11px] text-blue-600 leading-relaxed bg-blue-50 p-2 rounded-lg">Konfirmasi akan dikirim ke aplikasi HP Anda.</p>
            </div>
        </div>

                                    <div id="upload-section" class="pt-4 mt-6 border-t border-gray-200">
                                        <label for="payment_proof"
                                            class="block mb-2 text-[10px] font-bold text-gray-400 uppercase tracking-widest">Unggah
                                            Bukti Pembayaran</label>
                                        <div class="relative">
                                            <input type="file" name="payment_proof" id="payment_proof"
                                                accept="image/*" form="checkoutForm" required onchange="validateUpload()"
                                                class="block w-full p-2 text-xs text-gray-500 bg-white border border-gray-200 cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-bold file:bg-blue-600 file:text-white hover:file:bg-blue-700 rounded-xl">
                                        </div>
                                        <p class="mt-2 text-[10px] text-gray-400">*Wajib mengunggah bukti transfer/scan
                                            untuk melanjutkan.</p>
                                    </div>
                                </div>

                                <input type="hidden" name="payment_method" id="selected-payment-method" value="qris"
                                    form="checkoutForm">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="px-4 py-3 bg-gray-50 sm:px-6 sm:flex sm:flex-row-reverse">
                    <form action="{{ route('cart.checkout') }}" method="POST" id="checkoutForm"
                        enctype="multipart/form-data" class="inline">
                        @csrf
                        <button type="submit" id="btnSubmitCheckout" disabled
                            class="inline-flex justify-center w-full px-4 py-2 text-base font-medium text-white transition-all bg-blue-600 border border-transparent rounded-md shadow-sm opacity-50 cursor-not-allowed sm:ml-3 sm:w-auto sm:text-sm">
                            Selesaikan Pembayaran
                        </button>
                    </form>

                    <button type="button" onclick="closeQRModal()"
                        class="inline-flex justify-center w-full px-4 py-2 mt-3 text-base font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript for Modal -->
    <script>
        function selectPayment(method) {
    document.getElementById('selected-payment-method').value = method;

    // Sembunyikan semua form dinamis
    document.querySelectorAll('.payment-form').forEach(form => form.classList.add('hidden'));

    const targetForm = document.getElementById('form-' + method);
    if (targetForm) targetForm.classList.remove('hidden');

    // LOGIKA KHUSUS COD
    const uploadSection = document.getElementById('upload-section');
    const fileInput = document.getElementById('payment_proof');
    const submitBtn = document.getElementById('btnSubmitCheckout');

    if (method === 'cod') {
        if (uploadSection) uploadSection.classList.add('hidden');
        if (fileInput) fileInput.required = false;
        submitBtn.disabled = false;
        submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
        submitBtn.classList.add('hover:bg-blue-700');
    } else {
        if (uploadSection) uploadSection.classList.remove('hidden');
        if (fileInput) fileInput.required = true;
        validateUpload();
    }

    // Reset dan Update styling tombol
    document.querySelectorAll('.payment-btn').forEach(btn => {
        btn.classList.remove('border-blue-600', 'bg-blue-50', 'ring-2', 'ring-blue-200');
        btn.classList.add('border-gray-200');

        const icon = btn.querySelector('svg');
        const span = btn.querySelector('span');

        // Pengecekan aman agar tidak error jika elemen tidak ditemukan
        if (icon) {
            icon.classList.remove('text-blue-600');
            icon.classList.add('text-gray-400');
        }
        if (span) {
            span.classList.remove('text-blue-700');
            span.classList.add('text-gray-500');
        }
    });

    const activeBtn = document.getElementById('btn-' + method);
    if (activeBtn) {
        activeBtn.classList.add('border-blue-600', 'bg-blue-50', 'ring-2', 'ring-blue-200');
        activeBtn.classList.remove('border-gray-200');

        const activeIcon = activeBtn.querySelector('svg');
        const activeSpan = activeBtn.querySelector('span');

        if (activeIcon) {
            activeIcon.classList.remove('text-gray-400');
            activeIcon.classList.add('text-blue-600');
        }
        if (activeSpan) {
            activeSpan.classList.remove('text-gray-500');
            activeSpan.classList.add('text-blue-700');
        }
    }
}

        function openQRModal() {
            document.getElementById('qrModal').classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        }

        function validateUpload() {
            const method = document.getElementById('selected-payment-method').value;
            const fileInput = document.getElementById('payment_proof');
            const submitBtn = document.getElementById('btnSubmitCheckout');

            // Jika metode COD, abaikan validasi upload
            if (method === 'cod') {
                submitBtn.disabled = false;
                submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                return;
            }

            if (fileInput.files.length > 0) {
                submitBtn.disabled = false;
                submitBtn.classList.remove('opacity-50', 'cursor-not-allowed');
                submitBtn.classList.add('hover:bg-blue-700');
            } else {
                submitBtn.disabled = true;
                submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                submitBtn.classList.remove('hover:bg-blue-700');
            }
        }

        // Pastikan tombol ter-reset saat modal ditutup
        function closeQRModal() {
            document.getElementById('qrModal').classList.add('hidden');
            document.body.style.overflow = 'auto';

            // Reset form dan tombol
            document.getElementById('checkoutForm').reset();
            validateUpload();
        }

        // Close modal when clicking outside (optional)
        window.onclick = function(event) {
            const modal = document.getElementById('qrModal');
            if (event.target === modal) {
                closeQRModal();
            }
        }

        // Close modal with ESC key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeQRModal();
            }
        });
    </script>
@endsection
