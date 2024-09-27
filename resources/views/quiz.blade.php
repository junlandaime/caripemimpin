@extends('layouts.app')

@section('title', 'Beranda - Pilkada Jawa Barat')

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
@endpush

@section('content')
    <!-- Hero Section -->


    <x-animations.slide-in direction="right" class="mb-3">

        <section class="relative h-screen flex items-center bg-gray-900 overflow-hidden rounded-3xl">
            <div class="absolute inset-0 z-0">
                <img src="{{ asset('backuis.jpg') }}" alt="Background"
                    class="w-full h-full object-cover opacity-50 rounded-3xl">
            </div>
            <div
                class="relative z-10 container mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between">
                <div class="w-full md:w-1/2 text-white mb-8 md:mb-0" x-data="{ show: false }" x-init="setTimeout(() => show = true, 300)"
                    x-show="show" x-transition:enter="transition ease-out duration-1000"
                    x-transition:enter-start="opacity-0 transform -translate-x-12"
                    x-transition:enter-end="opacity-100 transform translate-x-0">
                    <h1 class="text-4xl md:text-6xl font-bold mb-4">Mari Bermain</h1>
                    <p class="text-xl mb-8">Tunjukan Seberapa Bandung Raya Kamu</p>
                    @foreach ($regions as $region)
                        <a href="{{ route('kuis.mulai', $region) }}"
                            class="bg-primary text-slate-200 px-8 py-3 rounded-full font-semibold hover:bg-secondary transition-colors duration-300 inline-block mb-3">Kuis
                            {{ $region->full_name }}</a>
                    @endforeach
                </div>
                <div class="w-full md:w-1/2 relative" x-data="{ show: false }" x-init="setTimeout(() => show = true, 600)">
                    <div class="w-40 h-40 md:w-80 md:h-80 bg-primary rounded-full absolute top-0 right-0 transform translate-x-1/3 -translate-y-1/3"
                        x-show="show" x-transition:enter="transition ease-out duration-1000"
                        x-transition:enter-start="opacity-0 transform scale-50"
                        x-transition:enter-end="opacity-100 transform scale-100"></div>
                    <img src="{{ asset('quiz.png') }}" alt="Featured Image"
                        class="md:w-full w-1/2 rounded-3xl shadow-2xl relative z-10" x-show="show"
                        x-transition:enter="transition ease-out duration-1000 delay-300"
                        x-transition:enter-start="opacity-0 transform translate-y-12"
                        x-transition:enter-end="opacity-100 transform translate-y-0">
                </div>
            </div>


        </section>

    </x-animations.slide-in>


    </div>
@endsection
