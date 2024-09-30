@extends('layouts.app')

@section('title', $region->full_name)

@section('content')
    <div class="container mx-auto px-4 py-8" x-data="{ activeTab: 'profil' }">

        <section class="bg-primary text-white py-20 rounded-3xl">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6" x-data x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1 })">Pemilihan Pemimpin
                    {{ $region->full_name }}
                    2024</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.5 })">
                    Informasi lengkap seputar pemilihan
                    @php
                        switch ($region->type) {
                            case 'Kabupaten':
                                echo 'Bupati dan Wakil Bupati';
                                break;

                            case 'Kota':
                                echo 'Walikota dan Wakil Walikota';
                                break;

                            default:
                                echo 'Gubernur dan Wakil Gubernur';
                                break;
                        }
                    @endphp
                    {{ $region->full_name }} periode 2024-2029
                </p>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="mb-8 flex md:flex-row flex-col justify-center space-x-4" x-data x-init="gsap.from($el.children, { opacity: 0, y: 30, duration: 0.6, stagger: 0.2 })">
                    <button @click="activeTab = 'profil'"
                        :class="{ 'bg-primary text-white': activeTab === 'profil', 'bg-gray-200 text-gray-700': activeTab !== 'profil' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Profil
                        {{ $region->full_name }}</button>
                    <button @click="activeTab = 'kandidatpasangan'"
                        :class="{ 'bg-primary text-white': activeTab === 'kandidatpasangan', 'bg-gray-200 text-gray-700': activeTab !== 'kandidatpasangan' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Kandidat Pasangan</button>
                    <button @click="activeTab = 'kandidat'"
                        :class="{ 'bg-primary text-white': activeTab === 'kandidat', 'bg-gray-200 text-gray-700': activeTab !== 'kandidat' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Kandidat Perorangan</button>
                    <button @click="activeTab = 'jadwal'"
                        :class="{ 'bg-primary text-white': activeTab === 'jadwal', 'bg-gray-200 text-gray-700': activeTab !== 'jadwal' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Fakta Lainnya</button>
                    <button @click="activeTab = 'statistik'"
                        :class="{ 'bg-primary text-white': activeTab === 'statistik', 'bg-gray-200 text-gray-700': activeTab !== 'statistik' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Data Kepemimpinan Saat
                        Ini</button>
                </div>

                <div x-show="activeTab === 'profil'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                            <h2 class="text-2xl font-bold mb-4">Profil {{ $region->full_name }}</h2>
                            <a class="text-xs text-blue-700 pb-5 block" href="{{ $region->situs }}" target="_blank">Situs
                                Resmi
                                {{ $region->full_name }}</a>
                            <ul class="space-y-2">
                                <li><strong>Ibu Kota:</strong> {{ $region->ibukota }}</li>
                                <li><strong>Luas Wilayah:</strong> {{ $region->luasdaerah }}</li>
                                <li><strong>Kepadatan Penduduk:</strong> 5.{{ $region->kepadatanpop }}</li>
                                <li><strong>Jumlah Penduduk:</strong> {{ $region->totalpopulasi }}</li>
                                <p><strong>Jumlah Kandidat:</strong> {{ $region->candidates->count() }}</p>
                                <li><strong>Motto:</strong> {{ $region->motto }}</li>
                                <li><strong>Semboyan:</strong> {{ $region->semboyan }}</li>
                                <li><strong>Hari Jadi:</strong> {{ $region->harjad }}</li>
                                <li class="mt-8">
                                    <h3 class="font-bold">Julukan {{ $region->full_name }}</h3>
                                    <p class="text-gray-700">
                                        {!! nl2br(e($region->julukan)) !!}
                                    </p>
                                </li>
                                <li class="mt-8">
                                    <h3 class="font-bold">Agama di {{ $region->full_name }}</h3>
                                    <p class="text-gray-700">
                                        {!! nl2br(e($region->agama)) !!}
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="flex justify-center items-center">
                            <img src="{{ Storage::url($region->bendera) }}" alt="Bendera {{ $region->full_name }}"
                                class="rounded-lg shadow-md mx-10">
                            <img src="{{ Storage::url($region->lambang) }}" alt="Lambang {{ $region->full_name }}"
                                class="rounded-lg shadow-md mx-10">
                        </div>
                    </div>

                </div>

                <div x-show="activeTab === 'kandidatpasangan'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <h2 class="text-2xl font-bold mb-6 text-center">Kandidat Pemimpin dan Wakil Pemimpin
                        {{ $region->full_name }}
                        2024
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                        @forelse ($region->pairs as $candidate)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="{{ Storage::url($candidate->image_url) }}" alt="{{ $candidate->nomor_urut }}"
                                    class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold mb-2">Pasangan Nomor Urut {{ $candidate->nomor_urut }}
                                    </h3>
                                    <p class="text-gray-600 mb-4">{{ $candidate->pemimpin->name }} -
                                        {{ $candidate->wakil->name }}</p>
                                    <a href="{{ route('pairs.show', $candidate) }}"
                                        class="text-primary hover:underline">Lihat Profil Lengkap</a>
                                </div>
                            </div>
                        @empty
                            <p class="col-span-full text-center text-gray-500">Belum ada kandidat terdaftar untuk wilayah
                                ini.
                            </p>
                        @endforelse


                    </div>
                </div>

                <div x-show="activeTab === 'kandidat'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <h2 class="text-2xl font-bold mb-4">Kandidat</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        @forelse ($region->candidates as $candidate)
                            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold mb-2">{{ $candidate->name }}</h3>
                                    <p class="text-gray-600 text-xs mb-4">{{ $candidate->partai }}</p>
                                    <p class="text-xs text-gray-500 mb-4">Calon {{ Str::limit($candidate->position, 100) }}
                                    </p>
                                    <a href="{{ route('candidates.show', $candidate) }}"
                                        class="btn btn-primary block text-center">Lihat Profil</a>
                                </div>
                            </div>
                        @empty
                            <p class="col-span-full text-center text-gray-500">Belum ada kandidat terdaftar untuk wilayah
                                ini.</p>
                        @endforelse
                    </div>
                </div>

                <div x-show="activeTab === 'jadwal'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <h2 class="text-2xl font-bold mb-6 text-center">Fakta lainnya {{ $region->full_name }}
                    </h2>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    1</div>
                                <div>
                                    <h3 class="font-semibold">Bahasa</h3>
                                    <p class="text-gray-600">{!! nl2br(e($region->bahasa)) !!}</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    2</div>
                                <div>
                                    <h3 class="font-semibold">IPM</h3>
                                    <p class="text-gray-600">{{ $region->ipm }}</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    3</div>
                                <div>
                                    <h3 class="font-semibold">Zona Waktu</h3>
                                    <p class="text-gray-600">{{ $region->zonwak }}</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    4</div>
                                <div>
                                    <h3 class="font-semibold">Kode POS</h3>
                                    <p class="text-gray-600">{{ $region->kodepos }}</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    5</div>
                                <div>
                                    <h3 class="font-semibold">Pelat Kendaraan</h3>
                                    <p class="text-gray-600">{{ $region->pelatken }}</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    6</div>
                                <div>
                                    <h3 class="font-semibold">APBD</h3>
                                    <p class="text-gray-600">{{ $region->apbd }}</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    7</div>
                                <div>
                                    <h3 class="font-semibold">DAU</h3>
                                    <p class="text-gray-600">{{ $region->dau }}</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    8</div>
                                <div>
                                    <h3 class="font-semibold">Lagu Daerah</h3>
                                    <p class="text-gray-600">{{ $region->lagudaerah }}</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    9</div>
                                <div>
                                    <h3 class="font-semibold">Rumah Adat</h3>
                                    <p class="text-gray-600">{{ $region->rumahadat }}</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    10</div>
                                <div>
                                    <h3 class="font-semibold">Senjata Tradisional</h3>
                                    <p class="text-gray-600">{{ $region->senjata }}</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    11</div>
                                <div>
                                    <h3 class="font-semibold">Flora Resmi</h3>
                                    <p class="text-gray-600">{{ $region->flora }}</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    12</div>
                                <div>
                                    <h3 class="font-semibold">Fauna Resmi</h3>
                                    <p class="text-gray-600">{{ $region->fauna }}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div x-show="activeTab === 'statistik'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <h2 class="text-2xl font-bold mb-6 text-center">Data kepemimpinan {{ $region->full_name }}</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="bg-white rounded-lg shadow-md p-6 text-center">
                            <h3 class="text-xl font-semibold mb-2">Kepada Daerah</h3>
                            <p class="text-4xl font-bold text-primary">{{ $region->kepdar }}</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6 text-center">
                            <h3 class="text-xl font-semibold mb-2">Wakil Kepala Daerah</h3>
                            <p class="text-4xl font-bold text-green-600">{{ $region->wakepdar }}</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6 text-center">
                            <h3 class="text-xl font-semibold mb-2">Sekretaris Daerah</h3>
                            <p class="text-4xl font-bold text-purple-600">{{ $region->sekda }}</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6 text-center">
                            <h3 class="text-xl font-semibold mb-2">Ketua DPRD</h3>
                            <p class="text-4xl font-bold text-purple-600">{{ $region->ketdprd }}</p>
                        </div>
                    </div>
                    {{-- <div class="mt-8 bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold mb-4">Distribusi Pemilih per Kabupaten/Kota</h3>
                        <div class="h-64 bg-gray-200 rounded-lg">
                            <!-- Di sini Anda dapat menambahkan grafik atau visualisasi data -->
                            <p class="text-center py-24">Grafik distribusi pemilih akan ditampilkan di sini</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>





        <div class="m-8">
            <h2 class="text-2xl font-bold mb-4">Peta Wilayah</h2>
            <div class="bg-white shadow-md rounded-lg p-6">
                <div id="map" class="h-96"></div>
            </div>
        </div>

        <div class="mb-8">

        </div>


        <div class="text-center mt-8">
            <a href="{{ route('regions.index') }}" class="btn btn-secondary">Kembali ke Daftar Wilayah</a>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([{{ $region->latitude }}, {{ $region->longitude }}], 10);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
            L.marker([{{ $region->latitude }}, {{ $region->longitude }}]).addTo(map)
                .bindPopup('{{ $region->full_name }}')
                .openPopup();
        });
    </script>
@endpush
