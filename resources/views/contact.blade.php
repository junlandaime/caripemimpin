@extends('layouts.app')

@section('title', 'Hubungi Kami - Pilkada Jawa Barat')

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
    <section class="bg-primary text-white py-20 rounded-3xl">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6" x-data x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1 })">Hubungi Kami</h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.5 })">
                Kami siap mendengar pertanyaan, saran, atau masukan Anda
            </p>
        </div>
    </section>

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h2 class="text-2xl font-bold mb-6">Kirim Pesan</h2>
                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-bold mb-2">Nama</label>
                        <input type="text" id="name" name="name" class="form-input w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="form-input w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="subject" class="block text-gray-700 font-bold mb-2">Subjek</label>
                        <input type="text" id="subject" name="subject" class="form-input w-full" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-gray-700 font-bold mb-2">Pesan</label>
                        <textarea id="message" name="message" rows="5" class="form-textarea w-full" required></textarea>
                    </div>
                    <a id="startcon" href="#" onclick="gettogetInputValue()"
                        class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition duration-300">Kirim
                        Pesan</a>
                </form>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-6">Informasi Kontak</h2>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 mt-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <div>
                            <h3 class="font-semibold">Alamat</h3>
                            <p>Jl. Ganesha No. 7, Bandung, Jawa Barat 40132</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 mt-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                            </path>
                        </svg>
                        <div>
                            <h3 class="font-semibold">Telepon</h3>
                            <p>WA (+62) 816-619-469 </p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 mt-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <div>
                            <h3 class="font-semibold">Email</h3>
                            <p>info@caripemimpin.id</p>
                        </div>
                    </div>
                </div>

                {{-- <h2 class="text-2xl font-bold mt-12 mb-6">Jam Operasional</h2>
                <ul class="space-y-2">
                    <li><span class="font-semibold">Senin - Jumat:</span> 08:00 - 17:00</li>
                    <li><span class="font-semibold">Sabtu:</span> 09:00 - 14:00</li>
                    <li><span class="font-semibold">Minggu:</span> Tutup</li>
                </ul> --}}

                <h2 class="text-2xl font-bold mt-12 mb-6">Lokasi Kami</h2>
                <div id="map" class="h-64 rounded-lg shadow-md"></div>
            </div>
        </div>
    </div>

    <a href="https://api.whatsapp.com/send?phone=62816619469&text=Hello%20admin%20Caripemimpin.id,%20Saya%20ingin%20bertanya%20terkait%20gerakan%20ini"
        target="_blank"
        class="fixed bottom-6 right-6 bg-green-500 text-white p-3 rounded-full shadow-lg hover:bg-green-600 transition duration-300">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>
@endsection

@push('scripts')
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([-6.894093, 107.611294], 15);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            L.marker([-6.894093, 107.611294]).addTo(map)
                .bindPopup('Caripemimpin.id')
                .openPopup();
        });
    </script>

    <script>
        function gettogetInputValue() {
            let inputName = document.getElementById("name").value;
            let inputTopik = document.getElementById("subject").value;
            let email = document.getElementById("email").value;
            let inputMessage = document.getElementById("message").value;
            let tombol = document.getElementById('startcon')
            let hrefAwal =
                `https://wa.me/62816619469?text=_Assalamualaikum_%20*Admin%20Caripemimpin.id*%0A%0APerkenalkan%20saya%20${inputName}%0A%0AIngin%20bertanya%20terkait%20perihal%20${inputTopik}%0AJika%20ada%20file%20yang%20bisa%20di%20kirimkan%20ke%20email%20saya%20${email}%0A%0Apesan%20tambahan%3A%0A${inputMessage}%0A%0AHatur%20Nuhun%20sebelumnya%20Admin%0AWassalamualaikum`
            tombol.href = hrefAwal
        }
    </script>
@endpush
