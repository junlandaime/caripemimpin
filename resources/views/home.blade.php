@extends('layouts.app')

@section('title', 'caripemimpin - Informasi Calon Pemimpin Jawa Barat')

@section('content')
    <!-- Breadcrumb -->
    <nav class="text-sm mb-6" aria-label="Breadcrumb">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="#" class="text-gray-600 hover:text-primary">Beranda</a>
                <svg class="fill-current w-3 h-3 mx-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path
                        d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                </svg>
            </li>
            <li class="flex items-center">
                <span class="text-gray-800">Daftar Calon</span>
            </li>
        </ol>
    </nav>

    <!-- Hero Section with Search -->
    <section class="bg-primary text-white rounded-lg p-8 mb-12">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Temukan Calon Pemimpin Anda</h1>
        <p class="text-xl mb-8">Informasi lengkap tentang calon pemimpin di Jawa Barat untuk generasi muda dan pemilih
            pemula.</p>
        <div class="relative" x-data="{ search: '' }">
            <input x-model="search" type="text" placeholder="Cari nama calon atau daerah..."
                class="w-full px-4 py-2 rounded-full text-gray-800 focus:outline-none focus:ring-2 focus:ring-secondary">
            <button
                class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-secondary text-white px-4 py-1 rounded-full hover:bg-opacity-80 transition-colors"
                @click="alert('Pencarian: ' + search)">
                Cari
            </button>
        </div>
    </section>

    <!-- Daftar Calon -->
    <section x-data="{ activeTab: 'semua' }" class="bg-white rounded-lg shadow-md p-6 mb-12">
        <h2 class="text-2xl font-bold mb-6">Daftar Calon Pemimpin</h2>

        <!-- Tab Navigation -->
        <div class="flex space-x-4 mb-6 overflow-x-auto">
            <button @click="activeTab = 'semua'"
                :class="{ 'bg-primary text-white': activeTab === 'semua', 'bg-gray-200 text-gray-700': activeTab !== 'semua' }"
                class="px-4 py-2 rounded-full font-medium focus:outline-none transition-colors">
                Semua
            </button>
            <button @click="activeTab = 'walikota'"
                :class="{ 'bg-primary text-white': activeTab === 'walikota', 'bg-gray-200 text-gray-700': activeTab !== 'walikota' }"
                class="px-4 py-2 rounded-full font-medium focus:outline-none transition-colors">
                Walikota
            </button>
            <button @click="activeTab = 'bupati'"
                :class="{ 'bg-primary text-white': activeTab === 'bupati', 'bg-gray-200 text-gray-700': activeTab !== 'bupati' }"
                class="px-4 py-2 rounded-full font-medium focus:outline-none transition-colors">
                Bupati
            </button>
        </div>

        <!-- Daftar Calon -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Calon 1 -->
            <div class="bg-gray-50 rounded-lg p-4 hover:shadow-md transition-shadow">
                <img src="https://picsum.photos/seed/calon1/300/200" alt="Calon 1"
                    class="w-full h-40 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">Budi Setiawan</h3>
                <p class="text-gray-600 mb-2">Calon Walikota Bandung</p>
                <a href="#" class="text-primary hover:underline">Lihat Profil</a>
            </div>
            <!-- Tambahkan calon lainnya di sini -->
        </div>
    </section>

    <!-- Tambahkan bagian Infografis dan Timeline di sini -->
@endsection
