@extends('layouts.app')

@section('title', $candidate->name)

@section('meta_description')
    {{ Str::limit($candidate->karir, 160) }}
@endsection

@section('og_title', $candidate->name . ' - Cari Pemimpin')

@section('og_description')
    {{ Str::limit($candidate->karir, 200) }}
@endsection

@section('og_image', 'https://caripemimpin.id/storage/' . $candidate->foto)

@section('additional_meta_tags')

@endsection

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="p-6 md:p-8">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-1/3 mb-6 md:mb-0">
                        @if ($candidate->foto)
                            <img src="{{ Storage::url($candidate->foto) }}" alt="{{ $candidate->name }}"
                                class="w-full h-auto rounded-lg shadow-md">
                        @else
                            <div class="w-full h-64 bg-gray-300 flex items-center justify-center rounded-lg">
                                <span class="text-gray-500 text-2xl">No Image</span>
                            </div>
                        @endif
                    </div>
                    <div class="md:w-2/3 md:pl-8">
                        <h1 class="text-3xl font-bold mb-2">{{ $candidate->full_name }}</h1>
                        <p class="text-xl text-gray-600 mb-4">Calon {{ $candidate->position }} - {{ $candidate->partai }}
                        </p>
                        <p class="text-gray-700 mb-4">Tempat, Tanggal Lahir : {{ $candidate->ttl }}</p>
                        <p class="text-gray-700 mb-4">Domisili : {{ $candidate->domisili }}</p>
                        <p class="text-gray-700 mb-4">Agama : {{ $candidate->agama }}</p>
                        <div class="bg-blue-100 rounded-lg p-4 mb-6">
                            <h2 class="text-lg font-semibold text-blue-800 mb-2">Informasi Pemilihan</h2>
                            <p><strong>Wilayah:</strong> {{ $candidate->region->name }}</p>
                            <p><strong>Media Sosial:</strong> {{ $candidate->akun }}</p>
                            {{-- <p><strong>Tanggal Pemilihan:</strong> {{ $candidate->election_date->format('d F Y') }}</p> --}}
                        </div>
                        <div class="bg-white rounded-lg shadow-md overflow-hidden w-1/2">
                            <img src="{{ Storage::url($candidate->pasanganWakil ? $candidate->pasanganWakil->image_url : $candidate->pasanganKetua->image_url) }}"
                                alt="{{ $candidate->pasanganWakil ? $candidate->pasanganWakil->nomor_urut : $candidate->pasanganKetuanomor_urut }}"
                                class="w-full h-full object-cover">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-2">Pasangan Nomor Urut
                                    {{ $candidate->pasanganWakil ? $candidate->pasanganWakil->nomor_urut : $candidate->pasanganKetua->nomor_urut }}
                                </h3>
                                <p class="text-gray-600 mb-4">{{ $candidate->region->full_name }}</p>
                                <a href="{{ route('pairs.show', $candidate->pasanganWakil ? $candidate->pasanganWakil : $candidate->pasanganKetua) }}"
                                    class="text-primary hover:underline">Lihat
                                    Profil Lengkap</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="md:-mt-20">
                    <h2 class="text-2xl font-bold mb-4">Riwayat Pendidikan</h2>
                    <div class="prose max-w-none">
                        {!! $candidate->riwayatpen ? nl2br(e($candidate->riwayatpen)) : 'Data Belum Tersedia' !!}
                    </div>
                </div>
                <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">Prestasi</h2>
                    <div class="prose max-w-none">
                        {!! $candidate->prestasi ? nl2br(e($candidate->prestasi)) : 'Data Belum Tersedia' !!}
                    </div>
                </div>
                <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">Karir</h2>
                    <div class="prose max-w-none">
                        {!! $candidate->karir ? nl2br(e($candidate->karir)) : 'Data Belum Tersedia' !!}
                    </div>
                </div>


                {{-- <div class="mt-8">
                    <h2 class="text-2xl font-bold mb-4">Pengalaman & Pendidikan</h2>
                    <div class="space-y-4">
                        @if ($candidate->experience)
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Pengalaman</h3>
                                <ul class="list-disc pl-5">
                                    @foreach (json_decode($candidate->experience) as $exp)
                                        <li class="mb-2">
                                            <strong>{{ $exp->position }}</strong> di {{ $exp->organization }}
                                            ({{ $exp->start_year }} - {{ $exp->end_year ?? 'Sekarang' }})
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if ($candidate->education)
                            <div>
                                <h3 class="text-xl font-semibold mb-2">Pendidikan</h3>
                                <ul class="list-disc pl-5">
                                    @foreach (json_decode($candidate->education) as $edu)
                                        <li class="mb-2">
                                            <strong>{{ $edu->degree }}</strong> dari {{ $edu->institution }}
                                            (Lulus: {{ $edu->graduation_year }})
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('candidates.index') }}" class="btn btn-secondary">Kembali ke Daftar Kandidat</a>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .prose img {
            margin-left: auto;
            margin-right: auto;
        }
    </style>
@endpush
