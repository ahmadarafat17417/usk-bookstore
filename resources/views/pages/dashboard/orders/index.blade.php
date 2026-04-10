@extends('layouts.default')

@section('page_content')
<div class="min-h-screen font-[Poppins] bg-gray-50">
    <header class="bg-white border-b shadow-sm border-slate-200">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center gap-3">
                <div class="p-2 rounded-lg bg-indigo-50">
                    <x-mdi-history class="w-6 h-6 text-indigo-600" />
                </div>
                <h1 class="text-2xl font-bold tracking-tight text-slate-900">Recent Orders</h1>
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
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Order #</th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Customer</th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Status</th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Payment</th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Total</th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Date</th>
                                <th class="px-6 py-3 text-xs font-medium tracking-wider text-right text-gray-500 uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($orders as $order)
                            <tr>
                                <td class="px-6 py-4 text-sm font-bold text-indigo-600 whitespace-nowrap">
                                    {{ $order->order_number }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                    {{ $order->user->name }}
                                </td>
                                {{-- Kolom Status Pesanan --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($order->status == 'processing')
                                        <span class="px-2 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full bg-amber-100 text-amber-700">Processing</span>
                                    @elseif($order->status == 'completed')
                                        <span class="px-2 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full bg-emerald-100 text-emerald-700">Completed</span>
                                    @else
                                        <span class="px-2 py-1 text-[10px] font-bold uppercase tracking-wider rounded-full bg-rose-100 text-rose-700">{{ $order->status }}</span>
                                    @endif
                                </td>
                                {{-- Kolom Status Pembayaran --}}
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 rounded-full {{ $order->payment_status == 'paid' ? 'bg-emerald-500' : 'bg-amber-500' }}"></div>
                                        <span class="text-xs font-medium text-gray-600 capitalize">{{ $order->payment_status }}</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-sm font-semibold whitespace-nowrap">
                                    Rp {{ number_format($order->total, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                    {{ $order->created_at->format('d M Y, H:i') }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                    <button onclick="viewOrderDetail({{ $order->id }})" class="p-2 text-indigo-600 transition rounded-lg hover:text-indigo-900 bg-indigo-50">
                                        <x-mdi-eye-outline class="w-5 h-5" />
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

<div id="orderModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:p-0">
        <div class="fixed inset-0 transition-opacity bg-slate-900 bg-opacity-60 backdrop-blur-sm" onclick="closeModal()"></div>

        <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white border shadow-2xl rounded-2xl sm:my-8 sm:align-middle sm:max-w-2xl sm:w-full border-slate-100">
            <div class="flex items-center justify-between px-8 py-6 border-b border-slate-50">
                <div>
                    <h3 class="text-xl font-bold text-slate-900" id="modalOrderNumber"></h3>
                    <p class="mt-1 text-xs font-semibold tracking-widest uppercase text-slate-400" id="modalDate"></p>
                </div>
                <div class="flex items-center gap-2">
                    <a id="btnViewProof" target="_blank" class="hidden px-3 py-2 text-xs font-bold tracking-wider text-indigo-600 uppercase transition rounded-lg bg-indigo-50 hover:bg-indigo-100">
                        View Payment Proof
                    </a>
                    <button onclick="closeModal()" class="p-2 transition rounded-full text-slate-400 hover:bg-slate-50 hover:text-slate-600">
                        <x-mdi-close class="w-6 h-6" />
                    </button>
                </div>
            </div>

            <div class="px-8 py-6 bg-white">
                <div class="space-y-6">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 border rounded-xl bg-slate-50 border-slate-100">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-wider block mb-1">Customer Info</span>
                            <p class="text-sm font-bold text-slate-700" id="modalCustomer"></p>
                        </div>
                        <div class="p-4 border border-indigo-100 rounded-xl bg-indigo-50">
                            <span class="text-[10px] font-bold text-indigo-400 uppercase tracking-wider block mb-1">Payment Status</span>
                            <p class="text-sm font-bold text-indigo-700" id="modalPayment"></p>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h4 class="mb-4 text-xs font-bold tracking-widest uppercase text-slate-400">Purchased Items</h4>
                        <div class="overflow-hidden border border-slate-100 rounded-xl">
                            <table class="min-w-full divide-y divide-slate-100">
                                <thead class="bg-slate-50">
                                    <tr>
                                        <th class="px-4 py-3 text-[10px] font-bold text-left text-slate-500 uppercase">Product</th>
                                        <th class="px-4 py-3 text-[10px] font-bold text-center text-slate-500 uppercase">Qty</th>
                                        <th class="px-4 py-3 text-[10px] font-bold text-right text-slate-500 uppercase">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody id="modalItems" class="text-sm divide-y divide-slate-50"></tbody>
                            </table>
                        </div>
                    </div>

                    <div id="notesContainer" class="hidden">
                        <h4 class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">Notes</h4>
                        <p class="p-3 text-xs italic text-yellow-800 border border-yellow-100 rounded-lg bg-yellow-50" id="modalNotes"></p>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between px-8 py-6 border-t bg-slate-50/50 border-slate-50">
                <div class="text-left">
                    <span class="text-[10px] font-bold text-slate-400 uppercase block">Grand Total</span>
                    <span class="text-xl font-black text-indigo-600" id="modalTotal"></span>
                </div>

                <div id="adminActions" class="flex items-center gap-3">
                    <form id="formDecline" method="POST" onsubmit="return confirm('Tolak pesanan ini?')">
                        @csrf
                        <button type="submit" class="px-6 py-2 text-sm font-bold text-red-600 transition bg-white border border-red-200 rounded-xl hover:bg-red-50">
                            Decline
                        </button>
                    </form>
                    <form id="formAccept" method="POST" onsubmit="return confirm('Terima pesanan ini?')">
                        @csrf
                        <button type="submit" class="px-6 py-2 text-sm font-bold text-white transition bg-green-600 shadow-lg rounded-xl hover:bg-green-700 shadow-green-100">
                            Accept Order
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function viewOrderDetail(id) {
        fetch(`/orders/${id}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('modalOrderNumber').innerText = '#' + data.order_number;
                document.getElementById('modalDate').innerText = new Date(data.created_at).toLocaleDateString('id-ID', { day: 'numeric', month: 'long', year: 'numeric', hour: '2-digit', minute:'2-digit' });
                document.getElementById('modalCustomer').innerText = data.user ? data.user.name : 'Guest User';
                document.getElementById('modalPayment').innerText = data.payment_status.toUpperCase();
                document.getElementById('modalTotal').innerText = 'Rp ' + parseInt(data.total).toLocaleString('id-ID');

                // Bukti Pembayaran
                const btnProof = document.getElementById('btnViewProof');
                if (data.payment_proof) {
                    btnProof.classList.remove('hidden');
                    btnProof.href = `/storage/${data.payment_proof}`;
                } else {
                    btnProof.classList.add('hidden');
                }

                // Setup Admin Action Routes
                document.getElementById('formAccept').action = `/orders/${data.id}/accept`;
                document.getElementById('formDecline').action = `/orders/${data.id}/decline`;

                // Sembunyikan aksi jika status sudah bukan 'processing'
                if(data.status !== 'processing') {
                    document.getElementById('adminActions').classList.add('hidden');
                } else {
                    document.getElementById('adminActions').classList.remove('hidden');
                }

                // Notes Logic
                const notesContainer = document.getElementById('notesContainer');
                if(data.notes) {
                    notesContainer.classList.remove('hidden');
                    document.getElementById('modalNotes').innerText = data.notes;
                } else {
                    notesContainer.classList.add('hidden');
                }

                // Render Items
                const itemsContainer = document.getElementById('modalItems');
                itemsContainer.innerHTML = '';
                data.items.forEach(item => {
                    const imagePath = item.product && item.product.image ? `/storage/${item.product.image}` : '/img/default-product.png';
                    itemsContainer.innerHTML += `
                        <tr class="transition hover:bg-slate-50/50">
                            <td class="px-4 py-3">
                                <div class="flex items-center gap-3">
                                    <div class="flex-shrink-0 w-12 h-12 overflow-hidden border rounded-lg bg-slate-100 border-slate-200">
                                        <img src="${imagePath}" class="object-cover w-full h-full">
                                    </div>
                                    <div>
                                        <p class="font-bold text-slate-700 line-clamp-1">${item.product_name}</p>
                                        <p class="text-[10px] text-slate-400 uppercase font-semibold">Price: Rp ${parseInt(item.price).toLocaleString('id-ID')}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 font-semibold text-center text-slate-600">x${item.quantity}</td>
                            <td class="px-4 py-3 italic font-black text-right text-slate-900">Rp ${parseInt(item.subtotal).toLocaleString('id-ID')}</td>
                        </tr>`;
                });

                document.getElementById('orderModal').classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            });
    }

    function closeModal() {
        document.getElementById('orderModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
</script>
@endsection

