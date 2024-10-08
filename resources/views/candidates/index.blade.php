@extends('layouts.app')

@section('title', 'Daftar Kandidat')

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

@section('content')
    <div class="container mx-auto px-4" x-data="{ activeTab: 'profil' }">

        <section class="bg-primary text-white py-20 rounded-xl mb-7">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6" x-data x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1 })">
                    Daftar Kandidat
                </h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.5 })">
                    Informasi lengkap seputar Daftar Kandidat Pilkada Bandung Raya dan Provinsi Jawa Barat periode 2024-2029
                </p>
            </div>
        </section>



        <div class="mb-6">
            <form action="{{ route('candidates.search') }}" method="GET" class="flex items-center">
                <input type="text" name="query" placeholder="Cari kandidat..." class="form-input flex-grow mr-2">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>

        @if (Route::is('candidates.search'))
            <p class="mb-4">Ditemukan {{ $candidates->total() }} hasil untuk pencarian "{{ $query }}"</p>
        @else
            <div class="mb-6">
                <label for="region-filter" class="block mb-2">Filter berdasarkan wilayah:</label>
                <select id="region-filter" name="region" class="form-input">
                    <option value="">Semua Wilayah</option>
                    @foreach ($regions as $region)
                        <option value="{{ $region->id }}" {{ request('region') == $region->id ? 'selected' : '' }}>
                            {{ $region->type }} {{ $region->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        @endif


        <div id="candidate-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:px-16">
            @foreach ($candidates as $candidate)
                <div class="candidate-card bg-white rounded-xl shadow-md overflow-hidden" x-data="candidateModal({{ $candidate->id }})">
                    <div class="relative pb-2/3">
                        <img class="w-48 h-64 rounded-3xl object-cover mx-auto mt-8" img
                            src="{{ Storage::url($candidate->foto) }}" alt="{{ $candidate->name }}">
                    </div>
                    <div class="p-6 mx-auto text-center">
                        <h4 class="text-xs text-blue-500 font-semibold mb-2">{{ $candidate->region->type }}
                            {{ $candidate->region->name }}</h4>
                        <h2 class="text-xl font-semibold mb-2 mx-auto">{{ $candidate->name }}</h2>
                        <p class="text-gray-600">Calon {{ $candidate->position }} </p>
                        {{-- <p class="text-sm mt-2">{{ Str::limit($candidate->short_bio, 100) }}</p> --}}
                        <div class="mt-4 flex justify-between items-center">
                            <button @click="openModal()"
                                class="bg-slate-200 hover:bg-slate-300 text-gray-400 font-semibold py-2 px-4 rounded mx-auto">
                                Lihat Profil
                            </button>
                            {{-- <span class="text-sm text-gray-500">
                                {{ $candidate->election_date->format('d M Y') }}
                            </span> --}}
                        </div>
                    </div>

                    <!-- Modal -->
                    <div x-show="isOpen" class="fixed inset-0 z-50 overflow-y-auto" style="display: none;">
                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div x-show="isOpen" x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0" class="fixed inset-0 transition-opacity"
                                aria-hidden="true">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>

                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                aria-hidden="true">&#8203;</span>

                            <div x-show="isOpen" x-transition:enter="ease-out duration-300"
                                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave="ease-in duration-200"
                                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-3xl sm:w-full">
                                <div class="flex">
                                    <!-- Left side: Image -->
                                    <div class="w-1/2">
                                        <img class="w-full h-full object-cover" src="{{ Storage::url($candidate->foto) }}"
                                            alt="{{ $candidate->name }}">
                                    </div>

                                    <!-- Right side: Text information -->
                                    <div class="w-1/2 bg-white p-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900"
                                            x-text="candidateData.name || 'Loading...'"></h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500"
                                                x-text="`${candidateData.position || ''} - ${candidateData.region || ''}`">
                                            </p>
                                            <p class="text-base text-blue-600" x-text="candidateData.partai || ''"></p>
                                            <p class="mt-2 text-sm text-gray-700"
                                                x-html="candidateData.karir || 'Loading candidate information...'">
                                            </p>
                                            {{-- <p class="mt-2 text-sm text-gray-500"
                                                x-text="`Election Date: ${candidateData.election_date || ''}`"></p> --}}
                                        </div>
                                        <div class="mt-4 flex justify-end">
                                            <a href="{{ route('candidates.show', $candidate->slug) }}" class="mr-2">
                                                <button
                                                    class="inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                                    Detail
                                                </button>
                                            </a>
                                            <button @click="closeModal()" type="button"
                                                class="inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">
                                                Tutup
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $candidates->links() }}
        </div>
        @if ($candidates->isEmpty() && Route::is('candidates.search'))
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-8" role="alert">
                <p class="font-bold">Tidak ada hasil</p>
                <p>Maaf, tidak ada calon yang cocok dengan kata kunci "{{ $query ? $query : '' }}". Silakan coba dengan
                    kata
                    kunci
                    lain.</p>
            </div>
        @elseif ($candidates->isEmpty())
            <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-8" role="alert">
                <p class="font-bold">Tidak ada hasil</p>
                <p>Maaf, tidak ada calon pada daerah tersebut.</p>
            </div>
        @endif
    </div>
@endsection

@push('scripts')
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

        // Script untuk filter wilayah realtime
        document.getElementById('region-filter').addEventListener('change', function() {
            this.form.submit();
        });
    </script>
@endpush
