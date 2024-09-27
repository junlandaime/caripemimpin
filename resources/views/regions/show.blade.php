@extends('layouts.app')

@section('title', $region->name)

@section('content')
    <div class="container mx-auto px-4 py-8" x-data="{ activeTab: 'profil' }">

        <section class="bg-primary text-white py-20 rounded-3xl">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6" x-data x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1 })">Pemilihan Pemimpin
                    {{ $region->name }}
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
                    {{ $region->name }} periode 2024-2029
                </p>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="mb-8 flex md:flex-row flex-col justify-center space-x-4" x-data x-init="gsap.from($el.children, { opacity: 0, y: 30, duration: 0.6, stagger: 0.2 })">
                    <button @click="activeTab = 'profil'"
                        :class="{ 'bg-primary text-white': activeTab === 'profil', 'bg-gray-200 text-gray-700': activeTab !== 'profil' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Profil
                        {{ $region->name }}</button>
                    <button @click="activeTab = 'kandidat'"
                        :class="{ 'bg-primary text-white': activeTab === 'kandidat', 'bg-gray-200 text-gray-700': activeTab !== 'kandidat' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Kandidat</button>
                    <button @click="activeTab = 'jadwal'"
                        :class="{ 'bg-primary text-white': activeTab === 'jadwal', 'bg-gray-200 text-gray-700': activeTab !== 'jadwal' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Jadwal</button>
                    <button @click="activeTab = 'statistik'"
                        :class="{ 'bg-primary text-white': activeTab === 'statistik', 'bg-gray-200 text-gray-700': activeTab !== 'statistik' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Statistik</button>
                </div>

                <div x-show="activeTab === 'profil'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="bg-gray-50 p-6 rounded-lg shadow-md">
                            <h2 class="text-2xl font-bold mb-4">Profil {{ $region->name }}</h2>
                            <ul class="space-y-2">
                                <li><strong>Ibu Kota:</strong> Bandung</li>
                                <li><strong>Luas Wilayah:</strong> 35.377,76 km²</li>
                                <li><strong>Jumlah Penduduk:</strong> 49.316.712 (2020)</li>
                                <li><strong>Kabupaten:</strong> 18</li>
                                <li><strong>Kota:</strong> 9</li>
                                <li><strong>Kecamatan:</strong> 627</li>
                                <li><strong>Desa/Kelurahan:</strong> 5.957</li>
                            </ul>
                        </div>
                        <div>
                            <img src="/api/placeholder/600/400" alt="Peta {{ $region->name }}"
                                class="w-full h-auto rounded-lg shadow-md">
                        </div>
                    </div>
                    <div class="mt-8">
                        <h3 class="text-xl font-bold mb-4">Sekilas {{ $region->name }}</h3>
                        <p class="text-gray-700">
                            {{ $region->name }} adalah sebuah provinsi di Indonesia yang terletak di Pulau Jawa. Provinsi
                            ini
                            memiliki peran penting dalam perekonomian dan budaya Indonesia. Dengan populasi yang besar dan
                            beragam, {{ $region->name }} memiliki tantangan dan potensi yang unik dalam pembangunan dan tata
                            kelola
                            pemerintahan.
                        </p>
                    </div>
                </div>

                <div x-show="activeTab === 'kandidat'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <h2 class="text-2xl font-bold mb-6 text-center">Kandidat Pemimpin dan Wakil Pemimpin {{ $region->name }}
                        2024
                    </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                        @forelse ($region->pairs as $candidate)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="{{ Storage::url($candidate->image_url) }}" alt="{{ $candidate->name }}"
                                    class="w-full h-48 object-cover">
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold mb-2">Pasangan {{ $candidate->name }}</h3>
                                    <p class="text-gray-600 mb-4">Nama Calon Pemimpin - Nama Calon Wakil Pemimpin</p>
                                    <a href="#" class="text-primary hover:underline">Lihat Profil Lengkap</a>
                                </div>
                            </div>
                        @empty
                            <p class="col-span-full text-center text-gray-500">Belum ada kandidat terdaftar untuk wilayah
                                ini.
                            </p>
                        @endforelse


                    </div>
                </div>

                <div x-show="activeTab === 'jadwal'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <h2 class="text-2xl font-bold mb-6 text-center">Jadwal Pemilihan Pemimpin {{ $region->name }} 2024</h2>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <ul class="space-y-4">
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    1</div>
                                <div>
                                    <h3 class="font-semibold">Pendaftaran Pasangan Calon</h3>
                                    <p class="text-gray-600">1 - 7 Agustus 2024</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    2</div>
                                <div>
                                    <h3 class="font-semibold">Masa Kampanye</h3>
                                    <p class="text-gray-600">14 Agustus - 13 November 2024</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    3</div>
                                <div>
                                    <h3 class="font-semibold">Masa Tenang</h3>
                                    <p class="text-gray-600">14 - 16 November 2024</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    4</div>
                                <div>
                                    <h3 class="font-semibold">Hari Pemungutan Suara</h3>
                                    <p class="text-gray-600">27 November 2024</p>
                                </div>
                            </li>
                            <li class="flex items-center">
                                <div
                                    class="bg-primary text-white rounded-full w-8 h-8 flex items-center justify-center mr-4">
                                    5</div>
                                <div>
                                    <h3 class="font-semibold">Pengumuman Hasil</h3>
                                    <p class="text-gray-600">20 Desember 2024</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div x-show="activeTab === 'statistik'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100">
                    <h2 class="text-2xl font-bold mb-6 text-center">Statistik Pemilih {{ $region->name }}</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div class="bg-white rounded-lg shadow-md p-6 text-center">
                            <h3 class="text-xl font-semibold mb-2">Total Pemilih Terdaftar</h3>
                            <p class="text-4xl font-bold text-primary">33.500.000</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6 text-center">
                            <h3 class="text-xl font-semibold mb-2">Pemilih Laki-laki</h3>
                            <p class="text-4xl font-bold text-green-600">16.750.000</p>
                        </div>
                        <div class="bg-white rounded-lg shadow-md p-6 text-center">
                            <h3 class="text-xl font-semibold mb-2">Pemilih Perempuan</h3>
                            <p class="text-4xl font-bold text-purple-600">16.750.000</p>
                        </div>
                    </div>
                    <div class="mt-8 bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-xl font-semibold mb-4">Distribusi Pemilih per Kabupaten/Kota</h3>
                        <div class="h-64 bg-gray-200 rounded-lg">
                            <!-- Di sini Anda dapat menambahkan grafik atau visualisasi data -->
                            <p class="text-center py-24">Grafik distribusi pemilih akan ditampilkan di sini</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mb-6">{{ $region->name }}</h1>

        <div class="bg-white shadow-xl rounded-lg overflow-hidden mb-8">
            <div class="p-6 md:p-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Informasi Umum</h2>
                        <p><strong>Tipe:</strong> {{ $region->type }}</p>
                        <p><strong>Populasi:</strong> {{ number_format($region->population) }} jiwa</p>
                        <p><strong>Luas Wilayah:</strong> {{ number_format($region->area, 2) }} km²</p>
                        {{-- <p><strong>Kepadatan Penduduk:</strong> {{ number_format($region->population / $region->area, 2) }}
                            jiwa/km²</p> --}}
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Statistik Pemilihan</h2>
                        <p><strong>Jumlah Kandidat:</strong> {{ $region->candidates->count() }}</p>
                        {{-- <p><strong>Pemilihan Akan Datang:</strong> {{ $upcomingElections->count() }}</p> --}}
                        <p><strong>Total Pemilih Terdaftar:</strong> {{ number_format($region->registered_voters) }}</p>
                        <p><strong>Partisipasi Pemilih Terakhir:</strong>
                            {{ number_format($region->last_election_turnout, 2) }}%</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Deskripsi Wilayah</h2>
            <div class="bg-white shadow-md rounded-lg p-6">
                <p class="text-gray-700">{{ $region->description }}</p>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Peta Wilayah</h2>
            <div class="bg-white shadow-md rounded-lg p-6">
                <div id="map" class="h-96"></div>
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Kandidat</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse ($region->candidates as $candidate)
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $candidate->name }}</h3>
                            <p class="text-gray-600 mb-4">{{ $candidate->party }}</p>
                            <p class="text-sm text-gray-500 mb-4">{{ Str::limit($candidate->short_bio, 100) }}</p>
                            <a href="{{ route('candidates.show', $candidate) }}"
                                class="btn btn-primary block text-center">Lihat Profil</a>
                        </div>
                    </div>
                @empty
                    <p class="col-span-full text-center text-gray-500">Belum ada kandidat terdaftar untuk wilayah ini.</p>
                @endforelse
            </div>
        </div>

        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Pemilihan Akan Datang</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-3 px-4 text-left">Tanggal</th>
                            <th class="py-3 px-4 text-left">Posisi</th>
                            <th class="py-3 px-4 text-left">Jumlah Kandidat</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @forelse ($upcomingElections as $election)
                            <tr>
                                <td class="py-3 px-4">{{ $election->date->format('d F Y') }}</td>
                                <td class="py-3 px-4">{{ $election->position }}</td>
                                <td class="py-3 px-4">{{ $election->candidates_count }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="py-3 px-4 text-center text-gray-500">Tidak ada pemilihan yang
                                    akan
                                    datang.</td>
                            </tr>
                        @endforelse --}}
                    </tbody>
                </table>
            </div>
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
                .bindPopup('{{ $region->name }}')
                .openPopup();
        });
    </script>
@endpush
