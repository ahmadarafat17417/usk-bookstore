<nav class="sticky top-0 z-50 border-b bg-white/80 border-slate-200 backdrop-blur-md">
    <div class="px-3 mx-auto max-w-7xl sm:px-4 lg:px-8">
        <div class="flex items-center justify-between gap-2 h-14 sm:h-16 lg:h-18 sm:gap-4">

            <div class="flex items-center gap-2 shrink-0 sm:gap-3 lg:gap-4">
                <img src="{{ asset('img/logo/logo.png') }}"
                     class="object-contain h-10 sm:h-12 lg:h-14 xl:h-16"
                     alt="Logo Warmad">

                @auth
                    <div class="flex-col hidden sm:flex">
                        <h1 class="text-[10px] text-slate-500 uppercase tracking-widest font-medium">Welcome back</h1>
                        <h1 class="text-xs font-semibold text-slate-900 xl:hidden sm:text-sm whitespace-nowrap">
                            {{ Str::limit(Auth::user()->name, 10) }}
                        </h1>
                        <h1 class="hidden text-sm font-semibold text-slate-900 xl:block lg:text-base whitespace-nowrap">
                            {{ Auth::user()->name }}
                        </h1>
                    </div>
                @endauth
            </div>

            <div class="justify-center flex-1 hidden max-w-xs md:flex">
                <form action="" method="POST" class="w-full font-[Poppins]">
                    <div class="relative">
                        <input type="text"
                               placeholder="Search menu..."
                               class="w-full px-4 py-2 pl-10 text-sm transition-all border shadow-sm text-slate-900 lg:text-base bg-slate-50 rounded-xl border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 focus:border-indigo-500 placeholder:text-slate-400" />
                        <x-mdi-magnify class="absolute w-4 h-4 -translate-y-1/2 left-3 top-1/2 text-slate-400" />
                    </div>
                </form>
            </div>

            <div class="flex items-center gap-4 sm:gap-3 lg:gap-4">
                <div class="items-center hidden gap-2 md:flex lg:gap-6">

                    <div class="flex items-center gap-2 pr-4 border-r border-slate-200">
                        <button class="p-2 transition rounded-lg text-slate-500 hover:text-indigo-600 hover:bg-slate-100">
                            <x-mdi-bell class="w-5 h-5" />
                        </button>
                        <a href="{{ route('cart.index') }}"
                           class="p-2 transition rounded-lg text-slate-500 hover:text-indigo-600 hover:bg-slate-100">
                            <x-mdi-cart class="w-5 h-5" />
                        </a>
                    </div>

                    <div class="flex items-center gap-5 font-[Poppins] text-sm lg:text-[15px]">
                        <a href="{{ route('main.index') }}" class="font-medium transition text-slate-600 hover:text-indigo-600 whitespace-nowrap">Home</a>
                        <a href="#" class="font-medium transition text-slate-600 hover:text-indigo-600 whitespace-nowrap">Shop</a>
                        <a href="{{ route('wishlist.index') }}" class="font-medium transition text-slate-600 hover:text-indigo-600 whitespace-nowrap">Wishlist</a>
                        {{-- <a href="{{ route('orders.user') }}" class="font-medium transition text-slate-600 hover:text-indigo-600 whitespace-nowrap">Orders</a> --}}
                        {{-- <a href="{{ route('contact.index') }}" class="font-medium transition text-slate-600 hover:text-indigo-600 whitespace-nowrap">Contact</a> --}}
                        {{-- <a href="{{ route('main.about') }}" class="font-medium transition text-slate-600 hover:text-indigo-600 whitespace-nowrap">About</a> --}}

                        @auth
                            <div class="flex items-center gap-2 ml-2">
                                @if (auth()->user()->role == 'admin')
                                    <a href="{{ route('products.index') }}"
                                       class="flex items-center gap-1 px-3 py-1.5 text-xs font-semibold text-indigo-700 transition bg-indigo-50 border border-indigo-100 hover:bg-indigo-100 rounded-lg whitespace-nowrap">
                                        <x-mdi-view-dashboard class="w-4 h-4" />
                                        Admin
                                    </a>
                                @endif

                                <form method="POST" action="{{ route('auth.logout') }}">
                                    @csrf
                                    <button class="text-white bg-indigo-600 px-4 py-1.5 rounded-lg text-sm font-bold transition hover:bg-indigo-700 whitespace-nowrap flex items-center gap-1 shadow-md shadow-indigo-100">
                                        <x-mdi-logout class="w-4 h-4" />
                                        Logout
                                    </button>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>

                <div class="flex items-center gap-3 md:hidden">
                    <button class="text-slate-500 focus:outline-none">
                        <x-mdi-bell class="w-5 h-5" />
                    </button>
                    <a href="{{ route('cart.index') }}" class="text-slate-500 focus:outline-none">
                        <x-mdi-cart class="w-5 h-5" />
                    </a>
                    <button id="menu-btn" class="p-1 bg-white border rounded-md shadow-sm text-slate-900 focus:outline-none border-slate-200">
                        <x-mdi-menu class="w-6 h-6" />
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-slate-100 font-[Poppins]">
        <div class="px-4 py-6 space-y-4 shadow-inner">
            <div class="relative">
                <input type="text" placeholder="Search menu..."
                       class="w-full px-4 py-2 pl-10 text-sm border rounded-lg text-slate-900 bg-slate-50 border-slate-200 focus:outline-none focus:ring-2 focus:ring-indigo-500/20" />
                <x-mdi-magnify class="absolute w-4 h-4 -translate-y-1/2 left-3 top-1/2 text-slate-400" />
            </div>

            <div class="space-y-1">
                <a href="{{ route('main.index') }}" class="flex items-center gap-3 px-3 py-3 transition text-slate-600 hover:text-indigo-600 rounded-xl hover:bg-slate-50">
                    <x-mdi-home class="w-5 h-5" /> Home
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-3 transition text-slate-600 hover:text-indigo-600 rounded-xl hover:bg-slate-50">
                    <x-mdi-storefront class="w-5 h-5" /> Shop
                </a>
                <a href="{{ route('wishlist.index') }}" class="flex items-center gap-3 px-3 py-3 transition text-slate-600 hover:text-indigo-600 rounded-xl hover:bg-slate-50">
                    <x-mdi-heart class="w-5 h-5" /> Wishlist
                </a>
                <a href="{{ route('wishlist.index') }}" class="flex items-center gap-3 px-3 py-3 transition text-slate-600 hover:text-indigo-600 rounded-xl hover:bg-slate-50">
                    <x-mdi-heart class="w-5 h-5" /> Orders
                </a>
            </div>

            <div class="pt-4 space-y-3 border-t border-slate-100">
                @auth
                    @if (auth()->user()->role == 'admin')
                        <a href="{{ route('products.index') }}"
                           class="flex items-center justify-center w-full gap-2 py-3 font-medium text-indigo-700 transition border border-indigo-100 bg-indigo-50 rounded-xl">
                            <x-mdi-view-dashboard class="w-5 h-5" /> Dashboard Admin
                        </a>
                    @endif
                    <form method="POST" action="{{ route('auth.logout') }}" class="w-full">
                        @csrf
                        <button class="flex items-center justify-center w-full gap-2 py-3 font-bold text-white transition bg-indigo-600 shadow-lg shadow-indigo-100 hover:bg-indigo-700 rounded-xl">
                            <x-mdi-logout class="w-5 h-5" /> Logout
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </div>
</nav>
