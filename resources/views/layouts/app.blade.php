<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Pilkada Bandung Raya dan Jawa Barat') - caripemimpin.id</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    {{-- <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
    <link rel="icon" href="{{ asset('favicon.png') }}">

    {{-- meta text --}}
    <!-- Meta tags untuk SEO dan sharing -->
    <meta name="description"
        content="CariPemimpin.id adalah platform edukasi politik yang menyediakan informasi netral dan transparan tentang calon kepala daerah di Indonesia. Cerdas memilih untuk masa depan yang lebih baik.">
    <meta name="keywords"
        content="caripemimpin, Cari Pemimpin, caripemimpinid, Cari Pemimpin id, caripemimpinid, pilkada Kota Bandung, Jawa Barat, Kota Cimahi, Kabupaten Bandung, Kabupaten Bandung, edukasi politik, calon kepala daerah, pemilihan umum, demokrasi Indonesia, informasi kandidat">
    <meta name="author" content="Tim CariPemimpin.id">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'CariPemimpin.id - Informasi Transparan Calon Kepala Daerah')">
    <meta property="og:description" content="@yield('og_description', 'Temukan informasi lengkap dan netral tentang calon kepala daerah di Indonesia. Buat keputusan cerdas untuk memilih pemimpin masa depan.')">
    <meta property="og:image" content="@yield('og_image', 'https://caripemimpin.id/home.png')">
    {{-- 
    <meta property="og:title" content="">
    <meta property="og:description"
        content="Temukan informasi lengkap dan netral tentang calon kepala daerah di Indonesia. Buat keputusan cerdas untuk memilih pemimpin masa depan.">
    <meta property="og:image" content="https://caripemimpin.id/back.jpg">
    <meta property="og:url" content="https://caripemimpin.id">
    <meta name="twitter:card" content="summary_large_image"> --}}

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('og_title', 'CariPemimpin.id - Informasi Transparan Calon Kepala Daerah')">
    <meta property="twitter:description" content="@yield('og_description', 'Temukan informasi lengkap dan netral tentang calon kepala daerah di Indonesia. Buat keputusan cerdas untuk memilih pemimpin masa depan.')">
    <meta property="twitter:image" content="@yield('og_image', 'https://caripemimpin.id/home.png')">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('styles')
</head>

@stack('skrip')

