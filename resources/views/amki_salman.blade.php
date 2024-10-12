@extends('layouts.app')

@section('title', 'Profil AMKI & Masjid Salman ITB')

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
    <!-- Hero Section -->

    <section class="bg-primary text-white rounded-3xl py-20" x-data>
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6" x-data x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1 })">
                Profil Organisasi
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.5 })">
                Mengenal Lebih Dekat AMKI dan Masjid Salman ITB
            </p>
        </div>
    </section>

    <section x-data="{ activeTab: 'amki' }">
        <!-- Navigation Tabs -->
        <div class="bg-white shadow-sm sticky top-0 z-50">
            <div class="container mx-auto px-4">
                <div class="flex space-x-4">
                    <button @click="activeTab = 'amki'"
                        :class="{ 'border-b-2 border-primary text-primary': activeTab === 'amki' }"
                        class="py-4 px-6 font-semibold hover:text-primary transition-colors">
                        AMKI
                    </button>
                    <button @click="activeTab = 'salman'"
                        :class="{ 'border-b-2 border-primary text-primary': activeTab === 'salman' }"
                        class="py-4 px-6 font-semibold hover:text-primary transition-colors">
                        Masjid Salman ITB
                    </button>
                </div>
            </div>
        </div>

        <div class="container mx-auto px-4 py-12">
            <!-- AMKI Section -->
            <div x-show="activeTab === 'amki'" x-transition>
                <div class="max-w-4xl mx-auto">
                    <!-- Header -->
                    <div class="mb-12 text-center">
                        <h2 class="text-4xl font-bold mb-4">AMKI</h2>
                        <p class="text-xl text-gray-600">Asosiasi Masjid Kampus Indonesia</p>
                    </div>

                    <!-- History -->
                    <div class="mb-16 bg-white rounded-xl shadow-sm p-8">
                        <h3 class="text-2xl font-bold mb-6 text-primary">Sejarah dan Latar Belakang</h3>
                        <div class="prose prose-lg max-w-none">
                            <p>
                                AMKI lahir dari semangat para pengurus masjid kampus untuk menjadikan masjid sebagai pusat
                                pembinaan dan pemberdayaan umat. Pada tahun 2004, melalui sebuah kongres yang melibatkan 85
                                perwakilan masjid kampus seluruh Indonesia, AMKI resmi dibentuk untuk mengoptimalkan peran
                                masjid kampus dalam membangun peradaban Islami di kalangan mahasiswa.
                            </p>
                        </div>
                    </div>

                    <!-- Vision & Mission -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                        <div class="bg-white rounded-xl shadow-sm p-8">
                            <h3 class="text-2xl font-bold mb-6 text-primary">Visi</h3>
                            <p class="text-gray-700">
                                Menjadikan masjid kampus sebagai pusat pendidikan karakter calon pemimpin bangsa guna
                                mewujudkan negara yang kuat, bermartabat, dan berfungsi sebagai rahmat bagi semesta alam.
                            </p>
                        </div>
                        <div class="bg-white rounded-xl shadow-sm p-8">
                            <h3 class="text-2xl font-bold mb-6 text-primary">Misi</h3>
                            <ul class="space-y-4 text-gray-700">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                    <span>Meningkatkan peran masjid kampus dalam pemberdayaan masyarakat dan pembangunan
                                        peradaban Islam.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                    <span>Membangun jaringan kerja sama pendidikan karakter untuk menciptakan pemimpin
                                        bangsa.</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                    <span>Membangun kemitraan strategis dengan berbagai potensi umat Islam.</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Programs -->
                    <div class="mb-16">
                        <h3 class="text-2xl font-bold mb-8 text-primary">Program Utama</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-book text-primary text-xl"></i>
                                </div>
                                <h4 class="text-xl font-semibold mb-4">Pendidikan Karakter dan Dakwah</h4>
                                <p class="text-gray-700">
                                    Pelatihan kepemimpinan dan mentoring di masjid kampus dengan penekanan pada pembinaan
                                    akhlak dan spiritualitas.
                                </p>
                            </div>
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-hand-holding-usd text-primary text-xl"></i>
                                </div>
                                <h4 class="text-xl font-semibold mb-4">Pemberdayaan Ekonomi Umat</h4>
                                <p class="text-gray-700">
                                    Pengelolaan zakat, infak, sedekah, serta pelatihan kewirausahaan untuk mahasiswa dan
                                    masyarakat.
                                </p>
                            </div>
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-graduation-cap text-primary text-xl"></i>
                                </div>
                                <h4 class="text-xl font-semibold mb-4">Pelatihan dan Beasiswa</h4>
                                <p class="text-gray-700">
                                    Program beasiswa untuk mahasiswa berprestasi dan aktif dalam kegiatan masjid, serta
                                    berbagai pelatihan keterampilan.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Salman ITB Section -->
            <div x-show="activeTab === 'salman'" x-transition>
                <div class="max-w-4xl mx-auto">
                    <!-- Header -->
                    <div class="mb-12 text-center">
                        <h2 class="text-4xl font-bold mb-4">Masjid Salman ITB</h2>
                        <p class="text-xl text-gray-600">Laboratorium Peradaban Islami</p>
                    </div>

                    <!-- History -->
                    <div class="mb-16 bg-white rounded-xl shadow-sm p-8">
                        <h3 class="text-2xl font-bold mb-6 text-primary">Sejarah dan Latar Belakang</h3>
                        <div class="prose prose-lg max-w-none">
                            <p>
                                Masjid Salman ITB memiliki sejarah yang dimulai pada tahun 1964 dengan restu Presiden
                                Soekarno.
                                Nama "Salman" dipilih terinspirasi dari sosok Salman Al-Farisi, sahabat Nabi Muhammad yang
                                dikenal sebagai teknokrat dalam strategi perang. Sejak diresmikan pada tahun 1972, masjid
                                ini
                                menjadi pusat spiritual, intelektual, dan sosial bagi mahasiswa dan masyarakat.
                            </p>
                        </div>
                    </div>

                    <!-- Vision & Mission -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
                        <div class="bg-white rounded-xl shadow-sm p-8">
                            <h3 class="text-2xl font-bold mb-6 text-primary">Visi</h3>
                            <p class="text-gray-700">
                                Menjadi masjid kampus yang mandiri pelopor pembangunan peradaban Islami.
                            </p>
                        </div>
                        <div class="bg-white rounded-xl shadow-sm p-8">
                            <h3 class="text-2xl font-bold mb-6 text-primary">Misi</h3>
                            <ul class="space-y-4 text-gray-700">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                    <span>Menjadikan Masjid Sebagai Rumah Ruhani, Sanggar Ruhani dan Laboratorium Peradaban
                                        Islami</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                    <span>Membina Kader pembangun peradaban Islami</span>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-primary mt-1 mr-2"></i>
                                    <span>Mengembangkan konsep dan model peradaban islami</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Programs -->
                    <div class="mb-16">
                        <h3 class="text-2xl font-bold mb-8 text-primary">Program dan Aktivitas Utama</h3>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-users text-primary text-xl"></i>
                                </div>
                                <h4 class="text-xl font-semibold mb-4">Kaderisasi dan Pembinaan</h4>
                                <p class="text-gray-700">
                                    Program Latihan Mujahid Dakwah (LMD) dan program pendidikan untuk membina pemimpin yang
                                    tangguh secara moral dan intelektual.
                                </p>
                            </div>
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-hands-helping text-primary text-xl"></i>
                                </div>
                                <h4 class="text-xl font-semibold mb-4">Kegiatan Sosial dan Ekonomi</h4>
                                <p class="text-gray-700">
                                    Pengelolaan zakat, pemberdayaan ekonomi melalui koperasi, dan pelatihan kewirausahaan.
                                </p>
                            </div>
                            <div class="bg-white rounded-xl shadow-sm p-6">
                                <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                                    <i class="fas fa-chalkboard-teacher text-primary text-xl"></i>
                                </div>
                                <h4 class="text-xl font-semibold mb-4">Kajian dan Seminar</h4>
                                <p class="text-gray-700">
                                    Kajian keislaman, seminar ilmiah, dan diskusi yang menggabungkan wawasan intelektual dan
                                    nilai-nilai Islam.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Architecture -->
                    <div class="bg-white rounded-xl shadow-sm p-8 mb-16">
                        <h3 class="text-2xl font-bold mb-6 text-primary">Arsitektur dan Desain Unik</h3>
                        <div class="prose prose-lg max-w-none">
                            <p>
                                Masjid Salman memiliki ciri khas berupa atap berbentuk cekung yang menyerupai tangan
                                menengadah
                                dalam doa. Desain minimalis ini membawa filosofi spiritual yang mendalam, menggambarkan
                                hubungan
                                vertikal manusia dengan Tuhan dan hubungan horizontal manusia dengan sesamanya.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('animations', () => ({
                init() {
                    gsap.from(this.$el, {
                        opacity: 0,
                        y: 30,
                        duration: 1,
                        scrollTrigger: {
                            trigger: this.$el,
                            start: "top center+=100",
                            toggleActions: "play none none reverse"
                        }
                    })
                }
            }))
        })
    </script>
@endpush
