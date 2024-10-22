@extends('layouts.app')

@section('title', 'Beranda - Pilkada Jawa Barat')

@push('skrip')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-TPRDHTM1M1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-TPRDHTM1M1');
    </script>
@endpush

@push('styles')
    <style>
        [x-cloak] {
            display: none !important;
        }

        @keyframes slide-in {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }

            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>

    <style>
        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }
    </style>
@endpush

@section('content')
    <!-- Hero Section -->


    <x-animations.slide-in direction="right" class="mb-3">

        <section class="relative h-screen flex items-center bg-gray-900 overflow-hidden rounded-3xl">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('back.jpg') }}" alt="Background" class="w-full h-full object-cover opacity-50 rounded-3xl">
            </div>
            <div
                class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between">
                <div class="w-full md:w-1/2 text-white mb-8 md:mb-0" x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)"
                    x-show="show" x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 transform -translate-x-12"
                    x-transition:enter-end="opacity-100 transform translate-x-0">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Kenali dengan Tepat</h1>
                    <p class="text-xl mb-8">Pilih yang Terhebat</p>
                    @foreach ($regions as $region)
                        <a href="{{ route('regions.show', $region) }}"
                            class="bg-primary text-slate-200 px-8 py-3 my-1 rounded-full font-semibold hover:bg-secondary transition-colors duration-300 inline-block">{{ $region->full_name }}</a>
                    @endforeach
                </div>
                <div class="w-full md:w-1/2 relative" x-data="{ show: false }" x-init="setTimeout(() => show = true, 600)">
                    <div class="w-40 h-40 md:w-80 md:h-80 bg-primary rounded-full absolute top-0 right-0 transform translate-x-1/3 -translate-y-1/3"
                        x-show="show" x-transition:enter="transition ease-out duration-1000"
                        x-transition:enter-start="opacity-0 transform scale-50"
                        x-transition:enter-end="opacity-100 transform scale-100"></div>
                    <img src="{{ asset('find.png') }}" alt="Featured Image"
                        class="md:w-full w-1/2 rounded-3xl shadow-2xl relative z-10" x-show="show"
                        x-transition:enter="transition ease-out duration-1000 delay-300"
                        x-transition:enter-start="opacity-0 transform translate-y-12"
                        x-transition:enter-end="opacity-100 transform translate-y-0">
                </div>
            </div>


        </section>

    </x-animations.slide-in>

    <section id="calon" class="py-20 bg-gray-100" x-data="{ activeTab: '5' }">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center mb-16" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">Pasangan Calon</h2>
            <div class="mb-8 flex md:flex-row flex-col justify-center" x-init="gsap.from($el.children, { opacity: 0, y: 30, duration: 0.6, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                @foreach ($regions as $region)
                    <button @click="activeTab = '{{ $region->id }}'"
                        :class="{ 'bg-primary text-white': activeTab === '{{ $region->id }}', 'bg-gray-200 text-gray-700': activeTab !== '{{ $region->id }}' }"
                        class="px-6 py-3 my-1 mx-1 rounded-full font-semibold transition duration-300 inline lg:inline-block">
                        @php
                            switch ($region->type) {
                                case 'Kabupaten':
                                    echo 'Bupati';
                                    break;

                                case 'Kota':
                                    echo 'Walikota';
                                    break;

                                default:
                                    echo 'Gubernur';
                                    break;
                            }
                        @endphp
                        {{ $region->name }}</button>
                @endforeach

            </div>

            @foreach ($regions as $region)
                <div x-show="activeTab === '{{ $region->id }}'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @forelse ($region->pairs as $candidate)
                        <div class="bg-white rounded-xl shadow-lg overflow-hidden" x-init="gsap.from($el, { opacity: 0, x: -50, duration: 0.8, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                            <img src="{{ Storage::url($candidate->image_url) }}" alt="{{ $candidate->pasangan }}"
                                class="w-full h-64 object-cover">
                            <div class="p-6">
                                <h3 class="text-2xl font-semibold mb-2">Pasangan No Urut
                                    {{ $candidate->nomor_urut }}</h3>
                                <h3 class="text-2xl font-semibold mb-2">{{ $candidate->pasangan }}</h3>
                                <p class="text-gray-600 mb-4">Visi: {{ $candidate->visi }}</p>
                                <a href="{{ route('pairs.show', $candidate) }}"
                                    class="inline-block bg-primary text-white px-6 py-2 rounded-full font-semibold hover:bg-secondary transition duration-300">Profil
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


    <!-- Featured Candidates Section -->
    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 70%' } })">
                <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Random Kandidat Terkini</h2>
                <p class="mt-3 max-w-2xl mx-auto text-xs text-gray-500 sm:mt-4">Muat ulang halaman untuk melihat secara acak
                    kandidat lainnya</p>
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">Kenali calon pemimpin yang akan membangun
                    masa depan Bandung Raya dan Provinsi Jawa Barat</p>
            </div>
            <div class="mt-12 grid gap-16 lg:grid-cols-4 lg:max-w-none" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 70%' } })">
                @foreach ($featuredCandidates as $candidate)
                    <x-animations.fade-in delay="{{ $candidate->id * 200 }}">
                        <div
                            class="bg-white shadow-md rounded-lg overflow-hidden hover:shadow-lg transition-shadow duration-300 ease-in-out">
                            <div class="relative pb-72 overflow-auto">
                                <img class ="absolute inset-0 h-full w-full
                            object-cover"
                                    src="{{ Storage::url($candidate->foto) }}" alt="{{ $candidate->name }}">
                            </div>
                            <div class="p-4">
                                <h2 class="mt-2 mb-2 font-bold text-xl">{{ $candidate->name }}</h2>
                                <p class="text-sm text-gray-600 mb-2">Calon {{ $candidate->position }}
                                    {{ $candidate->region->name }}
                                </p>
                                <p class="text-sm text-primary font-semibold mb-4">{{ $candidate->partai }}</p>
                                <p class="text-sm text-gray-700 mb-4">{{ Str::limit($candidate->short_bio, 100) }}</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-semibold text-gray-600">{{ $candidate->region->full_name }}
                                    </span>

                                </div>
                            </div>


                        </div>
                    </x-animations.fade-in>
                @endforeach
            </div>
            <div class="mt-12 text-center">
                <a href="{{ route('candidates.index') }}"
                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-primary hover:bg-secondary">
                    Lihat Semua Kandidat
                </a>
            </div>
        </div>
    </div>

    <div class="bg-gradient-to-br from-primary to-secondary min-h-screen flex items-center justify-center rounded-3xl">
        <div x-data="{
            countdown: {
                days: 0,
                hours: 0,
                minutes: 0,
                seconds: 0
            },
            init() {
                this.countdown = this.calculateCountdown();
                setInterval(() => {
                    this.countdown = this.calculateCountdown();
                }, 1000);
            },
            calculateCountdown() {
                const pilkadaDate = new Date('November 27, 2024 00:00:00').getTime();
                const now = new Date().getTime();
                const distance = pilkadaDate - now;
        
                return {
                    days: Math.floor(distance / (1000 * 60 * 60 * 24)),
                    hours: Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
                    minutes: Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60)),
                    seconds: Math.floor((distance % (1000 * 60)) / 1000)
                };
            }
        }" class="text-center">
            <div class="mb-8 animate-float">
                <img src="{{ asset('logo.png') }}" alt="Logo Caripemimpin.id"
                    class="mx-auto rounded-full shadow-lg mb-4 w-3/4 lg:w-1/2">
                {{-- <h1 class="text-4xl font-bold text-white mb-2 tracking-wider">CARIPEMIMPIN.ID</h1> --}}
                <p class="text-xl text-blue-200">Menuju Pilkada Serentak 2024</p>
            </div>

            <div class="grid grid-cols-4 gap-4 max-w-4xl mx-auto p-6">
                <template
                    x-for="(value, unit) in [
                    { number: countdown.days, label: 'Hari' },
                    { number: countdown.hours, label: 'Jam' },
                    { number: countdown.minutes, label: 'Menit' },
                    { number: countdown.seconds, label: 'Detik' }
                ]">
                    <div class="flex flex-col items-center">
                        <div
                            class="bg-white bg-opacity-20 backdrop-blur-lg rounded-lg p-4 w-full hover:bg-opacity-30 transition-all duration-300 transform hover:scale-105">
                            <div class="text-4xl font-bold text-white mb-2"
                                x-text="value.number.toString().padStart(2, '0')"></div>
                            <div class="text-blue-200 text-sm uppercase tracking-wide" x-text="value.label"></div>
                        </div>
                    </div>
                </template>
            </div>

            <div class="mt-12 space-y-4">
                <p class="text-white text-xl animate-pulse">Mari Gunakan Hak Pilih Anda!</p>
                <div class="flex justify-center space-x-4">
                    <a href="{{ route('issues.index') }}" target="_blank" rel="noopener noreferrer"><button
                            class="bg-white hover:bg-primary text-primary hover:text-white font-bold px-6 py-2 rounded-full transition-all duration-300 transform hover:scale-105">
                            Info Isu
                        </button></a>
                    <a href="{{ route('kuis') }}" target="_blank" rel="noopener noreferrer"><button
                            class="bg-white hover:bg-secondary text-primary hover:text-white font-bold px-6 py-2 rounded-full transition-all duration-300 transform hover:scale-105">
                            Yuk Main Game
                        </button></a>
                </div>
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
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Pencarian Mudah</p>
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Temukan kandidat berdasarkan nama, atau daerah dengan mudah dan cepat.
                        </dd>
                    </div>

                    <div>
                        <dt>
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                                </svg>
                            </div>
                            <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Profil Lengkap</p>
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Lihat profil lengkap kandidat pasangan maupun kandidat perorang, termasuk visi, misi, dan data
                            lainnya.
                        </dd>
                    </div>

                    <div>
                        <dt>
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                            <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Perbandingan Kandidat</p>
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Bandingkan kandidat dari data yang tersedia untuk membantu Anda membuat keputusan yang tepat.
                        </dd>
                    </div>

                    <div>
                        <dt>
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-primary text-white">
                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Kuis Seru</p>
                        </dt>
                        <dd class="mt-2 text-base text-gray-500">
                            Ikuti Keseruan Games Kuis Wilayah untuk melihat seberapa wilayah kamu.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-4">Pemilihan Terdekat</h2>
                <ul class="space-y-4">
                    @foreach ($upcomingElections as $election)
                        <li>
                            <span class="font-semibold">{{ $election->region->name }}</span><br>
                            <span class="text-gray-600">{{ $election->position }}</span><br>
                            <span class="text-sm text-blue-600">{{ $election->date->format('d F Y') }}</span>
                        </li>
                    @endforeach
                </ul>
                <a href="{{ route('elections.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">Lihat semua
                    pemilihan</a>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-4">Kandidat Terpopuler</h2>
                <ul class="space-y-4">
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
                </ul>
                <a href="{{ route('candidates.index') }}" class="mt-4 inline-block text-blue-600 hover:underline">Lihat
                    semua kandidat</a>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-4">Statistik Pilkada</h2>
                <ul class="space-y-2">
                    <li>Total Wilayah: <span class="font-semibold">{{ $statistics['total_regions'] }}</span></li>
                    <li>Total Kandidat: <span class="font-semibold">{{ $statistics['total_candidates'] }}</span></li>
                    <li>Pemilih Terdaftar: <span
                            class="font-semibold">{{ number_format($statistics['total_voters']) }}</span></li>
                    <li>Partisipasi Pemilih: <span
                            class="font-semibold">{{ number_format($statistics['avg_turnout'], 2) }}%</span></li>
                </ul>
                <a href="{{ route('regions.statistics') }}" class="mt-4 inline-block text-blue-600 hover:underline">Lihat
                    statistik lengkap</a>
            </div>
        </div> --}}

        <div class="mb-12">
            <h2 class="text-3xl font-bold mb-6">Peta Wilayah Pilkada</h2>
            <div id="map" class="h-96 rounded-lg shadow-md"></div>
        </div>

        <div class="mb-12">
            {{-- <h2 class="text-3xl font-bold mb-6">Berita dan Pengumuman Terbaru</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6"> --}}
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
