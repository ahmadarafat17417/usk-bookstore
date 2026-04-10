@extends('layouts.default')

@section('page_title', 'Tentang Kami - Warkop 6 Bersaudara Reborn')

@section('page_content')
    <div class="relative min-h-screen bg-zinc-950">
        <!-- Hero Section - Dark dengan Nuansa Industrial -->
        <div class="relative overflow-hidden border-b bg-zinc-950 border-white/5">
            <div class="absolute top-0 left-0 rounded-full w-96 h-96 bg-zinc-800 filter blur-3xl opacity-20"></div>
            <div class="absolute bottom-0 right-0 rounded-full w-96 h-96 bg-slate-800 filter blur-3xl opacity-20"></div>

            <div
                class="absolute inset-0 bg-[linear-gradient(to_right,#8080800a_1px,transparent_1px),linear-gradient(to_bottom,#8080800a_1px,transparent_1px)] bg-size-[24px_24px]">
            </div>

            <div class="relative max-w-6xl px-4 py-24 mx-auto sm:px-6 lg:px-8">
                <div class="max-w-3xl mx-auto text-center">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 mb-8 border rounded-full shadow-lg bg-zinc-900 border-zinc-800">
                        <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                        <span class="text-xs font-medium tracking-widest uppercase text-zinc-400">The Legend Reborn • Est.
                            2024</span>
                    </div>

                    <h1 class="mb-4 text-6xl font-light tracking-tight text-white sm:text-5xl md:text-6xl">
                        <span
                            class="block mb-2 text-xl font-normal sm:text-2xl text-zinc-500 uppercase tracking-[0.2em]">Selamat
                            Datang di</span>
                        <span class="block font-bold">
                            Warkop 6 Bersaudara
                        </span>
                        <p class="mt-2 font-black tracking-tighter text-transparent uppercase text-8xl stroke-white"
                            style="-webkit-text-stroke: 2px white; opacity: 0.9;">
                            Reborn
                        </p>
                    </h1>

                    <p class="max-w-6xl mx-auto mt-6 text-lg font-light leading-relaxed text-zinc-400">
                        Enam saudara, satu visi: menghidupkan kembali warisan rasa dengan estetika modern.
                        Nostalgia yang berevolusi.
                    </p>

                    <div class="flex justify-center gap-12 mt-12">
                        <div class="text-center group">
                            <div class="text-3xl font-bold text-white transition-transform group-hover:scale-110">6</div>
                            <div class="mt-1 text-[10px] uppercase tracking-widest text-zinc-500">Brothers</div>
                        </div>
                        <div class="text-center group">
                            <div class="text-3xl font-bold text-white transition-transform group-hover:scale-110">15+</div>
                            <div class="mt-1 text-[10px] uppercase tracking-widest text-zinc-500">Original Menu</div>
                        </div>
                        <div class="text-center group">
                            <div class="text-3xl font-bold text-white transition-transform group-hover:scale-110">#1</div>
                            <div class="mt-1 text-[10px] uppercase tracking-widest text-zinc-500">The Spot</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Story Section - Cerita Enam Bersaudara -->
        <div class="max-w-6xl px-4 py-20 mx-auto sm:px-6 lg:px-8">
            <div class="grid items-center grid-cols-1 gap-16 lg:grid-cols-2">
                <!-- Left: Image Gallery Minimal - Dark -->
                <div class="relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div class="overflow-hidden rounded-2xl bg-zinc-800 aspect-w-3 aspect-h-4">
                                <img src="{{ asset('img/about/pkj-item-1.webp') }}" alt="Warung Jadul 1995"
                                    class="object-cover w-full h-full transition-transform duration-700 hover:scale-105 opacity-90 hover:opacity-100">
                            </div>
                            <div class="overflow-hidden rounded-2xl bg-zinc-800 aspect-w-3 aspect-h-3">
                                <img src="{{ asset('img/about/pkj-item-2.webp') }}" alt="Enam Bersaudara"
                                    class="object-cover w-full h-full transition-transform duration-700 hover:scale-105 opacity-90 hover:opacity-100">
                            </div>
                        </div>
                        <div class="mt-8 space-y-4">
                            <div class="overflow-hidden rounded-2xl bg-zinc-800 aspect-w-3 aspect-h-3">
                                <img src="{{ asset('img/about/pkj-item-3.webp') }}" alt="Warkop Reborn"
                                    class="object-cover w-full h-full transition-transform duration-700 hover:scale-105 opacity-90 hover:opacity-100">
                            </div>
                            <div class="overflow-hidden rounded-2xl bg-zinc-800 aspect-w-3 aspect-h-4">
                                <img src="{{ asset('img/about/pkj-item-4.webp') }}" alt="Suasana Sekarang"
                                    class="object-cover w-full h-full transition-transform duration-700 hover:scale-105 opacity-90 hover:opacity-100">
                            </div>
                        </div>
                    </div>

                    <!-- Simple Decorative Elements - Dark -->
                    <div class="absolute w-32 h-32 rounded-full -bottom-4 -right-4 bg-zinc-800 -z-10"></div>
                    <div class="absolute w-32 h-32 rounded-full -top-4 -left-4 bg-zinc-800 -z-10"></div>
                </div>

                <!-- Right: Story Text - Dark -->
                <div class="space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-800">
                        <span class="w-1.5 h-1.5 bg-zinc-400 rounded-full"></span>
                        <span class="text-xs font-medium tracking-wider uppercase text-zinc-300">Cerita Awal</span>
                    </div>

                    <h2 class="text-3xl font-light text-zinc-100">
                        Warung kopi favorit
                        <span class="block font-bold text-zinc-300">Anak anak muda Jakarta</span>
                    </h2>

                    <div class="space-y-4 leading-relaxed text-zinc-400">
                        <p class="text-lg">
                            Sejak tahun 2014, <span class="font-semibold text-zinc-200">Warkop 6 Bersaudara</span> atau yang
                            kadang dipanggil "Pekaje Item" membuka
                            warung kopi sederhana
                            di pinggir pangkalan Jati. Ciri khas suasana tenang dan asyik dari warkop ini menjadi sesuatu
                            yang paling menarik bari para penggemarnya
                        </p>

                        <p>
                            Setelah masa Pandemi Covid-19 di tahun 2021, kami memutuskan untuk <span
                                class="font-medium text-zinc-300">"membangkitkan kembali" (Reborn)</span> warkop ini dengan
                            pesona baru. Bukan cuma nostalgia, tapi juga adaptasi buat generasi sekarang.
                            Ciri khas tetap sama, tapi dikemas dengan suasana jakarta yang kekinian.
                        </p>

                        <!-- Blockquote - Dark -->
                        <div class="relative pl-6 my-8 border-l-2 border-zinc-700">
                            <p class="text-sm italic text-zinc-500">
                                "Warkop ini bukan cuma bisnis. Ini cara kami menjaga kebersamaan, sambil
                                tetap relevan buat anak muda jaman now. Enam saudara, satu hati."
                            </p>
                            <p class="mt-2 text-xs text-zinc-600">— Para Penerus Simbok</p>
                        </div>

                        <p>
                            <span class="font-medium text-zinc-200">Warkop 6 Bersaudara Reborn</span> adalah perpaduan
                            antara
                            <span class="text-zinc-300">old school vibe</span> dan
                            <span class="text-zinc-300">industrial touch</span>. Tempat di mana generasi 90-an bisa
                            nostalgia,
                            dan gen Z bisa nemuin tempat nongkrong baru yang aesthetic dengan nuansa klasik.
                        </p>
                    </div>

                    <!-- Simple Signature - Dark -->
                    <div class="flex items-center gap-4 pt-4">
                        <div class="flex -space-x-2">
                            <div
                                class="flex items-center justify-center w-8 h-8 text-xs font-bold border-2 rounded-full bg-zinc-700 border-zinc-900 text-zinc-300">
                                A</div>
                            <div
                                class="flex items-center justify-center w-8 h-8 text-xs font-bold border-2 rounded-full bg-zinc-600 border-zinc-900 text-zinc-300">
                                D</div>
                            <div
                                class="flex items-center justify-center w-8 h-8 text-xs font-bold border-2 rounded-full bg-zinc-500 border-zinc-900 text-zinc-300">
                                E</div>
                            <div
                                class="flex items-center justify-center w-8 h-8 text-xs font-bold border-2 rounded-full bg-zinc-400 border-zinc-900 text-zinc-900">
                                I</div>
                            <div
                                class="flex items-center justify-center w-8 h-8 text-xs font-bold border-2 rounded-full bg-zinc-300 border-zinc-900 text-zinc-900">
                                J</div>
                            <div
                                class="flex items-center justify-center w-8 h-8 text-xs font-bold border-2 rounded-full bg-zinc-200 border-zinc-900 text-zinc-900">
                                U</div>
                        </div>
                        <p class="text-sm text-zinc-500">Enam bersaudara, satu mimpi</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filosofi Logo Section - Simple Version -->
        <div class="py-12 border-y bg-zinc-900/50 border-zinc-800">
            <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
                <!-- Header -->
                <div class="max-w-3xl mx-auto mb-16 text-center">
                    <span
                        class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-[0.2em] uppercase border text-zinc-400 border-zinc-800 rounded-full">
                        Filosofi Logo
                    </span>
                    <h2 class="text-4xl font-light text-zinc-100">
                        Makna di Balik
                        <span class="block mt-1 text-5xl font-black text-white uppercase">Identitas Baru Kami</span>
                    </h2>
                </div>

                <div class="flex flex-col gap-20 lg:flex-row lg:items-start">
                    <!-- Left: Big Logo -->
                    <div class="flex flex-1 mt-10 jus10tify-center lg:justify-end">
                        <div class="relative w-80 h-80 lg:w-96 lg:h-96 group">
                            <!-- Background glow -->
                            <div
                                class="absolute inset-0 transition-opacity rounded-full bg-zinc-800 blur-3xl opacity-30 group-hover:opacity-40">
                            </div>

                            <!-- Logo -->
                            <div class="relative p-8 transition-transform duration-500 scale-175 group-hover:scale-180">
                                <img src="{{ asset('img/logo/logo.png') }}" alt="Logo Warkop 6 Bersaudara"
                                    class="object-contain w-full h-full drop-shadow-2xl">
                            </div>

                            <!-- Simple decorative line -->
                            <div class="absolute w-24 h-px transform -translate-x-1/2 -bottom-4 left-1/2 bg-zinc-700"></div>
                        </div>
                    </div>

                    <!-- Right: Simple Filosofi -->
                    <div class="flex-1 space-y-8 lg:pl-12">
                        <!-- 3 Simple Points -->
                        <div class="space-y-6">
                            <div class="flex gap-5">
                                <span class="text-4xl font-black text-zinc-700">01</span>
                                <div>
                                    <h3 class="mb-1 text-xl font-semibold text-zinc-200">Enam Bersaudara</h3>
                                    <p class="text-zinc-400">Bentuk lingkaran melambangkan kebersamaan, dengan 6 garis yang
                                        membentuk angka 6—representasi dari kami berenam.</p>
                                </div>
                            </div>

                            <div class="flex gap-5">
                                <span class="text-4xl font-black text-zinc-700">02</span>
                                <div>
                                    <h3 class="mb-1 text-xl font-semibold text-zinc-200">Evolusi Rasa</h3>
                                    <p class="text-zinc-400">Warna gelap dan sentuhan industrial menandakan keberanian untuk
                                        berevolusi, tanpa kehilangan ciri khas warkop ini.</p>
                                </div>
                            </div>

                            <div class="flex gap-5">
                                <span class="text-4xl font-black text-zinc-700">03</span>
                                <div>
                                    <h3 class="mb-1 text-xl font-semibold text-zinc-200">Rendah Hati</h3>
                                    <p class="text-zinc-400">Tipografi tegas tapi tetap hangat—mencerminkan karakter warkop
                                        yang kekeluargaan.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Simple Quote -->
                        <div class="pt-4 mt-4 border-t border-zinc-800">
                            <p class="text-sm italic text-zinc-500">
                                "Logo ini adalah wajah baru kami. Tetap rendah hati, tapi berani tampil beda."
                            </p>
                            <p class="mt-2 text-xs text-zinc-600">— Enam Bersaudara</p>
                        </div>

                        <!-- Est Tag -->
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-medium tracking-widest text-zinc-600">EST. 2014</span>
                            <span class="text-zinc-700">•</span>
                            <span class="text-xs font-medium tracking-widest text-zinc-500">REBORN 2020</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Values Section - Apa yang Bikin Beda -->
        <div class="bg-zinc-900 border-y border-zinc-800">
            <div class="max-w-6xl px-4 py-20 mx-auto sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto mb-16 text-center">
                    <span
                        class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-[0.3em] uppercase border text-zinc-400 border-zinc-800 rounded-full bg-zinc-900/50">
                        Yang Bikin Beda
                    </span>
                    <h2 class="text-4xl italic leading-tight tracking-tight md:text-5xl font-extralight text-zinc-100">
                        Old Soul, <span
                            class="block mt-1 text-6xl not-italic font-black tracking-tighter text-white uppercase md:text-7xl">New
                            Vibe</span>
                    </h2>
                    <div class="w-12 h-px mx-auto mt-6 bg-zinc-700"></div>
                </div>

                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <div
                        class="relative p-8 transition-all duration-300 border bg-zinc-900/40 rounded-2xl border-zinc-800 hover:border-zinc-100 hover:bg-zinc-800/50 group">
                        <span
                            class="absolute text-4xl font-black transition-colors top-6 right-8 text-zinc-800 group-hover:text-zinc-700">01</span>

                        <div
                            class="flex items-center justify-center mb-8 transition-all border rounded-full w-14 h-14 border-zinc-700 group-hover:scale-110 group-hover:border-white">
                            <x-mdi-coffee class="w-6 h-6 text-zinc-400 group-hover:text-white" />
                        </div>

                        <h3 class="mb-3 text-xl font-black leading-none tracking-tight text-white uppercase">
                            Resep Simbok <span class="block text-xs font-light tracking-[0.3em] text-zinc-500 mt-2">EST.
                                2014</span>
                        </h3>

                        <div class="w-8 h-0.5 bg-zinc-700 mb-4 group-hover:w-16 transition-all"></div>

                        <p class="text-sm font-light leading-relaxed text-zinc-400 group-hover:text-zinc-300">
                            Resep kopi dan menu andalan yang <span class="text-zinc-200">nggak pernah berubah</span> sejak
                            jaman Simbok. Otentik dan penuh kenangan.
                        </p>
                    </div>

                    <div
                        class="relative p-8 transition-all duration-300 border bg-zinc-900/40 rounded-2xl border-zinc-800 hover:border-zinc-100 hover:bg-zinc-800/50 group">
                        <span
                            class="absolute text-4xl font-black transition-colors top-6 right-8 text-zinc-800 group-hover:text-zinc-700">02</span>

                        <div
                            class="flex items-center justify-center mb-8 transition-all border rounded-full w-14 h-14 border-zinc-700 group-hover:scale-110 group-hover:border-white">
                            <x-mdi-account-group class="w-6 h-6 text-zinc-400 group-hover:text-white" />
                        </div>

                        <h3 class="mb-3 text-xl font-black leading-none tracking-tight text-white uppercase">
                            6 Bersaudara <span class="block text-xs font-light tracking-[0.3em] text-zinc-500 mt-2">FAMILY
                                RUN</span>
                        </h3>

                        <div class="w-8 h-0.5 bg-zinc-700 mb-4 group-hover:w-16 transition-all"></div>

                        <p class="text-sm font-light leading-relaxed text-zinc-400 group-hover:text-zinc-300">
                            Diurus langsung oleh enam saudara. <span class="text-zinc-200">Bukan karyawan</span>, jadi
                            pelayanan terasa lebih personal, hangat, dan jujur.
                        </p>
                    </div>

                    <div
                        class="relative p-8 transition-all duration-300 border bg-zinc-900/40 rounded-2xl border-zinc-800 hover:border-zinc-100 hover:bg-zinc-800/50 group">
                        <span
                            class="absolute text-4xl font-black transition-colors top-6 right-8 text-zinc-800 group-hover:text-zinc-700">03</span>

                        <div
                            class="flex items-center justify-center mb-8 transition-all border rounded-full w-14 h-14 border-zinc-700 group-hover:scale-110 group-hover:border-white">
                            <x-mdi-cake-variant class="w-6 h-6 text-zinc-400 group-hover:text-white" />
                        </div>

                        <h3 class="mb-3 text-xl font-black leading-none tracking-tight text-white uppercase">
                            Nostalgia <span class="font-light text-zinc-500">&</span> Industrial <span
                                class="block text-xs font-light tracking-[0.3em] text-zinc-500 mt-2">NEW CONCEPT</span>
                        </h3>

                        <div class="w-8 h-0.5 bg-zinc-700 mb-4 group-hover:w-16 transition-all"></div>

                        <p class="text-sm font-light leading-relaxed text-zinc-400 group-hover:text-zinc-300">
                            Perpaduan <span class="text-zinc-200">jajanan klasik</span> dan suasana industrial. Pisang
                            goreng hangat ketemu kopi kekinian.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative overflow-hidden border-b bg-zinc-950 border-zinc-900">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-zinc-800/20 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative max-w-6xl px-4 py-24 mx-auto sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 gap-16 lg:grid-cols-2 lg:items-center">

            <div class="space-y-8">
                <div>
                    <span class="text-xs font-bold tracking-[0.4em] text-zinc-500 uppercase">Our Vision</span>
                    <h2 class="mt-4 text-5xl font-black tracking-tighter text-white uppercase md:text-6xl">
                        Menjadi <span class="text-transparent stroke-zinc-700" style="-webkit-text-stroke: 1px #52525b;">Rumah</span> <br>
                        Bagi Cerita.
                    </h2>
                </div>

                <p class="text-xl font-light leading-relaxed text-zinc-400">
                    Visi kami bukan sekadar menjadi tempat singgah, melainkan menjadi <span class="text-zinc-200">titik temu lintas generasi</span> di mana warisan rasa bertemu dengan gaya hidup modern Jakarta.
                </p>

                <div class="flex items-center gap-4 pt-4">
                    <div class="w-12 h-px bg-zinc-800"></div>
                    <span class="text-xs italic font-medium tracking-widest uppercase text-zinc-600">Legacy in every cup</span>
                </div>
            </div>

            <div class="relative">
                <div class="space-y-4">
                    <div class="p-6 transition-all duration-500 border group border-zinc-900 bg-zinc-900/20 rounded-2xl hover:bg-zinc-900/50 hover:border-zinc-700">
                        <div class="flex items-start gap-6">
                            <span class="text-2xl font-black transition-colors text-zinc-800 group-hover:text-zinc-100">01</span>
                            <div>
                                <h4 class="mb-2 text-sm font-bold tracking-widest uppercase text-zinc-200">Preservasi Rasa</h4>
                                <p class="text-sm leading-relaxed text-zinc-500 group-hover:text-zinc-400">Menjaga autentisitas resep sejak 2014 agar tetap konsisten dan tak lekang oleh zaman.</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 transition-all duration-500 border group border-zinc-900 bg-zinc-900/20 rounded-2xl hover:bg-zinc-900/50 hover:border-zinc-700">
                        <div class="flex items-start gap-6">
                            <span class="text-2xl font-black transition-colors text-zinc-800 group-hover:text-zinc-100">02</span>
                            <div>
                                <h4 class="mb-2 text-sm font-bold tracking-widest uppercase text-zinc-200">Evolusi Ruang</h4>
                                <p class="text-sm leading-relaxed text-zinc-500 group-hover:text-zinc-400">Menciptakan ruang komunal dengan estetika industrial yang nyaman untuk bekerja, berdiskusi, maupun bersantai.</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 transition-all duration-500 border group border-zinc-900 bg-zinc-900/20 rounded-2xl hover:bg-zinc-900/50 hover:border-zinc-700">
                        <div class="flex items-start gap-6">
                            <span class="text-2xl font-black transition-colors text-zinc-800 group-hover:text-zinc-100">03</span>
                            <div>
                                <h4 class="mb-2 text-sm font-bold tracking-widest uppercase text-zinc-200">Koneksi Personal</h4>
                                <p class="text-sm leading-relaxed text-zinc-500 group-hover:text-zinc-400">Menghadirkan pelayanan hangat khas keluarga yang membuat setiap pengunjung merasa seperti di rumah sendiri.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

        <!-- Menu Highlights - Signature Drinks & Snacks -->
        <div class="max-w-6xl px-4 py-20 mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col justify-between gap-4 mb-12 md:flex-row md:items-end">
                <div>
                    <span class="text-sm font-medium tracking-wider uppercase text-zinc-400">Menu Andalan</span>
                    <h2 class="mt-2 text-3xl font-light text-zinc-100">
                        Yang Dipesan
                        <span class="block font-bold text-zinc-300">Terus</span>
                    </h2>
                </div>
                <a class="inline-flex items-center gap-1 font-medium text-zinc-400 hover:text-zinc-300 group">
                    <span>Lihat Semua Menu</span>
                    <x-mdi-arrow-right class="w-4 h-4 transition-transform group-hover:translate-x-1" />
                </a>
            </div>

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                <!-- Menu 1 - Kopi Simbok -->
                <div class="cursor-pointer group">
                    <div class="mb-3 overflow-hidden rounded-2xl bg-zinc-800 aspect-w-1 aspect-h-1">
                        <img src="{{ asset('img/about/roti-bakar.webp') }}" alt="Roti Bakar"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                    </div>
                    <h3 class="font-semibold text-zinc-200">Roti Bakar</h3>
                    <p class="text-sm text-zinc-500">Roti Bakar Manis dan Mantap dengan berbagai pilihan rasa</p>
                    <p class="mt-1 text-sm font-medium text-zinc-400">Rp 22.000</p>
                </div>

                <!-- Menu 2 - Es Kopi 6 Bersaudara -->
                <div class="cursor-pointer group">
                    <div class="mb-3 overflow-hidden rounded-2xl bg-zinc-800 aspect-w-1 aspect-h-1">
                        <img src="{{ asset('img/about/kopi-filter.png') }}" alt="Es Kopi 6 Bersaudara"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                    </div>
                    <h3 class="font-semibold text-zinc-200">Es Kopi 6 Bersaudara</h3>
                    <p class="text-sm text-zinc-500">Kopi susu kekinian + 6 topping spesial</p>
                    <p class="mt-1 text-sm font-medium text-zinc-400">Rp 22.000</p>
                </div>

                <!-- Menu 3 - Pisang Goreng Simbok -->
                <div class="cursor-pointer group">
                    <div class="mb-3 overflow-hidden rounded-2xl bg-zinc-800 aspect-w-1 aspect-h-1">
                        <img src="{{ asset('img/about/mie-kuah.webp') }}" alt="Pisang Goreng Simbok"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                    </div>
                    <h3 class="font-semibold text-zinc-200">Mie Kuah</h3>
                    <p class="text-sm text-zinc-500">Mie kuah panas dengan berbagai pilihan topping</p>
                    <p class="mt-1 text-sm font-medium text-zinc-400">Rp 18.000</p>
                </div>

                <!-- Menu 4 - Roti Bakar Enam Rasa -->
                <div class="cursor-pointer group">
                    <div class="mb-3 overflow-hidden rounded-2xl bg-zinc-800 aspect-w-1 aspect-h-1">
                        <img src="{{ asset('img/about/bubur-ayam.webp') }}" alt="Roti Bakar Enam Rasa"
                            class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105 opacity-90 group-hover:opacity-100">
                    </div>
                    <h3 class="font-semibold text-zinc-200">Bubur Ayam</h3>
                    <p class="text-sm text-zinc-500">Bubur ayam dengan ayam berkualitas dan terjamin rasanya.</p>
                    <p class="mt-1 text-sm font-medium text-zinc-400">Rp 20.000</p>
                </div>
            </div>
        </div>

        <!-- Vibes & Spot Foto Section - Industrial Theme -->
        <div class="py-20 bg-zinc-900">
            <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
                <div class="max-w-6xl mx-auto mb-16 text-center group">
                    <span
                        class="block mb-1 text-xs font-bold tracking-[0.3em] uppercase text-zinc-600 group-hover:text-zinc-400 transition-colors">
                        // SPOT AESTHETIC
                    </span>
                    <h2 class="text-5xl font-black leading-none tracking-tighter uppercase md:text-7xl text-zinc-100">
                        <span class="text-transparent" style="-webkit-text-stroke: 1px #71717a;">DIRANCANG UNTUK</span>
                        <span
                            class="block underline text-zinc-200 decoration-4 underline-offset-8 decoration-zinc-800">FEED
                            &
                            STORY INSTAGRAM</span>
                    </h2>
                </div>

                <div class="grid grid-cols-1 gap-10 md:grid-cols-3">
                    <div class="relative group">
                        <div
                            class="relative p-2 overflow-hidden transition-all duration-500 border border-zinc-800 rounded-2xl bg-zinc-900/30 group-hover:border-zinc-100 group-hover:bg-zinc-800/50">
                            <div class="overflow-hidden rounded-xl aspect-4/3 ">
                                <img src="{{ asset('img/about/pkj-item-3.webp') }}" alt="Spot Industrial"
                                    class="object-cover w-full h-full transition-all duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100">
                            </div>

                            <div
                                class="absolute inset-0 flex items-end p-6 transition-opacity duration-500 opacity-0 group-hover:opacity-100 bg-linear-to-t from-black/80 via-transparent to-transparent">
                                <span
                                    class="text-[10px] font-black tracking-[0.3em] uppercase text-white border-b border-white/50 pb-1">
                                    Captured Perspective
                                </span>
                            </div>
                        </div>

                        <div class="flex flex-col mt-5">
                            <div class="flex items-center gap-3">
                                <span class="text-[10px] font-black text-zinc-600 uppercase tracking-[0.2em]">Loc /
                                    001</span>
                                <div class="h-px transition-colors grow bg-zinc-800 group-hover:bg-zinc-600"></div>
                            </div>
                            <div class="flex items-center justify-between mt-3">
                                <div class="flex items-center gap-2">
                                    <x-mdi-camera class="w-4 h-4 text-zinc-500" />
                                    <span
                                        class="text-sm font-black tracking-tight uppercase transition-colors text-zinc-200 group-hover:text-white">
                                        Spanduk Warkop Ikonik
                                    </span>
                                </div>
                                <div class="w-2 h-2 transition-all rounded-full bg-zinc-800 group-hover:bg-white"></div>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div
                            class="relative p-2 overflow-hidden transition-all duration-500 border border-zinc-800 rounded-2xl bg-zinc-900/30 group-hover:border-zinc-100 group-hover:bg-zinc-800/50">
                            <div class="overflow-hidden rounded-xl aspect-4/3 ">
                                <img src="{{ asset('img/about/pkj-item-4.webp') }}" alt="Spot Nostalgia"
                                    class="object-cover w-full h-full transition-all duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100">
                            </div>
                            <div
                                class="absolute inset-0 flex items-end p-6 transition-opacity duration-500 opacity-0 group-hover:opacity-100 bg-linear-to-t from-black/80 via-transparent to-transparent">
                                <span
                                    class="text-[10px] font-black tracking-[0.3em] uppercase text-white border-b border-white/50 pb-1">
                                    Interior Detail
                                </span>
                            </div>
                        </div>

                        <div class="flex flex-col mt-5">
                            <div class="flex items-center gap-3">
                                <span class="text-[10px] font-black text-zinc-600 uppercase tracking-[0.2em]">Loc /
                                    002</span>
                                <div class="h-px transition-colors grow bg-zinc-800 group-hover:bg-zinc-600"></div>
                            </div>
                            <div class="flex items-center justify-between mt-3">
                                <div class="flex items-center gap-2">
                                    <x-mdi-camera class="w-4 h-4 text-zinc-500" />
                                    <span
                                        class="text-sm font-black tracking-tight uppercase transition-colors text-zinc-200 group-hover:text-white">
                                        Suasana Klasik
                                    </span>
                                </div>
                                <div class="w-2 h-2 transition-all rounded-full bg-zinc-800 group-hover:bg-white"></div>
                            </div>
                        </div>
                    </div>

                    <div class="relative group">
                        <div
                            class="relative p-2 overflow-hidden transition-all duration-500 border border-zinc-800 rounded-2xl bg-zinc-900/30 group-hover:border-zinc-100 group-hover:bg-zinc-800/50">
                            <div class="overflow-hidden rounded-xl aspect-4/3 ">
                                <img src="{{ asset('img/about/pkj-item-5.webp') }}" alt="Spot Outdoor"
                                    class="object-cover w-full h-full transition-all duration-700 group-hover:scale-110 opacity-90 group-hover:opacity-100">
                            </div>
                            <div
                                class="absolute inset-0 flex items-end p-6 transition-opacity duration-500 opacity-0 group-hover:opacity-100 bg-linear-to-t from-black/80 via-transparent to-transparent">
                                <span
                                    class="text-[10px] font-black tracking-[0.3em] uppercase text-white border-b border-white/50 pb-1">
                                    Night Atmosphere
                                </span>
                            </div>
                        </div>

                        <div class="flex flex-col mt-5">
                            <div class="flex items-center gap-3">
                                <span class="text-[10px] font-black text-zinc-600 uppercase tracking-[0.2em]">Loc /
                                    003</span>
                                <div class="h-px transition-colors grow bg-zinc-800 group-hover:bg-zinc-600"></div>
                            </div>
                            <div class="flex items-center justify-between mt-3">
                                <div class="flex items-center gap-2">
                                    <x-mdi-camera class="w-4 h-4 text-zinc-500" />
                                    <span
                                        class="text-sm font-black tracking-tight uppercase transition-colors text-zinc-200 group-hover:text-white">
                                        Outdoor Vibes
                                    </span>
                                </div>
                                <div class="w-2 h-2 transition-all rounded-full bg-zinc-800 group-hover:bg-white"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hashtag -->
                <div class="mt-10 text-center">
                    <p class="text-sm text-zinc-600">Tag kami di IG:</p>
                    <p class="font-medium text-zinc-400">#Warkop6BersaudaraReborn #IndustrialKopi #EnamSaudaraSatuHati</p>
                </div>
            </div>
        </div>

        <!-- Lokasi & Jam - Dark -->
        <div class="max-w-6xl px-4 py-20 mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                <!-- Left: Info -->
                <div class="space-y-6">
                    <span class="text-sm font-medium tracking-wider uppercase text-zinc-400">Datang Aja</span>
                    <h2 class="mb-6 text-3xl font-light text-zinc-100">
                        Lokasi
                        <span class="block font-bold text-zinc-300">Warkop 6 Bersaudara Reborn</span>
                    </h2>

                    <div class="space-y-5">
                        <!-- Main Location -->
                        <div class="flex gap-4 p-5 border bg-zinc-800/50 rounded-2xl border-zinc-700">
                            <div class="flex items-center justify-center w-12 h-12 shrink-0 bg-zinc-700 rounded-xl">
                                <x-mdi-map-marker class="w-6 h-6 text-zinc-300" />
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-zinc-200">Cabang Utama</h4>
                                <p class="mt-1 text-zinc-400">Jl. Pangkalan Jati IA No.14-15</p>
                                <div class="flex items-center gap-2 mt-2 text-sm">
                                    <x-mdi-clock-outline class="w-4 h-4 text-zinc-400" />
                                    <span class="text-zinc-400">Buka 24 Jam</span>
                                </div>
                                <div class="flex items-center gap-2 mt-1 text-sm">
                                    <x-mdi-phone class="w-4 h-4 text-zinc-400" />
                                    <span class="text-zinc-400">0813-8057-0778</span>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Info - Dark -->
                        <div class="grid grid-cols-2 gap-3">
                            <div class="flex items-center gap-2 p-3 border bg-zinc-800/30 rounded-xl border-zinc-800">
                                <x-mdi-wifi class="w-4 h-4 text-zinc-400" />
                                <span class="text-xs text-zinc-500">WiFi 100Mbps</span>
                            </div>
                            <div class="flex items-center gap-2 p-3 border bg-zinc-800/30 rounded-xl border-zinc-800">
                                <x-mdi-power-plug class="w-4 h-4 text-zinc-400" />
                                <span class="text-xs text-zinc-500">Colokan di setiap meja</span>
                            </div>
                            <div class="flex items-center gap-2 p-3 border bg-zinc-800/30 rounded-xl border-zinc-800">
                                <x-mdi-music-note class="w-4 h-4 text-zinc-400" />
                                <span class="text-xs text-zinc-500">Live Music Jumat</span>
                            </div>
                            <div class="flex items-center gap-2 p-3 border bg-zinc-800/30 rounded-xl border-zinc-800">
                                <x-mdi-smoking-off class="w-4 h-4 text-zinc-400" />
                                <span class="text-xs text-zinc-500">Area Merokok</span>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Buttons - Dark -->
                    <div class="flex flex-wrap gap-3 pt-4">
                        <a href="#"
                            class="inline-flex items-center gap-2 px-5 py-2.5 bg-zinc-700 text-zinc-200 text-sm font-medium rounded-xl hover:bg-zinc-600 transition-colors">
                            <x-mdi-whatsapp class="w-4 h-4" />
                            Chat WhatsApp
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-2 px-5 py-2.5 bg-zinc-800 border border-zinc-700 text-zinc-300 text-sm font-medium rounded-xl hover:bg-zinc-700 transition-colors">
                            <x-mdi-google-maps class="w-4 h-4" />
                            Petunjuk Arah
                        </a>
                        <a href="#"
                            class="inline-flex items-center gap-2 px-5 py-2.5 bg-zinc-800 border border-zinc-700 text-zinc-300 text-sm font-medium rounded-xl hover:bg-zinc-700 transition-colors">
                            <x-mdi-instagram class="w-4 h-4" />
                            @warkop6reborn
                        </a>
                    </div>
                </div>

                <!-- Right: Simple Map - Dark -->
                <div class="relative">
                    <div class="h-full p-2 border shadow-sm bg-zinc-800 rounded-2xl border-zinc-700">
                        <div class="relative w-full overflow-hidden rounded-xl bg-zinc-900 min-h-100">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.123399845578!2d106.90608209999999!3d-6.2474655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f32e7bd83357%3A0x997e4b683c718e1f!2sWarkop%206%20Bersaudara!5e0!3m2!1sen!2sid!4v1771696233889!5m2!1sen!2sid"
                                class="absolute top-0 left-0 w-full h-full" style="border:0;" allowfullscreen=""
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>

                    <div
                        class="absolute px-4 py-2 border shadow-sm -bottom-2 -right-2 bg-zinc-800 rounded-xl border-zinc-700">
                        <div class="flex items-center gap-1">
                            <span class="ml-1 text-xs text-zinc-500">4.8 (1.2rb review)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimoni Section - 3 Bintang 5 -->
        <div class="py-16 bg-zinc-900">
    <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto mb-12 text-center">
            <span
                class="inline-block px-3 py-1 mb-4 text-xs font-bold tracking-[0.2em] uppercase border text-zinc-400 border-zinc-800 rounded-full bg-zinc-900/50">
                Testimoni
            </span>
            <h2 class="text-4xl font-light text-zinc-100">
                Yang Mereka
                <span class="block mt-1 text-5xl font-black text-white uppercase">Katakan Tentang Kami</span>
            </h2>
            <div class="w-12 h-px mx-auto mt-6 bg-zinc-700"></div>
        </div>

        <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
            <div
                class="relative p-8 transition-all duration-300 border bg-zinc-800/30 rounded-2xl border-zinc-700 hover:border-zinc-500 hover:bg-zinc-800/50 group">
                <div
                    class="absolute font-serif text-6xl italic transition-colors top-4 right-6 text-zinc-700 group-hover:text-zinc-600">
                    "</div>

                <div class="flex gap-1 mb-6">
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                </div>

                <p class="mb-8 text-lg font-light leading-relaxed text-zinc-300">
                    "Suasananya aesthetic banget buat nongkrong sambil kerja. Roti bakarnya enak, kopinya juga mantap.
                    Bakal balik lagi ajak temen-temen buat ngerasain vibes-nya!"
                </p>

                <div class="flex items-center gap-4">
                    <div
                        class="w-16 h-16 overflow-hidden transition-colors border-2 rounded-full border-zinc-700 group-hover:border-zinc-500">
                        <img src="/img/about/naufal.jpeg" alt="Miftah Naufal" class="object-cover w-full h-full">
                    </div>
                    <div>
                        <h4 class="font-semibold text-zinc-200">Miftah Naufal</h4>
                        <div class="flex items-center gap-2">
                            <span class="text-xs text-zinc-500">Anak Otista</span>
                            <span class="w-1 h-1 rounded-full bg-zinc-600"></span>
                            <span class="text-xs text-zinc-500">2 hari lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="relative p-8 transition-all duration-300 border bg-zinc-800/30 rounded-2xl border-zinc-700 hover:border-zinc-500 hover:bg-zinc-800/50 group">
                <div
                    class="absolute font-serif text-6xl italic transition-colors top-4 right-6 text-zinc-700 group-hover:text-zinc-600">
                    "</div>

                <div class="flex gap-1 mb-6">
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                </div>

                <p class="mb-8 text-lg font-light leading-relaxed text-zinc-300">
                    "Pertama kali ke sini diajak temen, ternyata tempatnya cozy banget! Pelayanannya ramah, Wi-Fi kencang.
                    Sangat recommended buat yang cari tempat WFC tenang."
                </p>

                <div class="flex items-center gap-4">
                    <div
                        class="w-16 h-16 overflow-hidden transition-colors border-2 rounded-full border-zinc-700 group-hover:border-zinc-500">
                        <img src="/img/about/tristan.jpeg" alt="Tristan Faiz" class="object-cover w-full h-full">
                    </div>
                    <div>
                        <h4 class="font-semibold text-zinc-200">Tristan Faiz</h4>
                        <div class="flex items-center gap-2">
                            <span class="text-xs text-zinc-500">Anak Jatiwaringin</span>
                            <span class="w-1 h-1 rounded-full bg-zinc-600"></span>
                            <span class="text-xs text-zinc-500">5 hari lalu</span>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="relative p-8 transition-all duration-300 border bg-zinc-800/30 rounded-2xl border-zinc-700 hover:border-zinc-500 hover:bg-zinc-800/50 group">
                <div
                    class="absolute font-serif text-6xl italic transition-colors top-4 right-6 text-zinc-700 group-hover:text-zinc-600">
                    "</div>

                <div class="flex gap-1 mb-6">
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                    <x-mdi-star class="w-5 h-5 text-yellow-500 fill-current" />
                </div>

                <p class="mb-8 text-lg font-light leading-relaxed text-zinc-300">
                    "Es Kopi 6 Bersaudara wajib dicoba! Toppingnya lengkap, rasanya beda dari kopi susu biasa.
                    Tempatnya juga instagramable banget buat kalian yang suka foto-foto konten."
                </p>

                <div class="flex items-center gap-4">
                    <div
                        class="w-16 h-16 overflow-hidden transition-colors border-2 rounded-full border-zinc-700 group-hover:border-zinc-500">
                        <img src="/img/about/galih.jpeg" alt="Galih Pangestu" class="object-cover w-full h-full">
                    </div>
                    <div>
                        <h4 class="font-semibold text-zinc-200">Galih Pangestu</h4>
                        <div class="flex items-center gap-2">
                            <span class="text-xs text-zinc-500">Anak Duren </span>
                            <span class="w-1 h-1 rounded-full bg-zinc-600"></span>
                            <span class="text-xs text-zinc-500">1 minggu lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Simple CTA - Dark Gradient -->
        <div class="border-t bg-linear-to-r from-zinc-900 to-zinc-800 border-zinc-800">
            <div class="max-w-4xl px-4 py-16 mx-auto text-center sm:px-6 lg:px-8">
                <h3 class="mb-3 text-2xl font-light md:text-3xl text-zinc-200">
                    Pengen nostalgia atau cari tempat nongkrong
                    <span class="font-bold text-zinc-100">dengan vibes industrial yang aesthetic?</span>
                </h3>
                <p class="mb-8 text-zinc-400">Dateng aja. Warkop 6 Bersaudara Reborn udah nunggu.</p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#"
                        class="inline-flex items-center gap-2 px-6 py-3 font-medium transition-colors shadow-lg bg-zinc-700 text-zinc-200 rounded-xl hover:bg-zinc-600">
                        <x-mdi-map-marker class="w-5 h-5" />
                        Cek Lokasi
                    </a>
                    <a href="#"
                        class="inline-flex items-center gap-2 px-6 py-3 font-medium transition-colors border shadow-lg bg-zinc-900 text-zinc-300 rounded-xl hover:bg-zinc-800 border-zinc-700">
                        <x-mdi-coffee class="w-5 h-5" />
                        Lihat Menu
                    </a>
                    <iframe src="https://drive.google.com/file/d/1klIIkIYWehmzbwbNmzt0lDLlPXhjryLm/preview" width="640" height="480"></iframe>
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

        .aspect-w-4.aspect-h-3 {
            position: relative;
            padding-bottom: 75%;
        }

        .aspect-w-4.aspect-h-3>* {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
    </style>
@endsection
