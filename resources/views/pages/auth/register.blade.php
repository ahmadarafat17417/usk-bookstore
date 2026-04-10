@extends('layouts.default')

@section('page_title', 'Register - Mie Ayam Bang Jack')

@section('body_style', 'relative')

@section('page_content')
<div class="relative flex items-center justify-center w-full min-h-screen p-4 bg-slate-50">
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#00000008_1px,transparent_1px),linear-gradient(to_bottom,#00000008_1px,transparent_1px)] bg-[size:24px_24px] pointer-events-none"></div>

    <div class="absolute top-0 left-0 bg-indigo-100 rounded-full opacity-50 w-72 h-72 mix-blend-multiply filter blur-3xl animate-blob"></div>
    <div class="absolute bottom-0 right-0 bg-blue-100 rounded-full opacity-50 w-72 h-72 mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>

    <div class="relative flex flex-col w-full max-w-md gap-4 p-8 border shadow-2xl h-fit rounded-3xl border-slate-200 bg-white/90 backdrop-blur-xl">

        <div class="flex justify-center mb-2">
            <div class="relative">
                <div class="absolute inset-0 rounded-full bg-indigo-50 opacity-60 blur-xl"></div>
                <img src="{{ asset('img/logo/logo.png') }}" class="relative object-contain h-24" alt="Logo">
            </div>
        </div>

        <div class="text-center">
            <h1 class="text-slate-900 text-2xl font-[Poppins] font-bold tracking-tight">Create Account</h1>
            <p class="mt-1 text-sm text-slate-500">Join the community today</p>
        </div>

        <form method="POST" action="{{ route('auth.register') }}" class="flex flex-col gap-4 mt-2">
            @csrf

            <div class="group">
                <label class="text-slate-600 font-[Poppins] text-xs font-semibold uppercase tracking-wider ml-1">Email Address</label>
                <input type="email" name="email"
                    class="bg-white border border-slate-200 text-slate-900 rounded-xl w-full py-2.5 px-4 mt-1.5 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all placeholder:text-slate-400"
                    placeholder="name@example.com">
            </div>

            <div class="group">
                <label class="text-slate-600 font-[Poppins] text-xs font-semibold uppercase tracking-wider ml-1">Username</label>
                <input type="text" name="name"
                    class="bg-white border border-slate-200 text-slate-900 rounded-xl w-full py-2.5 px-4 mt-1.5 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all placeholder:text-slate-400"
                    placeholder="Your Username">
            </div>

            <div class="grid grid-cols-1 gap-3 md:grid-cols-2">
                <div class="group">
                    <label class="text-slate-600 font-[Poppins] text-xs font-semibold uppercase tracking-wider ml-1">Password</label>
                    <input type="password" name="password"
                        class="bg-white border border-slate-200 text-slate-900 rounded-xl w-full py-2.5 px-4 mt-1.5 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all placeholder:text-slate-400"
                        placeholder="••••••••">
                </div>

                <div class="group">
                    <label class="text-slate-600 font-[Poppins] text-xs font-semibold uppercase tracking-wider ml-1">Confirm</label>
                    <input type="password" name="password_confirmation"
                        class="bg-white border border-slate-200 text-slate-900 rounded-xl w-full py-2.5 px-4 mt-1.5 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 transition-all placeholder:text-slate-400"
                        placeholder="••••••••">
                </div>
            </div>

            <button type="submit"
                class="bg-indigo-600 text-white font-[Poppins] font-bold text-center w-full mt-4 rounded-xl py-3 hover:bg-indigo-700 active:scale-[0.98] transition-all shadow-lg shadow-indigo-100">
                Register Now
            </button>

            @if ($errors->any())
                <div class="p-3 mt-2 border border-red-200 bg-red-50 rounded-xl">
                    <ul class="list-none">
                        @foreach ($errors->all() as $error)
                            <li class="text-[11px] text-red-600 font-medium flex items-center gap-1">
                                <span class="w-1 h-1 bg-red-500 rounded-full"></span> {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>

        <div class="pt-6 mt-4 text-center border-t border-slate-100">
            <p class="text-sm text-slate-500">
                Sudah memiliki akun?
                <a href="{{ route('show.login') }}" class="font-bold text-indigo-600 transition-all hover:underline">Masuk</a>
            </p>
        </div>
    </div>
</div>

<style>
@keyframes blob {
    0% { transform: translate(0px, 0px) scale(1); }
    33% { transform: translate(20px, -30px) scale(1.05); }
    66% { transform: translate(-10px, 10px) scale(0.95); }
    100% { transform: translate(0px, 0px) scale(1); }
}
.animate-blob { animation: blob 10s infinite; }
.animation-delay-2000 { animation-delay: 2s; }
</style>
@endsection
