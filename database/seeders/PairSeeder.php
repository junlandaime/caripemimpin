<?php

namespace Database\Seeders;

use App\Models\Pair;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pairs = [
            ['nomor_urut' => '1', 'party' => 'PKB', 'region_id' => 5, 'pemimpin_id' => 3, 'wakil_id' => 7, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/acep-gita.jpg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '2', 'party' => 'PDI PERJUANGAN', 'region_id' => 5, 'pemimpin_id' => 4, 'wakil_id' => 8, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/tunjeje-ronal.webp', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '3', 'party' => 'PKS, NASDEM, PPP', 'region_id' => 5, 'pemimpin_id' => 1, 'wakil_id' => 5, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/syaikhu-ilham.jpg', 'election_date' => '2024-11-11'],

            ['nomor_urut' => '4', 'party' => 'GOLKAR, GERINDRA, PAN, PSI, DEMOKRAT, PARTAI BURUH, PBB, GELORA, PERINDO, HANURA,GARUDA, PKN, PRIMA, PARTAI UMMAT', 'region_id' => 5, 'pemimpin_id' => 2, 'wakil_id' => 6, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/dedi_erwan.webp', 'election_date' => '2024-11-11'],



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



            ['nomor_urut' => '1', 'party' => '', 'region_id' => 1, 'pemimpin_id' => 11, 'wakil_id' => 15, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/dandan-arif.jpg', 'election_date' => '2024-11-11'],
            ['nomor_urut' => '2', 'party' => '', 'region_id' => 1, 'pemimpin_id' => 9, 'wakil_id' => 13, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/haru-dhani.webp', 'election_date' => '2024-11-11'],
            ['nomor_urut' => '3', 'party' => '', 'region_id' => 1, 'pemimpin_id' => 12, 'wakil_id' => 16, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/farhan-erwin.jpg', 'election_date' => '2024-11-11'],
            ['nomor_urut' => '4', 'party' => '', 'region_id' => 1, 'pemimpin_id' => 10, 'wakil_id' => 14, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/arfi-rena.jpg', 'election_date' => '2024-11-11'],


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






            ['nomor_urut' => '1', 'party' => 'DEMOKRAT, PKS', 'region_id' => 4, 'pemimpin_id' => 17, 'wakil_id' => 22, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/didik-gilang.jpg', 'election_date' => '2024-11-11'],
            ['nomor_urut' => '2', 'party' => 'PAN, GERINDRA', 'region_id' => 4, 'pemimpin_id' => 19, 'wakil_id' => 24, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/jeje-asep.jpg', 'election_date' => '2024-11-11'],
            ['nomor_urut' => '3', 'party' => '', 'region_id' => 4, 'pemimpin_id' => 21, 'wakil_id' => 26, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/hengkiade.jpg', 'election_date' => '2024-11-11'],
            ['nomor_urut' => '4', 'party' => 'GOLKAR, PKB', 'region_id' => 4, 'pemimpin_id' => 20, 'wakil_id' => 25, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/edun.jpg', 'election_date' => '2024-11-11'],
            ['nomor_urut' => '5', 'party' => 'Independen/Perseorangan', 'region_id' => 4, 'pemimpin_id' => 18, 'wakil_id' => 23, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/sundaya-asep.jpg', 'election_date' => '2024-11-11'],






        ];

        foreach ($pairs as $pair) {
            Pair::create($pair);
        }
    }
}
