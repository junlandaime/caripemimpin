@extends('layouts.app')

@section('title', $pair->pasangan)

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

@section('meta_description')
    {{ Str::limit($pair->visi, 160) }}
@endsection

@section('og_title', $pair->pasangan . ' - Cari Pemimpin')

@section('og_description')
    {{ Str::limit($pair->visi, 200) }}
@endsection

@section('og_image', 'https://caripemimpin.id/storage/' . $pair->image_url)

@section('additional_meta_tags')

@endsection

@section('content')

    <main x-data="{ activeTab: 'jawabarat' }">
        <section id="hero" class=" text-primary flex items-center">
            <div class="container mx-auto px-4 text-center relative overflow-hidden">
                <h1 class="text-5xl md:text-7xl font-bold mb-6 opacity-0" x-init="gsap.to($el, { opacity: 1, duration: 1, y: 30, ease: 'back' })">
                    {{ $pair->pemimpin->name }} -
                    {{ $pair->wakil->name }}</h1>
                <p class="text-xl md:text-2xl mb-8 opacity-0" x-init="gsap.to($el, { opacity: 1, duration: 1, delay: 0.5, y: 30, ease: 'back' })">{{ $pair->visi }}
                </p>

                <div class="mx-auto h-full w-full max-w-4xl my-10">
                    <img src="{{ Storage::url($pair->image_url) }}" alt="Ilustrasi Pilkada"
                        class="w-full h-full rounded-t-3xl shadow-2xl ">
                </div>
            </div>
        </section>



        <section id="calon" class="py-32 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-16" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">Pasangan Calon</h2>
                <div class="mb-8 flex justify-center space-x-4" x-init="gsap.from($el.children, { opacity: 0, y: 30, duration: 0.6, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">


                </div>
                <div x-show="activeTab === 'jawabarat'" x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100" class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden text-center" x-init="gsap.from($el, { opacity: 0, x: -50, duration: 0.8, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                        <img src="{{ Storage::url($pair->pemimpin->foto) }}" alt="{{ $pair->pemimpin->name }}"
                            class="w-80 h-96 object-cover rounded-3xl mx-auto">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold mb-2">{{ $pair->pemimpin->name }}</h3>
                            <p class="text-gray-600 mb-4">Calon {{ $pair->pemimpin->position }} -
                                {{ $pair->pemimpin->partai }}</p>
                            <a href="{{ route('candidates.show', $pair->pemimpin) }}"
                                class="inline-block bg-blue-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-blue-700 transition duration-300">Profil
                                Lengkap</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden text-center" x-init="gsap.from($el, { opacity: 0, x: 50, duration: 0.8, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                        <img src="{{ Storage::url($pair->wakil->foto) }}" alt="{{ $pair->wakil->name }}"
                            class="w-80 h-96 object-cover rounded-3xl mx-auto">
                        <div class="p-6">
                            <h3 class="text-2xl font-semibold mb-2">{{ $pair->wakil->name }}</h3>
                            <p class="text-gray-600 mb-4">Calon {{ $pair->wakil->position }} - {{ $pair->wakil->partai }}
                            </p>
                            <a href="{{ route('candidates.show', $pair->wakil) }}"
                                class="inline-block bg-blue-600 text-white px-6 py-2 rounded-full font-semibold hover:bg-blue-700 transition duration-300">Profil
                                Lengkap</a>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="daerah" class="py-32 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-16" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">Visi Misi Calon Pasangan</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                    <div
                        class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <img src="https://picsum.photos/seed/jawabarat/400/250" alt="Visi"
                            class="w-full h-48 object-cover">
                        <div class="p-6 text-white">
                            <h3 class="text-2xl font-semibold mb-2">Visi</h3>
                            <p class="mb-4">{!! nl2br(e($pair->visi)) !!}</p>

                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-br from-green-500 to-green-600 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <img src="https://picsum.photos/seed/bandung/400/250" alt="Misi"
                            class="w-full h-48 object-cover">
                        <div class="p-6 text-white">
                            <h3 class="text-2xl font-semibold mb-2">Misi</h3>
                            <p class="mb-4">{!! nl2br(e($pair->misi)) !!}</p>

                        </div>
                    </div>
                    <div
                        class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition duration-300">
                        <img src="https://picsum.photos/seed/kabbandung/400/250" alt="Program"
                            class="w-full h-48 object-cover">
                        <div class="p-6 text-white">
                            <h3 class="text-2xl font-semibold mb-2">Program</h3>
                            <p class="mb-4">{{ $pair->program }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="timeline" class="py-32 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-16" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">Timeline Pilkada 2024</h2>
                <div class="relative" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-200"></div>
                    <div class="relative z-10 mb-16">
                        <div
                            class="bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center absolute left-1/2 transform -translate-x-1/2 -mt-6">
                            1</div>
                        <div class="bg-white p-6 rounded-lg shadow-lg ml-8 md:ml-0 md:w-1/2 md:transform md:-translate-x-8">
                            <h3 class="text-xl font-semibold mb-2">Pendaftaran Calon</h3>
                            <p class="text-gray-600">1 - 7 Agustus 2024</p>
                        </div>
                    </div>
                    <div class="relative z-10 mb-16">
                        <div
                            class="bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center absolute left-1/2 transform -translate-x-1/2 -mt-6">
                            2</div>
                        <div
                            class="bg-white p-6 rounded-lg shadow-lg mr-8 md:mr-0 md:w-1/2 md:transform md:translate-x-8 md:ml-auto">
                            <h3 class="text-xl font-semibold mb-2">Masa Kampanye</h3>
                            <p class="text-gray-600">14 Agustus - 13 November 2024</p>
                        </div>
                    </div>
                    <div class="relative z-10 mb-16">
                        <div
                            class="bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center absolute left-1/2 transform -translate-x-1/2 -mt-6">
                            3</div>
                        <div class="bg-white p-6 rounded-lg shadow-lg ml-8 md:ml-0 md:w-1/2 md:transform md:-translate-x-8">
                            <h3 class="text-xl font-semibold mb-2">Hari Pemungutan Suara</h3>
                            <p class="text-gray-600">27 November 2024</p>
                        </div>
                    </div>
                    <div class="relative z-10">
                        <div
                            class="bg-blue-600 text-white rounded-full w-12 h-12 flex items-center justify-center absolute left-1/2 transform -translate-x-1/2 -mt-6">
                            4</div>
                        <div
                            class="bg-white p-6 rounded-lg shadow-lg mr-8 md:mr-0 md:w-1/2 md:transform md:translate-x-8 md:ml-auto">
                            <h3 class="text-xl font-semibold mb-2">Pengumuman Hasil</h3>
                            <p class="text-gray-600">20 Desember 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="info-grafis" class="py-32 bg-gray-100">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-16" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">Infografis Pasangan</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                    <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                        <div class="text-4xl font-bold text-blue-600 mb-2">{{ count(explode(',', $pair->party)) }}</div>
                        <div class="text-xl font-semibold mb-2">Partai Pengusung</div>
                        <p class="text-gray-600">{{ $pair->party }}
                        </p>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                        <div class="text-4xl font-bold text-green-600 mb-2">
                            {{ count(explode('<br />', nl2br(e($pair->misi)))) - floor(count(explode('<br />', nl2br(e($pair->misi)))) / 2) }}
                        </div>
                        <div class="text-xl font-semibold mb-2">Misi Utama</div>
                        {{-- <p class="text-gray-600">{{ $pair->full_bio }}</p> --}}
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-6 text-center">
                        {{-- <div class="text-4xl font-bold text-purple-600 mb-2">10+</div> --}}
                        <div class="text-xl font-semibold mb-2">Program Unggulan</div>
                        <p class="text-gray-600">{{ $pair->program }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="edukasi" class="py-32 bg-primary text-white rounded-3xl">
            <div class="container mx-auto px-4">
                <h2 class="text-4xl font-bold text-center mb-16" x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1, scrollTrigger: { trigger: $el, start: 'top 80%' } })">Edukasi Pemilih</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8" x-init="gsap.from($el.children, { opacity: 0, y: 50, duration: 0.8, stagger: 0.2, scrollTrigger: { trigger: $el, start: 'top 80%' } })">
                    <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6">
                        <h3 class="text-2xl font-semibold mb-4">Cara Memilih yang Benar</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Pastikan nama Anda terdaftar sebagai pemilih</li>
                            <li>Datang ke TPS sesuai jadwal</li>
                            <li>Bawa KTP atau surat keterangan</li>
                            <li>Coblos/contreng satu pasangan calon</li>
                            <li>Masukkan surat suara ke kotak suara</li>
                        </ul>
                    </div>
                    <div class="bg-white text-gray-800 rounded-xl shadow-lg p-6">
                        <h3 class="text-2xl font-semibold mb-4">Tips Memilih Calon Berkualitas</h3>
                        <ul class="list-disc list-inside space-y-2">
                            <li>Pelajari visi, misi, dan program kerja</li>
                            <li>Cek latar belakang dan track record</li>
                            <li>Perhatikan integritas dan kepemimpinan</li>
                            <li>Evaluasi kemampuan menjawab isu daerah</li>
                            <li>Hindari memilih berdasarkan politik uang</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        gsap.registerPlugin(ScrollTrigger);
    </script>
    {{-- <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="p-6 md:p-8">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 mb-6 md:mb-0">
                        @if ($pair->image_url)
                            <img src="{{ Storage::url($pair->image_url) }}" alt="{{ $pair->name }}"
                                class="w-full h-auto rounded-lg shadow-md">
                        @else
                            <div class="w-full h-64 bg-gray-300 flex items-center justify-center rounded-lg">
                                <span class="text-gray-500 text-2xl">No Image</span>
                            </div>
                        @endif
                    </div>
                    <div class="md:w-2/3 md:pl-8">
                        <h1 class="text-3xl font-bold mb-2">{{ $pair->name }}</h1>
                        <p class="text-xl text-gray-600 mb-4">{{ $pair->position }} - {{ $pair->party }}</p>
                        <p class="text-gray-700 mb-4">{{ $pair->short_bio }}</p>
                        <div class="bg-blue-100 rounded-lg p-4 mb-6">
                            <h2 class="text-lg font-semibold text-blue-800 mb-2">Informasi Pemilihan</h2>
                            <p><strong>Wilayah:</strong> {{ $pair->region->name }}</p>
                            <p><strong>Tanggal Pemilihan:</strong> {{ $pair->election_date->format('d F Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">Biografi Lengkap</h2>
                    <div class="prose max-w-none">
                        {!! nl2br(e($pair->full_bio)) !!}
                    </div>
                </div>

                <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">Visi & Misi</h2>
                    <div class="bg-gray-100 rounded-lg p-6">
                        <h3 class="text-xl font-semibold mb-2">Visi</h3>
                        <p class="mb-4">{{ $pair->vision ?? 'Belum tersedia' }}</p>
                        <h3 class="text-xl font-semibold mb-2">Misi</h3>
                        @if ($pair->mission)
                            <ul class="list-disc pl-5">
                                @foreach (explode("\n", $pair->mission) as $missionItem)
                                    <li class="mb-2">{{ $missionItem }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>Belum tersedia</p>
                        @endif
                    </div>
                </div>

                <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">Program Unggulan</h2>
                    @if ($pair->key_programs)
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach (json_decode($pair->key_programs) as $program)
                                <div class="bg-white border border-gray-200 rounded-lg p-4 shadow-sm">
                                    <h3 class="text-lg font-semibold mb-2">{{ $program->title }}</h3>
                                    <p>{{ $program->description }}</p>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>Belum ada program unggulan yang ditambahkan.</p>
                    @endif
                </div>

                <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">Pengalaman & Pendidikan</h2>
                    <div class="space-y-4">
                        @if ($pair->experience)
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Pengalaman</h3>
                                <ul class="list-disc pl-5">
                                    @foreach (json_decode($pair->experience) as $exp)
                                        <li class="mb-2">
                                            <strong>{{ $exp->position }}</strong> di {{ $exp->organization }}
                                            ({{ $exp->start_year }} - {{ $exp->end_year ?? 'Sekarang' }})
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($pair->education)
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Pendidikan</h3>
                                <ul class="list-disc pl-5">
                                    @foreach (json_decode($pair->education) as $edu)
                                        <li class="mb-2">
                                            <strong>{{ $edu->degree }}</strong> dari {{ $edu->institution }}
                                            (Lulus: {{ $edu->graduation_year }})
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('pasangan.index') }}" class="btn btn-secondary">Kembali ke Daftar Kandidat</a>
        </div>
    </div> --}}
@endsection

@push('styles')
    <style>
        .prose img {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endpush
