@extends('layouts.default')

@section('page_title', 'Contact Admin')

@section('page_content')
<div class="min-h-screen font-[Poppins] bg-gray-50 py-12">
    <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">

            <div class="lg:col-span-1">
                <div class="overflow-hidden bg-white border shadow-sm rounded-2xl border-slate-200">
                    <div class="p-6 bg-indigo-600 border-b border-slate-100">
                        <h2 class="flex items-center gap-2 text-xl font-bold text-white">
                            <x-mdi-email-plus-outline class="w-6 h-6" />
                            Send a Message
                        </h2>
                        <p class="mt-1 text-xs text-indigo-100">Admin will reply to your message soon.</p>
                    </div>
                    <form action="{{ route('contact.store') }}" method="POST" class="p-6 space-y-4">
                        @csrf
                        <div>
                            <label class="block mb-1 text-xs font-bold tracking-wider uppercase text-slate-500">Subject</label>
                            <input type="text" name="subject" required placeholder="e.g. Order Issue"
                                class="w-full px-4 py-3 text-sm rounded-xl border-slate-200 focus:ring-indigo-500 focus:border-indigo-500">
                        </div>
                        <div>
                            <label class="block mb-1 text-xs font-bold tracking-wider uppercase text-slate-500">Message</label>
                            <textarea name="message" rows="5" required placeholder="Write your message here..."
                                class="w-full px-4 py-3 text-sm rounded-xl border-slate-200 focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                        </div>
                        <button type="submit" class="w-full py-3 font-bold text-white transition bg-indigo-600 shadow-lg rounded-xl hover:bg-indigo-700 shadow-indigo-100">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-2">
                <h3 class="flex items-center gap-2 mb-6 text-lg font-bold text-slate-900">
                    <x-mdi-chat-processing-outline class="w-6 h-6 text-indigo-600" />
                    Recent Messages
                </h3>

                <div class="space-y-4">
                    @forelse($messages as $msg)
                    <div class="p-6 bg-white border shadow-sm rounded-2xl border-slate-200">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <span class="text-[10px] font-bold text-indigo-500 uppercase tracking-widest block mb-1">{{ $msg->created_at->format('d M Y, H:i') }}</span>
                                <h4 class="font-bold capitalize text-slate-900">{{ $msg->subject }}</h4>
                            </div>
                            <span class="px-3 py-1 text-[10px] font-bold uppercase rounded-full {{ $msg->status == 'replied' ? 'bg-emerald-100 text-emerald-600' : 'bg-amber-100 text-amber-600' }}">
                                {{ $msg->status }}
                            </span>
                        </div>
                        <p class="text-sm leading-relaxed text-slate-600">{{ $msg->message }}</p>

                        @if($msg->admin_reply)
                        <div class="relative p-4 mt-4 border border-indigo-100 bg-indigo-50 rounded-xl">
                            <div class="absolute -top-2 left-4 px-2 bg-indigo-100 text-[9px] font-bold text-indigo-600 uppercase rounded">Admin Reply</div>
                            <p class="text-sm italic text-indigo-900">"{{ $msg->admin_reply }}"</p>
                        </div>
                        @endif
                    </div>
                    @empty
                    <div class="py-12 text-center bg-white border-2 border-dashed rounded-2xl border-slate-200">
                        <x-mdi-email-outline class="w-12 h-12 mx-auto mb-2 text-slate-300" />
                        <p class="text-sm font-medium text-slate-500">No messages found. Feel free to contact us!</p>
                    </div>
                    @endforelse
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
