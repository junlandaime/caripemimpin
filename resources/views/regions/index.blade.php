@extends('layouts.app')

@section('title', 'Daftar Wilayah')

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

        <section class="bg-gradient-to-br from-blue-600 to-purple-600 text-white py-20 rounded-full">
            <div class="container mx-auto px-4 text-center">
                <h1 class="text-5xl md:text-6xl font-bold mb-6" x-data x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1 })">Daftar Daerah Pilkada</h1>
                <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.5 })">
                    Jelajahi informasi tentang daerah-daerah yang akan melaksanakan Pilkada di Jawa Barat pada tahun 2024
                </p>
            </div>
        </section>

        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                {{-- <div class="mb-8 flex justify-center space-x-4" x-data x-init="gsap.from($el.children, { opacity: 0, y: 30, duration: 0.6, stagger: 0.2 })">
                    <button @click="activeTab = 'semua'"
                        :class="{ 'bg-blue-600 text-white': activeTab === 'semua', 'bg-gray-200 text-gray-700': activeTab !== 'semua' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Semua</button>

                    <button @click="activeTab = 'provinsi'"
                        :class="{ 'bg-blue-600 text-white': activeTab === 'provinsi', 'bg-gray-200 text-gray-700': activeTab !== 'provinsi' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Provinsi</button>
                    <button @click="activeTab = 'kota'"
                        :class="{ 'bg-blue-600 text-white': activeTab === 'kota', 'bg-gray-200 text-gray-700': activeTab !== 'kota' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Kota</button>
                    <button @click="activeTab = 'kabupaten'"
                        :class="{ 'bg-blue-600 text-white': activeTab === 'kabupaten', 'bg-gray-200 text-gray-700': activeTab !== 'kabupaten' }"
                        class="px-6 py-2 rounded-full font-semibold transition duration-300">Kabupaten</button>
                </div> --}}

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-data x-init="gsap.from($el.children, { opacity: 0, y: 30, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                    <template x-for="daerah in filteredDaerah()" :key="daerah.id">
                        <div
                            class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 transform hover:scale-105">
                            <div class="p-6">
                                <h3 class="text-2xl font-semibold mb-2"
                                    x-text=" daerah.type.charAt(0).toUpperCase() + daerah.type.slice(1) + ' ' + daerah.name">
                                </h3>
                                <p class="text-gray-600 mb-4"
                                    x-text="daerah.type.charAt(0).toUpperCase() + daerah.type.slice(1)"></p>
                                <div class="space-y-2">
                                    <p><span class="font-semibold">Jumlah Pemilih:</span> <span
                                            x-text="daerah.population.toLocaleString()"></span></p>
                                    <p><span class="font-semibold">Kursi Diperebutkan:</span> <span
                                            x-text="daerah.id"></span></p>
                                    <p><span class="font-semibold">Incumbent:</span> <span x-text="daerah.incumbent"></span>
                                    </p>
                                </div>
                                <a :href="'/regions/' + daerah.id"
                                    class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-full font-semibold hover:bg-blue-700 transition duration-300">Detail</a>
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
