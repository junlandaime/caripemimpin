@extends('layouts.app')

@section('title', 'Beranda - Pilkada Jawa Barat')

@section('content')
    <!-- Hero Section -->


    <x-animations.slide-in direction="right" class="mb-12">
        <section id="hero"
            class="bg-gradient-to-br from-blue-600 to-purple-600 text-white min-h-screen flex items-center rounded-3xl">
            <div class="container mx-auto px-4 text-center relative overflow-hidden">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 opacity-0" x-init="gsap.to($el, { opacity: 1, duration: 1, y: 30, ease: 'back' })">Pilkada Jawa Barat 2024</h1>
                <p class="text-xl md:text-2xl mb-8 opacity-0" x-init="gsap.to($el, { opacity: 1, duration: 1, delay: 0.5, y: 30, ease: 'back' })">Suarakan Aspirasi, Wujudkan Perubahan
                </p>
                {{-- <a href="{{ route('register') }}"
                    class="mt-4 inline-block bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700 transition duration-300">Jawa
                    Barat</a>
                <a href="{{ route('register') }}"
                    class="mt-4 inline-block bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700 transition duration-300">Kabupaten
                    Bandung</a>
                <a href="{{ route('register') }}"
                    class="mt-4 inline-block bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700 transition duration-300">Kota
                    Bandung</a>
                <a href="{{ route('register') }}"
                    class="mt-4 inline-block bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700 transition duration-300">Kabupaten
                    Bandung Barat</a>
                <a href="{{ route('register') }}"
                    class="mt-4 inline-block bg-indigo-600 text-white px-6 py-2 rounded-full hover:bg-indigo-700 transition duration-300">Kota
                    Cimahi</a> --}}
                <div class="mt-12 space-x-4 opacity-0 py-10" x-init="gsap.to($el, { opacity: 1, duration: 1, delay: 1, y: 30, ease: 'back' })">
                    @foreach ($regions as $region)
                        <a href="{{ route('regions.show', $region) }}"
                            class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-full font-bold hover:bg-white hover:text-blue-600 transition duration-300 inline-block">{{ $region->full_name }}</a>
                    @endforeach
                    {{--  --}}
                </div>
                <div class="absolute -bottom-16 left-1/2 transform -translate-x-1/2 w-full max-w-4xl">
                    {{-- <img src="https://picsum.photos/seed/hero/800/400" alt="Ilustrasi Pilkada"
                        class="w-full rounded-t-3xl shadow-2xl float"> --}}
                </div>
            </div>
        </section>

    </x-animations.slide-in>

    <section id="calon" class="py-32 bg-gray-100" x-data="{ activeTab: 'jawabarat' }">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">Pasangan Calon</h2>
            <div class="mb-8 flex justify-center space-x-4" x-init="gsap.from($el.children, { opacity: 0, y: 30, duration: 0.6, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                @foreach ($regions as $region)
                    <button @click="activeTab = '{{ $region->id }}'"
                        :class="{ 'bg-blue-600 text-white': activeTab === '{{ $region->id }}', 'bg-gray-200 text-gray-700': activeTab !== '{{ $region->id }}' }"
                        class="px-6 py-3 rounded-full font-semibold transition duration-300 inline-block">{{ $region->full_name }}</button>
                @endforeach

                {{-- <button @click="activeTab = 'jawabarat'"
                    :class="{ 'bg-blue-600 text-white': activeTab === 'jawabarat', 'bg-gray-200 text-gray-700': activeTab !== 'jawabarat' }"
                    class="px-6 py-3 rounded-full font-semibold transition duration-300">Jawa Barat</button>
                <button @click="activeTab = 'bandung'"
                    :class="{ 'bg-blue-600 text-white': activeTab === 'bandung', 'bg-gray-200 text-gray-700': activeTab !== 'bandung' }"
                    class="px-6 py-3 rounded-full font-semibold transition duration-300">Kota Bandung</button> --}}
            </div>

            @foreach ($regions as $region)
                <div x-show="activeTab === '{{ $region->id }}'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @forelse ($region->candidates as $candidate)
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden" x-init="gsap.from($el, { opacity: 0, x: -50, duration: 0.8, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                            <img src="{{ $candidate->image_url }}" alt="{{ $candidate->name }}"
                                class="w-full h-64 object-cover">
                            <div class="p-6">
                                <h3 class="text-2xl font-semibold mb-2">{{ $candidate->name }}</h3>
                                <p class="text-gray-600 mb-4">Visi: Jawa Barat Maju dan Sejahtera</p>
                                <a href="#"
                                    class="inline-block bg-blue-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-blue-700 transition duration-300">Profil
                                    Lengkap</a>
                            </div>
                        </div>
                    @empty
                        <p class="col-span-full text-center text-gray-500">Belum ada kandidat terdaftar untuk wilayah ini.
                        </p>
                    @endforelse

                </div>
            @endforeach


        </div>
    </section>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <x-animations.fade-in delay="200">
            <x-card title="Creative Challenges">
                <p class="text-gray-600">Participate in exciting challenges and competitions to showcase your skills.</p>
            </x-card>
        </x-animations.fade-in>
        <x-animations.fade-in delay="400">
            <x-card title="Learn & Grow">
                <p class="text-gray-600">Access tutorials, workshops, and resources to enhance your creative abilities.</p>
            </x-card>
        </x-animations.fade-in>
        <x-animations.fade-in delay="600">
            <x-card title="Connect & Collaborate">
                <p class="text-gray-600">Meet like-minded individuals and collaborate on amazing projects.</p>
            </x-card>
        </x-animations.fade-in>
    </div>

    <x-animations.slide-in direction="left">
        <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">Featured Games</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach (range(1, 4) as $index)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <img src="{{ asset('images/game-placeholder.jpg') }}" alt="Game {{ $index }}"
                        class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-gray-800">Game Title {{ $index }}</h3>
                        <p class="text-sm text-gray-600">Brief description of the game.</p>
                    </div>
                </div>
            @endforeach
        </div>
    </x-animations.slide-in>

    <div class="relative bg-indigo-800">
        <div class="absolute inset-0">
            <img class="w-full h-full object-cover"
                src="https://awsimages.detik.net.id/community/media/visual/2022/07/13/wisata-di-jawa-barat-5.jpeg?w=1024"
                alt="Pemandangan Jawa Barat">
            <div class="absolute inset-0 bg-indigo-800 mix-blend-multiply" aria-hidden="true"></div>
        </div>
        <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
            <h1 class="text-4xl font-extrabold tracking-tight text-white sm:text-5xl lg:text-6xl">CariPemimpin</h1>
            <p class="mt-6 text-xl text-indigo-100 max-w-3xl">Temukan dan pelajari tentang calon pemimpin di Jawa Barat.
                Buat
                keputusan cerdas untuk masa depan daerah kita.</p>
            <div class="mt-10 max-w-sm sm:flex sm:max-w-none">
                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                    <a href="{{ route('candidates.index') }}"
                        class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-indigo-700 bg-white hover:bg-indigo-50 sm:px-8">Lihat
                        Kandidat</a>
                    <a href="{{ route('regions.index') }}"
                        class="flex items-center justify-center px-4 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-500 hover:bg-indigo-600 sm:px-8">Pilih
                        Daerah</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Candidates Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Kandidat Terkini</h2>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">Kenali calon pemimpin yang akan membangun
                    masa depan Jawa Barat</p>
            </div>
            <div class="mt-12 grid gap-16 lg:grid-cols-4 lg:max-w-none">
                @foreach ($featuredCandidates as $candidate)
                    <div
                        class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 ease-in-out">
                        <div class="relative pb-48 overflow-hidden">
                            <img class ="absolute inset-0 h-full w-full
                            object-cover"
                                src="{{ Storage::url($candidate->image_url) }}" alt="{{ $candidate->name }}">
                        </div>
                        <div class="p-4">
                            <h2 class="mt-2 mb-2 font-bold text-xl">{{ $candidate->name }}</h2>
                            <p class="text-sm text-gray-600 mb-2">{{ $candidate->position }}
                                {{ $candidate->region->name }}
                            </p>
                            <p class="text-sm text-indigo-600 font-semibold mb-4">{{ $candidate->party }}</p>
                            <p class="text-sm text-gray-700 mb-4">{{ Str::limit($candidate->short_bio, 100) }}</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sm font-semibold text-gray-600">Umur: {{ $candidate->age }} tahun</span>

                            </div>
                        </div>


                    </div>
                @endforeach
            </div>
            <div class="mt-12 text-center">
                <a href="{{ route('candidates.index') }}"
                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700">
                    Lihat Semua Kandidat
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <div class="bg-gray-50 overflow-hidden">
        <div class="relative max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <svg class="absolute top-0 left-full transform -translate-x-1/2 -translate-y-3/4 lg:left-auto lg:right-full lg:translate-x-2/3 lg:translate-y-1/4"
                width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
                <defs>
                    <pattern id="8b1b5f72-e944-4457-af67-0c6d15a99f38" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#8b1b5f72-e944-4457-af67-0c6d15a99f38)" />
            </svg>

            <div class="relative lg:grid lg:grid-cols-3 lg:gap-x-8">
                <div class="lg:col-span-1">
                    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Fitur Utama CariPemimpin
                    </h2>
                </div>
                <dl
                    class="mt-10 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-8 sm:gap-y-10 lg:mt-0 lg:col-span-2">
                    <div>
                        <dt>
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Pencarian Mudah</p>
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Temukan kandidat berdasarkan nama, daerah, atau posisi dengan mudah dan cepat.
                        </dd>
                    </div>

                    <div>
                        <dt>
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </div>
                            <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Profil Lengkap</p>
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Lihat profil lengkap kandidat, termasuk visi, misi, dan track record mereka.
                        </dd>
                    </div>

                    <div>
                        <dt>
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                            <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Perbandingan Kandidat</p>
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Bandingkan kandidat side-by-side untuk membantu Anda membuat keputusan yang tepat.
                        </dd>
                    </div>

                    <div>
                        <dt>
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Informasi Terkini</p>
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Dapatkan update terbaru tentang kampanye dan aktivitas kandidat.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-4">Pemilihan Terdekat</h2>
                <ul class="space-y-4">
                    @foreach ($upcomingElections as $election)
                        <li>
                            <span class="font-semibold">{{ $election->region->name }}</span><br>
                            <span class="text-gray-600">{{ $election->position }}</span><br>
                            {{-- <span class="text-sm text-blue-600">{{ $election->date->format('d F Y') }}</span> --}}
                        </li>
                    @endforeach
                </ul>
                {{-- <a href="{{ route('elections.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">Lihat semua
                    pemilihan</a> --}}
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-4">Kandidat Terpopuler</h2>
                {{-- <ul class="space-y-4">
                    @foreach ($popularCandidates as $candidate)
                        <li class="flex items-center">
                            <img src="{{ $candidate->photo_url }}" alt="{{ $candidate->name }}"
                                class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <span class="font-semibold">{{ $candidate->name }}</span><br>
                                <span class="text-gray-600">{{ $candidate->position }} -
                                    {{ $candidate->region->name }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul> --}}
                <a href="{{ route('candidates.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">Lihat
                    semua kandidat</a>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-4">Statistik Pilkada</h2>
                {{-- <ul class="space-y-2">
                    <li>Total Wilayah: <span class="font-semibold">{{ $statistics['total_regions'] }}</span></li>
                    <li>Total Kandidat: <span class="font-semibold">{{ $statistics['total_candidates'] }}</span></li>
                    <li>Pemilih Terdaftar: <span
                            class="font-semibold">{{ number_format($statistics['total_voters']) }}</span></li>
                    <li>Partisipasi Pemilih: <span
                            class="font-semibold">{{ number_format($statistics['avg_turnout'], 2) }}%</span></li>
                </ul>
                <a href="{{ route('regions.statistics') }}" class="mt-4 inline-block text-blue-600 hover:underline">Lihat
                    statistik lengkap</a> --}}
            </div>
        </div>

        <div class="mb-12">
            <h2 class="text-3xl font-bold mb-6">Peta Wilayah Pilkada</h2>
            <div id="map" class="h-96 rounded-lg shadow-md"></div>
        </div>

        <div class="mb-12">
            <h2 class="text-3xl font-bold mb-6">Berita dan Pengumuman Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                {{-- @foreach ($latestNews as $news)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <img src="{{ $news->image_url }}" alt="{{ $news->title }}" class="w-full h-48 object-cover">
                        <div class="p-4">
                            <h3 class="font-bold text-xl mb-2">{{ $news->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ Str::limit($news->content, 100) }}</p>
                            <a href="{{ route('news.show', $news) }}" class="text-blue-600 hover:underline">Baca
                                selengkapnya</a>
                        </div>
                    </div>
                @endforeach --}}
            </div>
            {{-- <a href="{{ route('news.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">Lihat semua
                berita</a> --}}
        </div>

        <div>
            <h2 class="text-3xl font-bold mb-6">Panduan Pemilih</h2>
            <div class="bg-white rounded-lg shadow-md p-6">
                <p class="mb-4">Penting untuk memahami proses dan hak Anda sebagai pemilih. Berikut beberapa panduan
                    penting:</p>
                <ul class="list-disc list-inside space-y-2">
                    <li>Pastikan Anda terdaftar sebagai pemilih</li>
                    <li>Kenali kandidat dan program mereka</li>
                    <li>Periksa waktu dan lokasi TPS Anda</li>
                    <li>Bawa identitas yang diperlukan saat memilih</li>
                    <li>Jaga kerahasiaan suara Anda</li>
                </ul>
                {{-- <a href="{{ route('voter.guide') }}" class="mt-4 inline-block text-blue-600 hover:underline">Baca panduan
                    lengkap</a> --}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        gsap.registerPlugin(ScrollTrigger);
    </script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script>
        function candidateModal(candidateId) {
            return {
                isOpen: false,
                candidateData: {},
                candidateId: candidateId,
                openModal() {
                    this.isOpen = true;
                    this.fetchCandidateData();
                },
                closeModal() {
                    this.isOpen = false;
                },
                fetchCandidateData() {
                    fetch(`/api/candidates/${this.candidateId}`)
                        .then(response => response.json())
                        .then(data => {
                            this.candidateData = data;
                        })
                        .catch(error => {
                            console.error('Error fetching candidate data:', error);
                        });
                }
            }
        }
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([-6.9175, 107.6191], 8);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            @foreach ($regions as $region)
                L.marker([{{ $region->latitude }}, {{ $region->longitude }}])
                    .addTo(map)
                    .bindPopup("<a href='{{ route('regions.show', $region) }}'>{{ $region->name }}</a>");
            @endforeach
        });
    </script>
@endpush
