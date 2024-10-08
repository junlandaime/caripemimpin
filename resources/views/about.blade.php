@extends('layouts.app')

@section('title', 'Tentang Kami - CariPemimpin')

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
                Tentang Kami
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.5 })">
                Kenali dengan Tepat, Pilih yang Terhebat
            </p>
        </div>
    </section>

    <div class="container mx-auto px-4">
        <!-- Company Introduction -->
        <div class="max-w-4xl mx-auto mb-16">
            <h2 class="text-3xl font-bold mb-6">CariPemimpin</h2>
            <div class="prose prose-lg max-w-none">
                <p class="mb-6">
                    CariPemimpin adalah platform edukasi politik berbasis website yang didedikasikan untuk memberikan
                    informasi lengkap dan terpercaya tentang para calon pemimpin di Indonesia. Platform ini menyajikan
                    profil lengkap para calon bupati/walikota, gubernur, hingga presiden dan wakil presiden, dengan tujuan
                    membantu masyarakat pemilih dalam membuat keputusan yang tepat saat pemilu.
                </p>
                <p>
                    Kami percaya bahwa pemilu adalah kesempatan bagi masyarakat untuk memilih pemimpin terbaik yang memiliki
                    rekam jejak yang terbukti dan mampu membawa perubahan positif. Oleh karena itu, CariPemimpin hadir
                    untuk mengedukasi dan mengajak pemilih agar memilih berdasarkan track record kandidat, bukan karena
                    gimmick, politik uang, atau pengaruh negatif lainnya.
                </p>
            </div>
        </div>

        <!-- Vision & Mission -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 mb-16">
            <div class="bg-white p-8 rounded-xl shadow-sm" x-data x-init="gsap.from($el, { opacity: 0, x: -50, duration: 1 })">
                <h2 class="text-3xl font-bold mb-6 text-primary">Visi Kami</h2>
                <p class="text-lg text-gray-700">
                    Menjadi sumber informasi profil calon kandidat pemimpin yang komprehensif guna menciptakan pemilih yang
                    lebih kritis, cerdas, dan bertanggung jawab.
                </p>
            </div>

            <div class="bg-white p-8 rounded-xl shadow-sm" x-data x-init="gsap.from($el, { opacity: 0, x: 50, duration: 1 })">
                <h2 class="text-3xl font-bold mb-6 text-primary">Misi Kami</h2>
                <ul class="list-disc list-inside text-lg text-gray-700 space-y-3">
                    <li>Mengedukasi masyarakat Indonesia agar lebih memahami pentingnya track record dan prestasi calon
                        pemimpin.</li>
                    <li>Menyediakan informasi yang akurat dan terpercaya mengenai calon pemimpin di berbagai tingkatan
                        pemerintahan.</li>
                    <li>Mendorong pemilih untuk berpartisipasi aktif dalam proses demokrasi dengan memilih secara kritis,
                        cerdas dan bertanggung jawab.</li>
                </ul>
            </div>
        </div>

        <!-- Values -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-center">Nilai-Nilai Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-white p-6 rounded-xl shadow-sm" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.2 })">
                    <h3 class="text-xl font-semibold mb-4 text-primary">Integritas</h3>
                    <p class="text-gray-700">
                        Menyajikan informasi yang jujur, faktual, dan tidak memihak.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1, delay: 0.4 })">
                    <h3 class="text-xl font-semibold mb-4 text-primary">Transparan</h3>
                    <p class="text-gray-700">
                        Menyediakan informasi yang akurat dan dapat dipercaya yang diakses oleh semua orang.
                    </p>
                </div>
            </div>
        </div>

        <!-- Contact -->
        <div class="bg-white rounded-xl shadow-sm p-8 max-w-4xl mx-auto" x-data x-init="gsap.from($el, { opacity: 0, y: 30, duration: 1 })">
            <h2 class="text-3xl font-bold mb-8 text-center">Hubungi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
                <div class="p-4">
                    <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-globe text-xl"></i>
                    </div>
                    <p class="font-semibold mb-2">Website</p>
                    <p class="text-gray-600">www.caripemimpin.id</p>
                </div>
                <div class="p-4">
                    <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-xl"></i>
                    </div>
                    <p class="font-semibold mb-2">Email</p>
                    <p class="text-gray-600">info@caripemimpin.id</p>
                </div>
                <div class="p-4">
                    <div class="w-12 h-12 bg-primary text-white rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-instagram text-xl"></i>
                    </div>
                    <p class="font-semibold mb-2">Instagram</p>
                    <p class="text-gray-600">@caripemimpin.id</p>
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