<body class="font-sans antialiased bg-gray-100">
    <header x-data="{ mobileMenuOpen: false, servicesOpen: false }" class="bg-white text-black lg:px-36">
        <div class="container mx-auto px-4 py-6">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold"><img class="h-8 w-full"
                        src="{{ asset('logo.png') }}" alt=""></a>
                <nav class="hidden md:flex space-x-4">
                    <a href="{{ route('home') }}"
                        class=" {{ request()->routeIs('home') ? 'font-bold' : 'hover:bg-slate-400' }} px-3 py-2 rounded">Beranda</a>
                    {{-- <a href="{{ route('candidates.index') }}"
                        class=" {{ request()->routeIs('candidates.*') ? 'font-bold' : 'hover:bg-slate-400' }} px-3 py-2 rounded">Kandidat</a> --}}
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false"
                            class="{{ request()->routeIs('candidates.*') || request()->routeIs('pasangan.*') ? 'font-bold' : 'hover:bg-slate-400' }} hover:bg-slate-400 px-3 py-2 rounded">
                            Kandidat
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <ul x-show="open" x-transition
                            class="absolute left-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-lg z-50">
                            <li><a href="{{ route('pasangan.index') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Kandidat
                                    Pasangan</a></li>
                            <li><a href="{{ route('candidates.index') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Kandidat Perorang</a></li>
                        </ul>
                    </div>
                    {{-- <a href="{{ route('regions.index') }}"
                        class=" {{ request()->routeIs('regions.*') ? 'font-bold' : 'hover:bg-slate-400' }} px-3 py-2 rounded">Wilayah</a> --}}
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false"
                            class="{{ request()->routeIs('regions.*') ? 'font-bold' : 'hover:bg-slate-400' }} hover:bg-slate-400 px-3 py-2 rounded">
                            Wilayah dan Games
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <ul x-show="open" x-transition
                            class="absolute left-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-lg z-50">
                            <li><a href="{{ route('regions.index') }}" class="block px-4 py-2 hover:bg-gray-100">Daftar
                                    Wilayah</a></li>
                            <li><a href="{{ route('kuis') }}" class="block px-4 py-2 hover:bg-gray-100">Games Kuis
                                    Wilayah</a></li>
                            <li><a href="{{ route('issues.index') }}" class="block px-4 py-2 hover:bg-gray-100">Isu
                                    Wilayah</a></li>
                        </ul>
                    </div>
                    {{-- <a href="{{ route('about') }}"
                        class=" {{ request()->routeIs('about') ? 'font-bold' : 'hover:bg-slate-400' }} px-3 py-2 rounded">Tentang</a> --}}
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" @click.away="open = false"
                            class="{{ request()->routeIs('about.*') ? 'font-bold' : 'hover:bg-slate-400' }} hover:bg-slate-400 px-3 py-2 rounded">
                            About Us
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block ml-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <ul x-show="open" x-transition
                            class="absolute left-0 mt-2 w-48 bg-white text-gray-800 rounded-md shadow-lg z-50">
                            <li><a href="{{ route('about') }}" class="block px-4 py-2 hover:bg-gray-100">Tentang
                                    CariPemimpin
                                </a></li>
                            <li><a href="{{ route('about.collab') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">Tentang Kolaborasi Kami</a></li>
                            <li><a href="{{ route('about.amki-salman') }}"
                                    class="block px-4 py-2 hover:bg-gray-100">AMKI dan Salman</a></li>
                        </ul>

                    </div>
                    <a href="{{ route('contact') }}"
                        class=" {{ request()->routeIs('contact') ? 'font-bold' : 'hover:bg-slate-400' }} px-3 py-2 rounded">Kontak</a>
                </nav>
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
            <div x-show="mobileMenuOpen" class="mt-4 md:hidden">
                <a href="{{ route('home') }}"
                    class="block py-2 {{ request()->routeIs('home') ? 'font-bold' : 'hover:bg-slate-400' }}">Beranda</a>
                {{-- <a href="{{ route('candidates.index') }}"
                    class="block py-2 {{ request()->routeIs('candidates.*') ? 'font-bold' : 'hover:bg-slate-400' }}">Kandidat</a> --}}
                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="{{ request()->routeIs('candidates.*') || request()->routeIs('pasangan.*') ? 'font-bold' : 'hover:bg-slate-400' }} w-full text-left py-2 hover:bg-slate-400">
                        Kandidat
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block ml-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open" class="pl-4">
                        <li><a href="{{ route('pasangan.index') }}" class="block py-2 hover:bg-slate-400">Kandidat
                                Pasangan</a></li>
                        <li><a href="{{ route('candidates.index') }}" class="block py-2 hover:bg-slate-400">Kandidat
                                Perorang</a>
                        </li>
                    </ul>
                </div>
                {{-- <a href="{{ route('regions.index') }}"
                    class="block py-2 {{ request()->routeIs('regions.*') ? 'font-bold' : 'hover:bg-slate-400' }}">Wilayah</a> --}}
                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="{{ request()->routeIs('regions.*') ? 'font-bold' : 'hover:bg-slate-400' }} w-full text-left py-2 hover:bg-slate-400">
                        Wilayah dan Games
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block ml-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open" class="pl-4">
                        <li><a href="{{ route('regions.index') }}" class="block py-2 hover:bg-slate-400">Daftar
                                Wilayah</a></li>
                        <li><a href="{{ route('kuis') }}" class="block py-2 hover:bg-slate-400">Games Kuis
                                Wilayah</a>
                        </li>
                        <li><a href="{{ route('issues.index') }}" class="block py-2 hover:bg-slate-400">Isu
                                Wilayah</a>
                        </li>
                    </ul>
                </div>
                {{-- <a href="{{ route('about') }}"
                    class="block py-2 {{ request()->routeIs('about') ? 'font-bold' : 'hover:bg-slate-400' }}">Tentang</a> --}}
                <div x-data="{ open: false }">
                    <button @click="open = !open"
                        class="{{ request()->routeIs('about.*') ? 'font-bold' : 'hover:bg-slate-400' }} w-full text-left py-2 hover:bg-slate-400">
                        About Us
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block ml-1" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul x-show="open" class="pl-4">
                        <li><a href="{{ route('about') }}" class="block py-2 hover:bg-slate-400">Tentang
                                Caripemimpin</a></li>
                        <li><a href="{{ route('about.collab') }}" class="block py-2 hover:bg-slate-400">Tentang
                                Kolaborasi Kami</a>
                        </li>
                        <li><a href="{{ route('about.amki-salman') }}" class="block py-2 hover:bg-slate-400">AMKI dan
                                Salman</a>
                        </li>
                    </ul>
                </div>
                <a href="{{ route('contact') }}"
                    class="block py-2 {{ request()->routeIs('contact') ? 'font-bold' : 'hover:bg-slate-400' }}">Kontak</a>
            </div>
        </div>
    </header>

    <main class="container mx-auto px-4 py-8 lg:px-40">
        @yield('content')
    </main>

    <footer class="bg-gray-100 text-slate-800 py-8 lg:px-40">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                <div>
                    {{-- <h3 class="text-lg font-semibold mb-4">Tentang Kami</h3> --}}
                    <a href="{{ route('home') }}" class="text-2xl font-bold"><img class="h-8 w-40"
                            src="{{ asset('logo.png') }}" alt=""></a>
                    <p class="my-10">pilkada.caripemimpin adalah platform informasi untuk membantu masyarakat Jawa
                        Barat dalam memilih
                        pemimpin daerah.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('pasangan.index') }}" class="hover:text-blue-300">Kandidat Pasangan</a>
                        </li>
                        <li><a href="{{ route('candidates.index') }}" class="hover:text-blue-300">Kandidat
                                Perorang</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tentang Kami</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}" class="hover:text-blue-300">Apa itu CariPemimpin</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-blue-300">Visi & Misi</a>
                        </li>
                        <li><a href="{{ route('about.collab') }}" class="hover:text-blue-300">Kolaborasi Gerakan
                                ini</a></li>
                        <li><a href="{{ route('about.collab') }}" class="hover:text-blue-300">AMKI dan Salman</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Tautan Cepat</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('home') }}" class="hover:text-blue-300">Beranda</a></li>
                        <li><a href="{{ route('kuis') }}" class="hover:text-blue-300">Kuis</a></li>
                        <li><a href="{{ route('regions.index') }}" class="hover:text-blue-300">Wilayah</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-blue-300">Tentang</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-blue-300">Kontak</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Hubungi Kami</h3>

                    <a href=https://mail.google.com/mail/?view=cm&amp;source=mailto&amp;to=info@caripemimpin.id&amp;body=Tulis%20pesan%20Anda&amp;su=Hi%20CariPemimpin%20"
                        target="_blank">
                        <p>Email: info@caripemimpin.id</p>
                    </a>
                    <p>WA : (+62) 816-619-469</p>
                    <div class="mt-4 flex space-x-4">
                        {{-- <a href="#" class="text-secondary hover:text-primary">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                            </svg>
                        </a>
                        <a href="#" class="text-secondary hover:text-primary">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a> --}}
                        <a href="https://www.instagram.com/caripemimpin.id/profilecard/?igsh=MXhvd284NzJoM3Jw"
                            target="_blank" class="text-secondary hover:text-primary">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                <p>&copy; {{ date('Y') }} pilkada.caripemimpin. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>

</html>
