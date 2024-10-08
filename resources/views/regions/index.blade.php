@extends('layouts.app')

@section('title', 'Daftar Wilayah')

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
    <div class="container mx-auto px-4 py-8" x-data="{
        activeTab: 'semua',
        daerahList: {{ Js::from($regions) }},
        filteredDaerah() {
            return this.activeTab === 'semua' ?
                this.daerahList :
                this.daerahList.filter(d => d.tipe === this.activeTab);
        }
    }">

        <section class="bg-primary text-white py-20 rounded-3xl">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6" x-data x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1 })">Daftar Daerah Pilkada</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.5 })">
                    Jelajahi informasi tentang daerah Bandung Raya dan Jawa Barat yang akan melaksanakan Pilkada pada tahun
                    2024
                </p>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-data x-init="gsap.from($el.children, { opacity: 0, y: 30, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                    <template x-for="daerah in filteredDaerah()" :key="daerah.id">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105">
                            <div class="p-6">
                                <h3 class="text-2xl font-semibold mb-2"
                                    x-text=" daerah.type.charAt(0).toUpperCase() + daerah.type.slice(1) + ' ' + daerah.name">
                                </h3>
                                {{-- <p class="text-gray-600 mb-4"
                                    x-text="daerah.type.charAt(0).toUpperCase() + daerah.type.slice(1)"></p> --}}
                                <div class="space-y-2">
                                    {{-- <p><span class="font-semibold">Jumlah Pemilih:</span> <span
                                            x-text="daerah.population.toLocaleString()"></span></p>
                                    <p><span class="font-semibold">Kursi Diperebutkan:</span> <span
                                            x-text="daerah.id"></span></p>
                                    <p><span class="font-semibold">Incumbent:</span> <span x-text="daerah.incumbent"></span>
                                    </p> --}}
                                </div>
                                <a :href="'/regions/' + daerah.slug"
                                    class="mt-4 inline-block bg-primary text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-900 transition duration-300">Detail</a>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>

    </div>
@endsection

@push('scripts')
    <script>
        // Script untuk implementasi peta bisa ditambahkan di sini
        // Misalnya menggunakan Leaflet.js atau Google Maps API
    </script>
@endpush
