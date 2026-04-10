@extends('layouts.default')

@section('page_title', 'Tentang Kami - Inception Bookstore')

@section('page_content')
    <div class="relative min-h-screen bg-white">
        <!-- Hero Section - Light dengan Nuansa Indigo -->
        <div class="relative overflow-hidden bg-white border-b border-indigo-100">
            <div class="absolute top-0 left-0 bg-indigo-100 rounded-full w-96 h-96 filter blur-3xl opacity-30"></div>
            <div class="absolute bottom-0 right-0 rounded-full w-96 h-96 bg-indigo-50 filter blur-3xl opacity-40"></div>

            <div
                class="absolute inset-0 bg-[linear-gradient(to_right,#4f46e50a_1px,transparent_1px),linear-gradient(to_bottom,#4f46e50a_1px,transparent_1px)] bg-size-[24px_24px]">
            </div>

            <div class="relative max-w-6xl px-4 py-24 mx-auto sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-8 border border-indigo-200 rounded-full shadow-sm bg-white/80 backdrop-blur-sm">
                        <span class="w-2 h-2 bg-indigo-600 rounded-full animate-pulse"></span>
                        <span class="text-xs font-medium tracking-widest text-indigo-700 uppercase">Where Stories Begin • Est.
                            2024</span>
                    </div>

                    <h1 class="mb-4 text-6xl font-light tracking-tight text-slate-800 sm:text-5xl md:text-6xl">
                        <span
                            class="block mb-2 text-xl font-normal sm:text-2xl text-indigo-400 uppercase tracking-[0.2em]">Selamat
                            Datang di</span>
                        <span class="block font-bold">
                            Inception
                        </span>
                        <p class="mt-2 font-black tracking-tighter text-transparent uppercase text-8xl"
                            style="-webkit-text-stroke: 2px #4f46e5; opacity: 0.9;">
                            Bookstore
                        </p>
                    </h1>

                    <p class="max-w-6xl mx-auto mt-6 text-lg font-light leading-relaxed text-slate-500">
                        Bukan sekadar toko buku, melainkan ruang di mana ide-ide lahir dan tumbuh.
                        Setiap halaman adalah awal dari petualangan baru.
                    </p>

                    <div class="flex justify-center gap-12 mt-12">
                        <div class="text-center group">
                            <div class="text-3xl font-bold text-indigo-700 transition-transform group-hover:scale-110">10K+</div>
                            <div class="mt-1 text-[10px] uppercase tracking-widest text-slate-400">Koleksi Buku</div>
                        </div>
                        <div class="text-center group">
                            <div class="text-3xl font-bold text-indigo-700 transition-transform group-hover:scale-110">∞</div>
                            <div class="mt-1 text-[10px] uppercase tracking-widest text-slate-400">Cerita Tak Terbatas</div>
                        </div>
                        <div class="text-center group">
                            <div class="text-3xl font-bold text-indigo-700 transition-transform group-hover:scale-110">#1</div>
                            <div class="mt-1 text-[10px] uppercase tracking-widest text-slate-400">Literary Space</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filosofi Logo Section -->
        <div class="py-12 border-indigo-100 border-y bg-indigo-50/30">
            <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="max-w-3xl mx-auto mb-16 text-center">
                    <span
                        class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-[0.2em] uppercase border text-indigo-600 border-indigo-200 rounded-full bg-white/60">
                        Filosofi Logo
                    </span>
                    <h2 class="text-4xl font-light text-slate-800">
                        Makna di Balik
                        <span class="block mt-1 text-5xl font-black text-indigo-800 uppercase">Identitas Kami</span>
                    </h2>
                </div>

                <div class="flex flex-col gap-20 lg:flex-row lg:items-start">
                    <!-- Left: Big Logo -->
                    <div class="flex justify-center flex-1 mt-10 lg:justify-end">
                        <div class="relative w-80 h-80 lg:w-96 lg:h-96 group">
                            <!-- Background glow -->
                            <div
                                class="absolute inset-0 transition-opacity bg-indigo-200 rounded-full blur-3xl opacity-30 group-hover:opacity-50">
                            </div>

                            <!-- Logo -->
                            <div class="relative p-8 transition-transform duration-500 scale-100 group-hover:scale-105">
                                <div class="flex items-center justify-center w-full h-full bg-white border border-indigo-100 shadow-xl rounded-2xl">
                                    <div class="text-center">
                                        <div class="mb-2 text-7xl">📖</div>
                                        <div class="text-2xl font-black text-indigo-800">INCEPTION</div>
                                        <div class="text-[10px] tracking-widest text-indigo-400 mt-1">BOOKSTORE</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Simple decorative line -->
                            <div class="absolute w-24 h-px transform -translate-x-1/2 bg-indigo-200 -bottom-4 left-1/2"></div>
                        </div>
                    </div>

                    <!-- Right: Filosofi -->
                    <div class="flex-1 space-y-8 lg:pl-12">
                        <!-- 3 Simple Points -->
                        <div class="space-y-6">
                            <div class="flex gap-5">
                                <span class="text-4xl font-black text-indigo-200">01</span>
                                <div>
                                    <h3 class="mb-1 text-xl font-semibold text-slate-800">Inception: Awal dari Segala Hal</h3>
                                    <p class="text-slate-500">Nama "Inception" melambangkan awal mula ide, mimpi, dan cerita. Setiap buku adalah awal dari perjalanan baru.</p>
                                </div>
                            </div>

                            <div class="flex gap-5">
                                <span class="text-4xl font-black text-indigo-200">02</span>
                                <div>
                                    <h3 class="mb-1 text-xl font-semibold text-slate-800">Buku Terbuka</h3>
                                    <p class="text-slate-500">Simbol buku terbuka dalam logo merepresentasikan keterbukaan wawasan, kerendahan hati untuk terus belajar, dan undangan untuk menjelajah.</p>
                                </div>
                            </div>

                            <div class="flex gap-5">
                                <span class="text-4xl font-black text-indigo-200">03</span>
                                <div>
                                    <h3 class="mb-1 text-xl font-semibold text-slate-800">Warna Indigo & Putih</h3>
                                    <p class="text-slate-500">Indigo melambangkan kedalaman pengetahuan dan ketenangan, sementara putih membawa kesan bersih, terbuka, dan penuh kemungkinan.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Simple Quote -->
                        <div class="pt-4 mt-4 border-t border-indigo-100">
                            <p class="text-sm italic text-slate-400">
                                "Logo ini adalah representasi dari mimpi kami: menjadi ruang yang hangat, inspiratif, dan terbuka untuk semua."
                            </p>
                            <p class="mt-2 text-xs text-indigo-400">— Tim Kreatif Inception</p>
                        </div>

                        <!-- Est Tag -->
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-medium tracking-widest text-indigo-400">EST. 2024</span>
                            <span class="text-indigo-200">•</span>
                            <span class="text-xs font-medium tracking-widest text-slate-400">REIMAGINED 2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Values Section - Yang Bikin Beda -->
        <div class="bg-white border-indigo-100 border-y">
            <div class="max-w-6xl px-4 py-20 mx-auto sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto mb-16 text-center">
                    <span
                        class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-[0.3em] uppercase border text-indigo-600 border-indigo-200 rounded-full bg-indigo-50/40">
                        Yang Bikin Beda
                    </span>
                    <h2 class="text-4xl italic leading-tight tracking-tight md:text-5xl font-extralight text-slate-700">
                        Old Soul, <span
                            class="block mt-1 text-6xl not-italic font-black tracking-tighter text-indigo-800 uppercase md:text-7xl">New
                            Chapter</span>
                    </h2>
                    <div class="w-12 h-px mx-auto mt-6 bg-indigo-200"></div>
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <div
                        class="relative p-8 transition-all duration-300 bg-white border border-indigo-100 rounded-2xl hover:shadow-md hover:border-indigo-300 group">
                        <span
                            class="absolute text-4xl font-black text-indigo-100 transition-colors top-6 right-8 group-hover:text-indigo-200">01</span>

                        <div
                            class="flex items-center justify-center mb-8 transition-all border border-indigo-200 rounded-full w-14 h-14 group-hover:scale-110 group-hover:border-indigo-400 bg-indigo-50">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                            </svg>
                        </div>

                        <h3 class="mb-3 text-xl font-black leading-none tracking-tight uppercase text-slate-800">
                            Kurasi Berkualitas <span class="block text-xs font-light tracking-[0.3em] text-indigo-400 mt-2">EXPERT PICKS</span>
                        </h3>

                        <div class="w-8 h-0.5 bg-indigo-200 mb-4 group-hover:w-16 transition-all"></div>

                        <p class="text-sm font-light leading-relaxed text-slate-500 group-hover:text-slate-600">
                            Setiap buku di rak kami <span class="text-indigo-600">dipilih langsung oleh tim pegiat literasi</span>, dari penulis lokal hingga karya internasional terbaik.
                        </p>
                    </div>

                    <div
                        class="relative p-8 transition-all duration-300 bg-white border border-indigo-100 rounded-2xl hover:shadow-md hover:border-indigo-300 group">
                        <span
                            class="absolute text-4xl font-black text-indigo-100 transition-colors top-6 right-8 group-hover:text-indigo-200">02</span>

                        <div
                            class="flex items-center justify-center mb-8 transition-all border border-indigo-200 rounded-full w-14 h-14 group-hover:scale-110 group-hover:border-indigo-400 bg-indigo-50">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                        </div>

                        <h3 class="mb-3 text-xl font-black leading-none tracking-tight uppercase text-slate-800">
                            Komunitas Aktif <span class="block text-xs font-light tracking-[0.3em] text-indigo-400 mt-2">EVENTS & DISKUSI</span>
                        </h3>

                        <div class="w-8 h-0.5 bg-indigo-200 mb-4 group-hover:w-16 transition-all"></div>

                        <p class="text-sm font-light leading-relaxed text-slate-500 group-hover:text-slate-600">
                            Bukan sekadar jualan. Kami rutin mengadakan <span class="text-indigo-600">bedah buku, workshop menulis, dan klub baca</span> untuk terus hidupkan literasi.
                        </p>
                    </div>

                    <div
                        class="relative p-8 transition-all duration-300 bg-white border border-indigo-100 rounded-2xl hover:shadow-md hover:border-indigo-300 group">
                        <span
                            class="absolute text-4xl font-black text-indigo-100 transition-colors top-6 right-8 group-hover:text-indigo-200">03</span>

                        <div
                            class="flex items-center justify-center mb-8 transition-all border border-indigo-200 rounded-full w-14 h-14 group-hover:scale-110 group-hover:border-indigo-400 bg-indigo-50">
                            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                        </div>

                        <h3 class="mb-3 text-xl font-black leading-none tracking-tight uppercase text-slate-800">
                            Ruang Nyaman <span class="block text-xs font-light tracking-[0.3em] text-indigo-400 mt-2">READING NOOK</span>
                        </h3>

                        <div class="w-8 h-0.5 bg-indigo-200 mb-4 group-hover:w-16 transition-all"></div>

                        <p class="text-sm font-light leading-relaxed text-slate-500 group-hover:text-slate-600">
                            Desain interior yang hangat dengan <span class="text-indigo-600">area baca, kafe literer, dan spot coworking</span>. Tempat di mana betah berlama-lama.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vision Section -->
        <div class="relative overflow-hidden bg-white border-b border-indigo-100">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-indigo-50/60 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="relative max-w-6xl px-4 py-24 mx-auto sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-16 lg:grid-cols-2 lg:items-center">

                    <div class="space-y-8">
                        <div>
                            <span class="text-xs font-bold tracking-[0.4em] text-indigo-500 uppercase">Visi Kami</span>
                            <h2 class="mt-4 text-5xl font-black tracking-tighter uppercase text-slate-800 md:text-6xl">
                                Menjadi <span class="text-indigo-600">Rumah</span> <br>
                                Bagi Setiap Cerita.
                            </h2>
                        </div>

                        <p class="text-xl font-light leading-relaxed text-slate-500">
                            Visi kami bukan sekadar menjadi toko buku terkemuka, melainkan menjadi <span class="text-indigo-700">titik temu lintas generasi</span> di mana kecintaan pada literasi bertemu dengan gaya hidup modern Jakarta.
                        </p>

                        <div class="flex items-center gap-4 pt-4">
                            <div class="w-12 h-px bg-indigo-200"></div>
                            <span class="text-xs italic font-medium tracking-widest text-indigo-400 uppercase">Every book, a new beginning</span>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="space-y-4">
                            <div class="p-6 transition-all duration-500 bg-white border border-indigo-100 group rounded-2xl hover:shadow-md hover:border-indigo-300">
                                <div class="flex items-start gap-6">
                                    <span class="text-2xl font-black text-indigo-200 transition-colors group-hover:text-indigo-400">01</span>
                                    <div>
                                        <h4 class="mb-2 text-sm font-bold tracking-widest text-indigo-700 uppercase">Akses Literasi Merata</h4>
                                        <p class="text-sm leading-relaxed text-slate-500">Menyediakan ruang baca gratis dan program tukar buku untuk semua kalangan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 transition-all duration-500 bg-white border border-indigo-100 group rounded-2xl hover:shadow-md hover:border-indigo-300">
                                <div class="flex items-start gap-6">
                                    <span class="text-2xl font-black text-indigo-200 transition-colors group-hover:text-indigo-400">02</span>
                                    <div>
                                        <h4 class="mb-2 text-sm font-bold tracking-widest text-indigo-700 uppercase">Kurasi Berkelanjutan</h4>
                                        <p class="text-sm leading-relaxed text-slate-500">Menghadirkan koleksi dari indie publisher hingga bestseller dunia secara rutin.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="p-6 transition-all duration-500 bg-white border border-indigo-100 group rounded-2xl hover:shadow-md hover:border-indigo-300">
                                <div class="flex items-start gap-6">
                                    <span class="text-2xl font-black text-indigo-200 transition-colors group-hover:text-indigo-400">03</span>
                                    <div>
                                        <h4 class="mb-2 text-sm font-bold tracking-widest text-indigo-700 uppercase">Ekosistem Literasi</h4>
                                        <p class="text-sm leading-relaxed text-slate-500">Menciptakan ruang kolaborasi untuk penulis, penerbit, dan pegiat literasi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Lokasi & Jam -->
        <div class="max-w-6xl px-4 py-20 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                <!-- Left: Info -->
                <div class="space-y-6">
                    <span class="text-sm font-medium tracking-wider text-indigo-500 uppercase">Kunjungi Kami</span>
                    <h2 class="mb-6 text-3xl font-light text-slate-800">
                        Lokasi
                        <span class="block font-bold text-indigo-700">Inception Bookstore</span>
                    </h2>

                    <div class="space-y-5">
                        <!-- Main Location -->
                        <div class="flex gap-4 p-5 bg-white border border-indigo-100 shadow-sm rounded-2xl">
                            <div class="flex items-center justify-center w-12 h-12 bg-indigo-100 shrink-0 rounded-xl">
                                <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-slate-800">Cabang Utama</h4>
                                <p class="mt-1 text-slate-500">Jl. Pangkalan Jati IA No.14-15, Jakarta Timur</p>
                                <div class="flex items-center gap-2 mt-2 text-sm">
                                    <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span class="text-slate-500">Buka Setiap Hari • 09:00 - 21:00</span>
                                </div>
                                <div class="flex items-center gap-2 mt-1 text-sm">
                                    <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <span class="text-slate-500">0813-8057-0778</span>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Info -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="flex items-center gap-2 p-3 bg-white border border-indigo-100 rounded-xl">
                                <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-xs text-slate-500">WiFi Gratis</span>
                            </div>
                            <div class="flex items-center gap-2 p-3 bg-white border border-indigo-100 rounded-xl">
                                <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                <span class="text-xs text-slate-500">Colokan di Setiap Meja</span>
                            </div>
                            <div class="flex items-center gap-2 p-3 bg-white border border-indigo-100 rounded-xl">
                                <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                                </svg>
                                <span class="text-xs text-slate-500">Live Music (Jumat)</span>
                            </div>
                            <div class="flex items-center gap-2 p-3 bg-white border border-indigo-100 rounded-xl">
                                <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                                </svg>
                                <span class="text-xs text-slate-500">Area Baca Outdoor</span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Buttons -->
                    <div class="flex flex-wrap gap-3 pt-4">
                        <a href="#"
                            class="inline-flex items-center gap-2 px-5 py-2.5 bg-indigo-600 text-white text-sm font-medium rounded-xl hover:bg-indigo-700 transition-colors shadow-sm">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            Chat WhatsApp
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-indigo-200 text-indigo-600 text-sm font-medium rounded-xl hover:bg-indigo-50 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"/>
                            </svg>
                            Petunjuk Arah
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-2 px-5 py-2.5 bg-white border border-indigo-200 text-indigo-600 text-sm font-medium rounded-xl hover:bg-indigo-50 transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                            @inceptionbookstore
                        </a>
                    </div>
                </div>

                <!-- Right: Simple Map -->
                <div class="relative">
                    <div class="h-full p-2 bg-white border border-indigo-100 shadow-sm rounded-2xl">
                        <div class="relative w-full overflow-hidden rounded-xl bg-indigo-50 min-h-100">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.123399845578!2d106.90608209999999!3d-6.2474655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f32e7bd83357%3A0x997e4b683c718e1f!2sWarkop%206%20Bersaudara!5e0!3m2!1sen!2sid!4v1771696233889!5m2!1sen!2sid"
                                class="absolute top-0 left-0 w-full h-full" style="border:0;" allowfullscreen=""
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>

                    <div class="absolute px-4 py-2 bg-white border border-indigo-200 shadow-sm -bottom-2 -right-2 rounded-xl">
                        <div class="flex items-center gap-1">
                            <span class="text-sm text-yellow-500">★★★★★</span>
                            <span class="ml-1 text-xs text-slate-500">4.9 (2.4rb review)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimoni Section -->
        <div class="py-16 bg-indigo-50/30">
            <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto mb-12 text-center">
                    <span class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-[0.2em] uppercase border text-indigo-600 border-indigo-200 rounded-full bg-white/60">
                        Testimoni
                    </span>
                    <h2 class="text-4xl font-light text-slate-800">
                        Yang Mereka
                        <span class="block mt-1 text-5xl font-black text-indigo-800 uppercase">Katakan Tentang Kami</span>
                    </h2>
                    <div class="w-12 h-px mx-auto mt-6 bg-indigo-200"></div>
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <div class="relative p-8 transition-all duration-300 bg-white border border-indigo-100 rounded-2xl hover:shadow-md group">
                        <div class="absolute font-serif text-6xl italic text-indigo-100 transition-colors top-4 right-6 group-hover:text-indigo-200">
                            "
                        </div>
                        <div class="flex gap-1 mb-6">
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>

                        <p class="mb-8 text-lg font-light leading-relaxed text-slate-600">
                            "Suasananya aesthetic banget buat baca buku sambil ngopi. Koleksinya lengkap, mulai dari klasik sampai kontemporer. Bakal balik lagi!"
                        </p>

                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 overflow-hidden transition-colors border-2 border-indigo-200 rounded-full group-hover:border-indigo-400">
                                <img src="/img/about/naufal.jpeg" alt="Miftah Naufal" class="object-cover w-full h-full">
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Miftah Naufal</h4>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs text-slate-400">Book Enthusiast</span>
                                    <span class="w-1 h-1 bg-indigo-300 rounded-full"></span>
                                    <span class="text-xs text-slate-400">2 hari lalu</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-8 transition-all duration-300 bg-white border border-indigo-100 rounded-2xl hover:shadow-md group">
                        <div class="absolute font-serif text-6xl italic text-indigo-100 transition-colors top-4 right-6 group-hover:text-indigo-200">
                            "
                        </div>
                        <div class="flex gap-1 mb-6">
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>

                        <p class="mb-8 text-lg font-light leading-relaxed text-slate-600">
                            "Pertama kali ke sini diajak temen, ternyata tempatnya cozy banget! Staff ramah, Wi-Fi kencang, koleksi buku lengkap. Recommended buat WFC atau baca santai."
                        </p>

                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 overflow-hidden transition-colors border-2 border-indigo-200 rounded-full group-hover:border-indigo-400">
                                <img src="/img/about/tristan.jpeg" alt="Tristan Faiz" class="object-cover w-full h-full">
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Tristan Faiz</h4>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs text-slate-400">Mahasiswa & Reader</span>
                                    <span class="w-1 h-1 bg-indigo-300 rounded-full"></span>
                                    <span class="text-xs text-slate-400">5 hari lalu</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-8 transition-all duration-300 bg-white border border-indigo-100 rounded-2xl hover:shadow-md group">
                        <div class="absolute font-serif text-6xl italic text-indigo-100 transition-colors top-4 right-6 group-hover:text-indigo-200">
                            "
                        </div>
                        <div class="flex gap-1 mb-6">
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            <svg class="w-5 h-5 text-yellow-500 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        </div>

                        <p class="mb-8 text-lg font-light leading-relaxed text-slate-600">
                            "Rekomendasi buku dari staff-nya selalu tepat! Acara bedah buku dan diskusi rutin bikin saya betah. Tempatnya juga instagramable banget."
                        </p>

                        <div class="flex items-center gap-4">
                            <div class="w-16 h-16 overflow-hidden transition-colors border-2 border-indigo-200 rounded-full group-hover:border-indigo-400">
                                <img src="/img/about/galih.jpeg" alt="Galih Pangestu" class="object-cover w-full h-full">
                            </div>
                            <div>
                                <h4 class="font-semibold text-slate-800">Galih Pangestu</h4>
                                <div class="flex items-center gap-2">
                                    <span class="text-xs text-slate-400">Penulis Lepas</span>
                                    <span class="w-1 h-1 bg-indigo-300 rounded-full"></span>
                                    <span class="text-xs text-slate-400">1 minggu lalu</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Simple CTA -->
        <div class="border-t border-indigo-100 bg-gradient-to-r from-indigo-50 to-white">
            <div class="max-w-4xl px-4 py-16 mx-auto text-center sm:px-6 lg:px-8">
                <h3 class="mb-3 text-2xl font-light md:text-3xl text-slate-700">
                    Ingin mencari inspirasi atau sekadar
                    <span class="font-bold text-indigo-700">menemukan cerita baru?</span>
                </h3>
                <p class="mb-8 text-slate-500">Datang saja. Inception Bookstore sudah menanti kedatanganmu.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#"
                        class="inline-flex items-center gap-2 px-6 py-3 font-medium text-white transition-colors bg-indigo-600 shadow-md rounded-xl hover:bg-indigo-700">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Cek Lokasi
                    </a>
                    <a href="#"
                        class="inline-flex items-center gap-2 px-6 py-3 font-medium text-indigo-600 transition-colors bg-white border border-indigo-200 shadow-md rounded-xl hover:bg-indigo-50">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                        </svg>
                        Lihat Koleksi
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Simple Styles -->
    <style>
        /* Smooth transitions */
        .transition-all {
            transition: all 0.3s ease-in-out;
        }

        /* Aspect ratio utilities */
        .aspect-w-1 {
            position: relative;
            padding-bottom: 100%;
        }

        .aspect-w-1>* {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .aspect-w-3.aspect-h-4 {
            position: relative;
            padding-bottom: 133.33%;
        }

        .aspect-w-3.aspect-h-4>* {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .aspect-w-3.aspect-h-3 {
            position: relative;
            padding-bottom: 100%;
        }

        .aspect-w-3.aspect-h-3>* {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }

        .aspect-4\/3 {
            aspect-ratio: 4 / 3;
        }

        .min-h-100 {
            min-height: 400px;
        }

        @media (min-width: 768px) {
            .min-h-100 {
                min-height: 350px;
            }
        }

        .bg-size-\[24px_24px\] {
            background-size: 24px 24px;
        }
    </style>
@endsection
