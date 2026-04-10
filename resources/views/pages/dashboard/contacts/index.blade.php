@extends('layouts.default')

@section('page_title', 'Manage Messages')

@section('page_content')
<div class="min-h-screen font-[Poppins] bg-gray-50">
    <header class="bg-white border-b shadow-sm border-slate-200">
        <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center gap-3">
                <div class="p-2 rounded-lg bg-indigo-50">
                    <x-mdi-message-text-outline class="w-6 h-6 text-indigo-600" />
                </div>
                <h1 class="text-2xl font-bold tracking-tight text-slate-900">User Messages</h1>
            </div>
        </div>
    </header>

    <main class="py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="overflow-hidden bg-white border shadow sm:rounded-lg border-slate-200">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-xs font-bold tracking-widest text-left text-gray-500 uppercase">User</th>
                            <th class="px-6 py-3 text-xs font-bold tracking-widest text-left text-gray-500 uppercase">Subject</th>
                            <th class="px-6 py-3 text-xs font-bold tracking-widest text-left text-gray-500 uppercase">Status</th>
                            <th class="px-6 py-3 text-xs font-bold tracking-widest text-left text-gray-500 uppercase">Date</th>
                            <th class="px-6 py-3 text-xs font-bold tracking-widest text-right text-gray-500 uppercase">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($messages as $msg)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-bold text-slate-900">{{ $msg->user->name }}</div>
                                <div class="text-xs text-slate-500">{{ $msg->user->email }}</div>
                            </td>
                            <td class="px-6 py-4">
                                <div class="max-w-xs text-sm font-medium truncate text-slate-700">{{ $msg->subject }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 py-1 text-[10px] font-bold uppercase rounded-full {{ $msg->status == 'replied' ? 'bg-emerald-100 text-emerald-700' : 'bg-amber-100 text-amber-700' }}">
                                    {{ $msg->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                {{ $msg->created_at->format('d M, H:i') }}
                            </td>
                            <td class="px-6 py-4 text-right whitespace-nowrap">
                                <button onclick="openReplyModal({{ $msg }})"
                                    class="p-2 text-indigo-600 transition rounded-lg bg-indigo-50 hover:bg-indigo-600 hover:text-white">
                                    <x-mdi-reply class="w-5 h-5" />
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

<div id="replyModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen px-4">
        <div class="fixed inset-0 bg-slate-900 bg-opacity-60 backdrop-blur-sm" onclick="closeReplyModal()"></div>

        <div class="relative w-full max-w-lg overflow-hidden bg-white border shadow-2xl rounded-2xl border-slate-100">
            <div class="flex items-center justify-between p-6 border-b border-slate-50">
                <h3 class="text-lg font-bold text-slate-900">Reply to Message</h3>
                <button onclick="closeReplyModal()" class="text-slate-400 hover:text-slate-600">
                    <x-mdi-close class="w-6 h-6" />
                </button>
            </div>

            <form id="replyForm" method="POST" class="p-6 space-y-4">
                @csrf
                <div class="p-4 border bg-slate-50 rounded-xl border-slate-100">
                    <span class="text-[10px] font-bold text-indigo-500 uppercase tracking-widest block mb-1">User Message:</span>
                    <p id="userMessageText" class="text-sm italic text-slate-700"></p>
                </div>

                <div>
                    <label class="block text-[10px] font-bold text-slate-500 uppercase tracking-widest mb-1">Your Response</label>
                    <textarea name="admin_reply" id="adminReplyText" rows="4" required
                        class="w-full px-4 py-3 text-sm rounded-xl border-slate-200 focus:ring-indigo-500 focus:border-indigo-500"
                        placeholder="Type your reply here..."></textarea>
                </div>

                <div class="flex justify-end gap-3 pt-2">
                    <button type="button" onclick="closeReplyModal()" class="px-4 py-2 text-sm font-bold text-slate-500 hover:text-slate-700">Cancel</button>
                    <button type="submit" class="px-6 py-2 font-bold text-white transition bg-indigo-600 rounded-xl hover:bg-indigo-700">
                        Send Reply
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openReplyModal(msg) {
        const modal = document.getElementById('replyModal');
        const form = document.getElementById('replyForm');
        const userText = document.getElementById('userMessageText');
        const replyArea = document.getElementById('adminReplyText');

        form.action = `/contacts/${msg.id}/reply`;
        userText.innerText = `"${msg.message}"`;

        // Jika sudah pernah dibalas, tampilkan balasan sebelumnya di textarea
        replyArea.value = msg.admin_reply || '';

        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeReplyModal() {
        document.getElementById('replyModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
</script>
@endsection
