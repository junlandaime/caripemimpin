@extends('layouts.app')

@section('title', 'Latar Belakang - Cari Pemimpin')

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
    <section class="bg-primary text-white py-20 rounded-b-3xl mb-12" x-data>
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-6" x-data x-init="gsap.from($el, { opacity: 0, y: 50, duration: 1 })">
                Latar Belakang
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.5 })">
                Kolaborasi AMKI dan Masjid Salman ITB untuk Indonesia yang Lebih Baik
            </p>
        </div>
    </section>

    <div class="container mx-auto px-4 py-8">
        <!-- Main Content -->
        <div class="max-w-4xl mx-auto">
            <!-- Organizations Background -->
            <div class="mb-16" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1 })">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <!-- AMKI Card -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h2 class="text-2xl font-bold text-primary mb-4">AMKI</h2>
                        <p class="text-gray-700">
                            Asosiasi Masjid Kampus Indonesia (AMKI) memiliki sejarah panjang dalam membina kader-kader
                            unggul,
                            berkomitmen menjadikan masjid kampus sebagai pusat pendidikan karakter dan pengembangan
                            kepemimpinan
                            bangsa yang bersih dan berakhlak mulia.
                        </p>
                    </div>

                    <!-- Salman ITB Card -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h2 class="text-2xl font-bold text-primary mb-4">Masjid Salman ITB</h2>
                        <p class="text-gray-700">
                            Pusat pengembangan intelektual dan spiritual bagi mahasiswa dan masyarakat, serta dikenal
                            sebagai
                            laboratorium peradaban Islami. Fokus pada pembinaan akhlak, etika, dan moral untuk menciptakan
                            generasi pemimpin yang tangguh.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Why We Need Cari Pemimpin -->
            <div class="mb-16 bg-white rounded-xl shadow-sm p-8" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.2 })">
                <h2 class="text-3xl font-bold mb-6 text-primary">Mengapa Cari Pemimpin Dibutuhkan?</h2>
                <div class="prose prose-lg max-w-none">
                    <p>
                        Pemilu di Indonesia sering kali diramaikan oleh fenomena politik uang, gimmick kampanye, dan
                        informasi
                        yang tidak akurat, yang akhirnya membuat masyarakat memilih bukan berdasarkan rekam jejak atau
                        kompetensi kandidat.
                    </p>
                    <p>
                        <strong>Cari Pemimpin</strong> hadir untuk mengatasi masalah ini dengan menyediakan informasi
                        lengkap,
                        transparan, dan faktual mengenai calon pemimpin di berbagai tingkatan pemerintahan.
                    </p>
                </div>
            </div>

            <!-- Alignment with Vision -->
            <div class="mb-16" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.3 })">
                <h2 class="text-3xl font-bold mb-6">Sejalan dengan Visi dan Misi</h2>
                <div class="bg-gray-50 rounded-xl p-8">
                    <div class="space-y-6">
                        <div>
                            <h3 class="text-xl font-semibold mb-3 text-primary">AMKI</h3>
                            <p class="text-gray-700">
                                Visi AMKI untuk membangun peradaban yang Islami dan membina calon pemimpin bangsa yang
                                berakhlakul karimah sangat sesuai dengan tujuan platform ini.
                            </p>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold mb-3 text-primary">Masjid Salman ITB</h3>
                            <p class="text-gray-700">
                                Visi Masjid Salman ITB untuk menjadi pusat peradaban islami yang mandiri dan pembina
                                generasi unggul mendukung platform ini dalam menciptakan generasi pemilih yang bertanggung
                                jawab.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Values -->
            <div class="mb-16" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.4 })">
                <h2 class="text-3xl font-bold mb-6">Nilai yang Diangkat</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-shield-alt text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Integritas</h3>
                        <p class="text-gray-700">
                            Semua informasi yang disajikan oleh platform ini adalah jujur, objektif, dan tidak memihak.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-eye text-white text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Transparansi</h3>
                        <p class="text-gray-700">
                            Data yang diberikan dapat diakses oleh semua orang dengan akurasi tinggi, membantu masyarakat
                            membuat keputusan yang lebih bijak.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Movement -->
            <div class="bg-white rounded-xl shadow-sm p-8" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.5 })">
                <h2 class="text-3xl font-bold mb-6">Gerakan Menuju Pemilih yang Cerdas</h2>
                <div class="prose prose-lg max-w-none">
                    <p>
                        Dengan platform <strong>Cari Pemimpin</strong>, AMKI dan Masjid Salman ITB tidak hanya sekadar
                        memfasilitasi informasi politik, tetapi juga menggerakkan masyarakat untuk lebih kritis dalam
                        memilih pemimpin. Ini adalah upaya konkret untuk membangun peradaban yang lebih maju, adil,
                        dan sejahtera sesuai dengan nilai-nilai Islam.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Initialize GSAP animations when Alpine loads
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
