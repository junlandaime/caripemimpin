<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Pair;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pairs = [
            ['nomor_urut' => '1', 'party' => 'PKB', 'region_id' => 5, 'pemimpin_id' => 3, 'wakil_id' => 7, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Terwujudnya Jawa Barat yang Bahagia Lahir dan Batin
', 'misi' => '1. Membangun masyarakat Pancasila yang bertaqwa dan berakhlak mulia melalui penguatan peran masjid, rumah badah, lembaga pendidikan agama dan komunitas keagamaan sebagai pusat peradaban.

2. Mewujudkan masyarakat yang berdaya, sejahtera, bahagia dan berbudaya melalui peningkatan kualitas pelayanan publik yang merata dan inovatif.

3. Mempercepat pembangunan wilayah berbasis lingkungan yang berkelanjutan melalui peningkatan konektivitas dan ata ruang yang mendukung keseimbangan alam dan memberikan kebahagiaan bag semua lapisan masyarakat.

4. Meningkatkan produktivitas dan daya saing ekonomi yang adil dan sejahtera melalui pemanfaatan teknologi digital dan kolaborasi dengan pusat-pusat inovasi serta pelaku pembangunan untuk mencapai kesejahteraan ekonomi yang menyeluruh.

5. Mewujudkan tata kelola pemerintahan yang bersih, inovatif dan partisipatif dengan kepemimpinan yang kolaboratif berlandaskan semangat gotong royong antara pemerintah pusat, provinsi, dan kabupaten/kota.', 'image_url' => 'pairs/acep-gita.jpg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '2', 'party' => 'PDI PERJUANGAN', 'region_id' => 5, 'pemimpin_id' => 4, 'wakil_id' => 8, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Membangun Masyarakat Adil Makmur, Lestari dan Berkeadaban
', 'misi' => '1. Meningkatkan pembangunan manusia yang produktif, berkualitas dan berkepribadian untuk siap kerja dan siap merintis usaha sendiri.

2. Memastikan akses kesehatan untuk rakyat guna menciptakan manusia indonesia yang sehat jasmani dan rohani.

3. Mewujudkan keadilan sosial melalui kebijakan yang memperkuat kapasitas ekonomi rakyat, termasuk kapasitas produksi pangan oleh petani dan nelayan, serta mendukung kegiatan ekonomi skala kecil-menengah yang inklusif dan kreatif.

4. Membangun kemandirian ekonomi daerah berbasis potensi sumber daya lokal.

5. Setia pada amanat penderitaan rakyat (Ampera), pancasila, UUD 1945, menjunjung tinggi hukum demi menjamin hak-hak rakyat, serta menjalankan tata pemerintahan daerah yang bersih, bebas dari korupsi dan berkeadaban.

6. Memajukan kebudayaan setempat dalam semangat kebhinekaan dan toleransi serta menjaga kelestarian lingkungan hidup warisan leluhur bangsa indonesia.

', 'image_url' => 'pairs/tunjeje-ronal.webp', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '3', 'party' => 'PKS, NASDEM, PPP', 'region_id' => 5, 'pemimpin_id' => 1, 'wakil_id' => 5, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Membangun Jawa Barat Yang Silih Asih, Asah, dan Asuh Untuk Indonesia Maju', 'misi' => '1. Membangun kualitas manusia masyarakat Jawa Barat yang beriman dan berbudaya luhur berlandaskan Pancasila.

2. Membangun keluarga tangguh sejahtera sebagai pilar elemen masyarakat Jawa Barat.

3. Memastikan kesejahteraan sosial yang merata dalam bentuk memperluas akses layanan kesehatan, peningkatan kualitas pendidikan dan menurunkan angka kemiskinan absolut di Jawa Barat.

4. Membangun ekonomi Jawa Barat yang merata, inklusif dan berkelanjutan dengan penguatan potensi desa, kota dan pesisir.

5. Membangun wilayah dengan kebijakan tata ruang yang optimal untuk kota, desa dan pesisir Jawa Barat.

6. Meningkatkan lapangan kerja berkualitas, mendorong kewirausahaan, mengembangkan industri kreatif.

7. Mewujudkan tata kelola pemerintahan dan penyelenggaraan hukum yang baik, transparan, dan berbasis pelayanan publik.

8. Penyelarasan hidup masyarakat Jawa Barat dengan lingkungan hidup yang lestari dan berkelanjutan.', 'image_url' => 'pairs/syaikhu-ilham.jpg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '4', 'party' => 'GOLKAR, GERINDRA, PAN, PSI, DEMOKRAT, PARTAI BURUH, PBB, GELORA, PERINDO, HANURA,GARUDA, PKN, PRIMA, PARTAI UMMAT', 'region_id' => 5, 'pemimpin_id' => 2, 'wakil_id' => 6, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Berpijak pada Latar Belakang Gambaran Umum Provinsi Jawa Barat, Permasalahan-Permasalahan dan Isu strategis Provinsi Jawa Barat dapat disusun Visi Provinsi Jawa Barat Adalah Jawa Barat Istimewa
', 'misi' => '1. Mengembangkan kualitas sumber daya manusia yang berkarakter, cerdas, berpengetahuan, bertaqwa dan profesional pada bidang tugasnya masing-masing.

2. Mengembangkan ekonomi kerakyatan berbasis sumber daya lokal, berdaulat, berkelanjutan, berdaya saing tingg dengan memanfaatkan ragam teknologi masa kini.

3. Mengurangi disparitas pembangunan utara-selatan dengan mendorong masuknya investasi dan pemerataan penyediaan sarana dan prasarana.

4. Pendidikan, kesehatan, perekonomian dan lingkungan hidup yang proporsional memperkuat transformasi birokrasi yang berorientasi terhadap mutu pelayanan publik yang bermartabat, efektif, efisien menjunjung tinggi prinsip- prinsip pemerintahan yang bersih (clean governance).
', 'image_url' => 'pairs/dedi_erwan.webp', 'election_date' => '2024-11-11'],



            ['nomor_urut' => '1', 'party' => 'GOLKAR, PKS', 'region_id' => 3, 'pemimpin_id' => 27, 'wakil_id' => 29, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Bandung Menawan: Terwujudnya, Bandung yang maju edukatif, nyaman, agamis, wibawa, adil dan nyata (Menawan)', 'misi' => '1. Meningkatkan laju perekonomian daerah berbasis potensi daerah yang produktif, inovatif, maju, mandiri, kolaboratif, dan unggul yang terselenggara dengan prinsip pembangunan berkelanjutan, adil, merata dengan mendorong peran-serta masyarakat, upaya mewujudkan kemakmuran dan kesejahteraan. 

2. Meningkatkan sumber daya manusia yang maju dan unggul berbasis kekuatan iman dan taqwa. 

3. Mewujudkan kualitas kehidupan masyarakat yang sehat, dan lingkungan nyaman, asri, dan berbudaya. 

4. Meningkatkan birokrasi yang bersih, berwibawa, humanis dengan mengedepankan pelayanan publik yang mudah, cepat, transparan, terjangkau, profesional dan berkualitas berbasis teknologi (good goverment-clean governance);

5. Mewujudkan pemerataan pembangunan berbasis pedesaan yang berkeadilan sesuai dengan daya dukung potensi daerah. ', 'image_url' => 'pairs/sahgun.jpeg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '2', 'party' => 'PKB, PDIP', 'region_id' => 3, 'pemimpin_id' => 28, 'wakil_id' => 30, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Kabupaten Bandung lebih bedas, maju, dan berkelanjutan menuju Indonesia emas
', 'misi' => '1. Meningkatkan kualitas sumber daya manusia berakhlak dan berkarakter dengan didukung keberpihakan penguatan kesetaraan gender melalui pemberdayaan perempuan dan mendorong perlindungan bagi anak.  

2. Meningkatkan pembangunan ekonomi yang inklusif dan berkeadilan serta mendorong ketahanan pangan melalui produksi pangan lokal yang berkelanjutan. 

3. Mengoptimalkan tata kelola pemerintahan yang baik guna mewujudkan pelayanan publik yang partisipatif, transparan, dan akuntabel. 

4. Meningkatkan kualitas infrastuktur yang terintegrasi dan berwawasan lingkungan. 

5. Menjaga stabilitas ketentraman dan ketertiban umum.', 'image_url' => 'pairs/dangli.jpeg', 'election_date' => '2024-11-11'],



            ['nomor_urut' => '1', 'party' => 'PDIP, DEMOKRAT', 'region_id' => 1, 'pemimpin_id' => 11, 'wakil_id' => 15, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Bandung Kota Jasa yang Agamis, Sejahtera, Inovatif, Kreatif, dan Kolaboratif yang Maju dan Berkelanjutan
', 'misi' => '1. Mewujudkan masyarakat Bandung yang religius dan toleran, menghargai keberagaman dan memiliki karakter kesholehan sosial.

2. Menguatkan nilai-nilai budaya yang akan membangun karakter unggul dalam kehidupan masyarakat.

3. Memperkuat perlindungan hak perempuan dan anak untuk menciptakan masyarakat yang lebih adil dan setara.

4. Meningkatkan akses dan pemerataan pendidikan yang berkualitas di seluruh wilayah Kota Bandung.

5. Meningkatkan akses terhadap layanan kesehatan yang berkualitas, merata, dan terjangkau bagi seluruh lapisan masyarakat.

6. Menciptakan lapangan pekerjaan yang luas dan berkualitas guna mengurangi pengangguran dan meningkatkan taraf hidup masyarakat.

7. Mendorong pelestarian lingkungan yang berkelanjutan untuk memastikan keseimbangan antara pembangunan dan keberlanjutan ekologi.

8. Mengembangkan infrastruktur, tata ruang, dan transportasi publik yang terintegrasi dan ramah lingkungan.

9. Meningkatkan tata kelola pemerintahan yang bersih, transparan, dan akuntabel untuk meningkatkan pelayanan publik yang efektif.

10. Mewujudkan transformasi ekonomi kreatif yang inklusif dan berdaya saing.

11. Mewujudkan keamanan dan ketertiban umum yang kondusif sebagai fondasi pembangunan daerah.
', 'image_url' => 'pairs/dandan-arif.jpg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '2', 'party' => 'PKS, GERINDRA, PERINDO, PARTAI UMMAT, PBB', 'region_id' => 1, 'pemimpin_id' => 9, 'wakil_id' => 13, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Bandung Kota Kreatif Dunia yang Maju, Agamis, Sejahtera dan Berkelanjutan Menuju Indonesia Emas 2045
', 'misi' => '1. Mewujudkan masyarakat yang beragama, berbudaya luhur, dan berwawasan lingkungan sebagai pilar kondusivitas daerah.

2. Mengembangkan SDM yang inovatif, berkualitas, dan berdaya saing.

3. Mendorong perekonomian inklusif, tangguh, dan kreatif untuk meningkatkan kesejahteraan warga.

4. Mewujudkan penataan ruang dan infrastruktur yang harmonis, humanis, dan berkualitas.

5. Menguatkan tata kelola pemerintahan yang bersih, melayani, dan berkesinambungan.
', 'image_url' => 'pairs/haru-dhani.webp', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '3', 'party' => 'NASDEM, PKB', 'region_id' => 1, 'pemimpin_id' => 12, 'wakil_id' => 16, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Mewujudkan Kota Bandung yang Unggul, Terbuka, Amanah, Maju dan Agamis Melalui Pemerintahan yang Berorientasi Melayani serta Berkelanjutan Dalam Mendukung Pembangunan Nasional', 'misi' => '1. Mewujudkan pelayanan publik dan kualitas hidup warga kota bandung yang unggul.

2. Mewujudkan bandung sebagai kota yang terbuka, inklusif, demokratis, setara, dan berkeadilan.

3. Pengelolaan tata pemerintahan dan pendayagunaan anggaran yang amah, bersih, jujur, efektif, akuntabel, dan terpercaya.

4. Mewujudkan Kota Bandung yang maju dalam perekonomian dan infrastruktur, yang dilakukan secara merata untuk menunjang peningkatan daya saing.

5. Membentuk karakter warga kota bandung yang agamis, moderat, dan toleran.
', 'image_url' => 'pairs/farhan-erwin.jpg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '4', 'party' => 'GOLKAR, PSI, PAN, HANURA, PERINDO, GARUDA', 'region_id' => 1, 'pemimpin_id' => 10, 'wakil_id' => 14, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Bandung Kota Jasa yang Kreatif, Agamis dan Berkelanjutan
', 'misi' => '1. Mengembangkan SDM yang Inovatif, Berkualitas, dan Berdaya Saing.

2. Mewujudkan Perekonomian Inklusif, Tangguh, dan Kreatif.

3. Menguatkan Tata Kelola Pemerintahan yang Bersih dan Melayani.

4. Mewujudkan Kondusifitas Daerah

5. Mewujudkan Penataan Ruang yang Terpadu dan Berkualitas.

6. Mewujudkan Masyarakat Madani, Beragama, Berbudaya, dan Berwawasan Lingkungan.

7. Meningkatkan Sarana dan Prasarana yang Berkualitas, Inklusif, dan Ramah Lingkungan.

8. Mewujudkan Pembangunan yang Berkesinambungan.', 'image_url' => 'pairs/arfi-rena.jpg', 'election_date' => '2024-11-11'],


            ['nomor_urut' => '1', 'party' => '', 'region_id' => 2, 'pemimpin_id' => 31, 'wakil_id' => 34, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Bersatu Menuju Cimahi Maju', 'misi' => '1. Bersatu mewujudkan masyarakat yang harmonis dan berbudaya.

2. Bersatu mewujudkan iklim perekonomian kota yang produktif serta mewujudkan pertumbuhan ekonomi.

3. Bersatu mewujudkan perkembangan infrastruktur kota yang maju dan berkelanjutan.

4. Bersatu mewujudkan lingkungan hidup dan pengelolaan bencana yang terintegrasi.

5. Bersatu mewujudkan SDM yang berkarakter, agamis, unggul, dan budaya saling serta penguatan peran serta generasi muda yang kreatif dan inovatif.

6. Bersatu mewujudkan tata kelola pemerintahan yang adaptif, responsif, san solutif serta berintegritas berlandaskan prinsip good governance.', 'image_url' => 'pairs/dikdik-bagja.jpg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '2', 'party' => '', 'region_id' => 2, 'pemimpin_id' => 33, 'wakil_id' => 36, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Mewujudkan Cimahi Mantap melalui Kolaborasi Antar Generasi yang Maju, Unggul, dan Berkelanjutan', 'misi' => '1. Pemerintahan bersih dan transparan.

2. Pemberdayaan ekonomi dan UMKM.

3. Pendidikan dan kesehatan berkualitas.

4. Infrastruktur dan lingkungan berkelanjutan.

5. Pariwisata Kota (Urban Tourism) budaya dan kuliner

6. Penguasaan IPTEK

7. Olahraga dan kesehatan

8. Konektivitas dan kerjasama

9. Kolaborasi dan partisipasi publik

10. Pembangunan keberpihakan terhadap perempuan

11. Pemajuan kebudayaan nasional

12. Ekonomi pesantren', 'image_url' => 'pairs/ngatiyana-adhi.jpeg', 'election_date' => '2024-11-11'],


            ['nomor_urut' => '3', 'party' => '', 'region_id' => 2, 'pemimpin_id' => 32, 'wakil_id' => 35, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Akselerasi Kota Cimahi menjadi Kota yang Produktif', 'misi' => '1. Mewujudkan Cimahi yang nyaman dengan mengembangkan infrastruktur

2. Menciptakan ekonomi kerakyatan yang mandiri dan berdaya saing

3. Meningkatkan kualitas pendidikan dan kesehatan

4. Mengoptimalisasi industri kreatif guna meningkatkan potensi pemuda Kota Cimahi yang kreatif dan inovatif

5. Membangun masyarakat Kota Cimahi yang agamis dan berbudaya', 'image_url' => 'pairs/bilal-mulyana.jpeg', 'election_date' => '2024-11-11'],






            ['nomor_urut' => '1', 'party' => 'DEMOKRAT, PKS', 'region_id' => 4, 'pemimpin_id' => 17, 'wakil_id' => 22, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Bekerja membangun desa menuju  Kabupaten Bandung Barat dinamis, adil, harmonis, sejahtera, yakin, agamis, dan tangguh.', 'misi' => '1. Birokrasi yang bersih, inovatif, dan melayani

2. Ekonomi yang kuat

3. Nilai-nilai agama dan kebudayaan yang terjaga

4. Akses pendidikan dan kesehatan yang mudah dan berkualitas

5. Hijau dan ramah lingkungan

6. Infrastruktur yang berkualitas', 'image_url' => 'pairs/didik-gilang.jpg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '2', 'party' => 'PAN, GERINDRA', 'region_id' => 4, 'pemimpin_id' => 19, 'wakil_id' => 24, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Mewujudkan Kabupaten Bandung Barat yang AMANAH (Agamis, Maju, Adaptif, Nyaman, Aspiratif dan Harmonis)', 'misi' => '1. Mewujudkan nilai-nilai religius dan demokratis untuk mewujudkan Bandung Barat yang produktif, unggul, dan maju.

2. Mewujudkan pengembangan ekonomi dan penciptaan lapangan kerja, serta meningkatkan investasi melalui pemanfaatan potensi sektor unggulan daerah untuk berhasil guna dan berdaya saing.

3. Mewujudkan tata kelola pemerintahan yang profesional, inovatif, transparan, akuntabel dan bebas korupsi.

4. Mempercepat pembangunan infrastruktur layanan dasar dan lingkungan hidup.

5. Memperkuat pembangunan sumber daya manusia dalam bidang kesehatan, pendidikan, sosial, budaya, prestasi olahraga, serta penguatan peran perempuan, pemuda, dan penyandang disabilitas.

6. Mewujudkan kondisi yang harmonis di masyarakat dan pemerintahan berdasarkan kearifan lokal budaya.', 'image_url' => 'pairs/jeje-asep.jpg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '3', 'party' => 'PDIP, NASDEM', 'region_id' => 4, 'pemimpin_id' => 21, 'wakil_id' => 26, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Terwujudnya Kabupaten Bandung Barat HADE (Harmoni, Akselerasi, Daya Saing SDM, Ekologi Keberlanjutan) sebagai daerah yang maju, berkeadilan dan sejahtera melalui pembangunan berkelanjutan berbasis pada potensi lokal dan pemberdayaan masyarakat', 'misi' => '1. Unggul dan kompetitif

2. Mewujudkan perekonomian yang berdaya saing berkelanjutan upaya peningkatan pendapatan

3. Membangun tata kelola pemerintahan yang transparan, akuntabel, dan berorientasi pada pelayanan publik

4. Menjaga kelestarian lingkungan hidup dan pemerataan infrastruktur yang berkelanjutan

5. Memperkuat kehidupan sosial budaya yang berbasis pada nilai-nilai kearifan lokal.', 'image_url' => 'pairs/hengkiade.jpg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '4', 'party' => 'GOLKAR, PKB', 'region_id' => 4, 'pemimpin_id' => 20, 'wakil_id' => 25, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Menuju Bandung Barat Raharja Wibawa', 'misi' => '1. Peningkatan kualitas dan pemerataan akses pelayanan dasar seluruh elemen masyarakat

2. Penguatan perekonomian berbasis potensi dan prinsip keberlanjutan

3. Percepatan dan pemerataan pembangunan infrastruktur

4. Optimalisasi birokrasi yang akuntabel, inovatif, dan berintegrasi', 'image_url' => 'pairs/edun.jpg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '5', 'party' => 'Independen/Perseorangan', 'region_id' => 4, 'pemimpin_id' => 18, 'wakil_id' => 23, 'short_bio' => '-', 'full_bio' => '-', 'visi' => 'Mewujudkan Bandung Barat yang mandiri, maju, aman, nyaman, dinamis, dan religius', 'misi' => '1. Mewujudkan Bandung Barat yang maju

2. Mewujudkan Bandung Barat yang aman

3. Mewujudkan Bandung Barat yang nyaman

4. Mewujudkan Bandung Barat yang dinamis

5. Mewujudkan Bandung Barat yang religius

6. Mewujudkan tata kelola pemerintahan yang baik

7. Mewujudkan pelestarian budaya dan kearifan lokal

8. Mewujudkan pembangunan berkelanjutan', 'image_url' => 'pairs/sundaya-asep.jpg', 'election_date' => '2024-11-11'],






        ];

        foreach ($pairs as $pair) {

            $pemimpin = Candidate::where('id', $pair['pemimpin_id'])->first();
            $wakil = Candidate::where('id', $pair['wakil_id'])->first();

            $pair['slug'] = Str::slug($pemimpin['name'] . ' ' . $wakil['name']);

            Pair::create($pair);
        }
    }
}
