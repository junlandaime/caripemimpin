<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            ['type' => 'identify', 'question' => 'Golongan yang memilih untuk tidak memberikan hak suaranya disebut dengan...', 'options' => ["Dapil", "Golput", "Jurkam", "Golongan Abu"], 'answer' => "Golput", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Alat musik tradisional Jawa Barat yang terbuat dari bambu dan dimainkan secara dipukul adalah...', 'options' => ["Angklung", "Gamelan", "Karinding", "Suling"], 'answer' => "Angklung", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Lembaga yang menyelenggarakan Pilkada adalah...', 'options' => ["KPPS", "KPU", "BAWASLY", "DUKCAPIL"], 'answer' => "KPU", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Jawa Barat memiliki waduk yang dinobatkan sebagai waduk terbesar di Asia Tenggara, waduk tersebut bernama waduk ...', 'options' => ["Jatigede", "Cirata", "Jatiluhur", "Saguling"], 'answer' => "Jatiluhur", 'region_id' => 5],

            ['type' => 'identify', 'question' => ' Asas yang dijunjung tinggi dalam proses pemilihan umum disebut dengan asas...', 'options' => ["langsung", "umum", "jujur", "luberjurdil"], 'answer' => "luberjurdil", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Kerajaan Hindu-Budha pertama di Jawa Barat adalah...', 'options' => ["Kutai Martapura", "Sriwijaya", "Padjajaran", "Tarumanagara"], 'answer' => "Padjajaran", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Salah satu makanan khas yang ada di Jawa Barat yang berasal dari fermentasi singkong adalah...', 'options' => ["lotek", "combro", "peuyeum", "timbeul"], 'answer' => "peuyeum", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Komoditas pertanian utama di Jawa Barat adalah...', 'options' => ["Padi", "Jagung", "Tomat", "Ikan Patin"], 'answer' => "Padi", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Upaya yang dilakukan untuk mempromosikan dan menyakinkan pemilih untuk memilih calon yang diusung disebut dengan...', 'options' => ["kampanye", "jurkam", "bilik suara", "coblos"], 'answer' => "kampanye", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Pemilihan langsung kepala daerah dan wakil kepala daerah disebut', 'options' => ["Pemilu", "Pilkada", "Pilwarek", "Pileg"], 'answer' => "Pilkada", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Proses penghitungan suara setelah pemungutan suara disebut...', 'options' => ["quick count", "rekapitulasi", "real count", "pemilu"], 'answer' => "rekapitulasi", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Panitia yang bertugas di TPS disebut dengan...', 'options' => ["KPU", "KPPS", "BAWASLU", "BALEG"], 'answer' => "KPPS", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Ibu Kota Jawa Barat adalah...', 'options' => ["kota bandung", "kabupaten bandung", "kabupaten bandung barat", "kota cimahi"], 'answer' => "kota bandung", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Provinsi Jawa Barat dipimpin oleh seorang...', 'options' => ["Keresidenan", "Gubernur", "Wazir", "Kewadenaan"], 'answer' => "Gubernur", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Gedung yang digunakan sebagai kantor Gubernur dan Wakil Gubernur Jawa Barat adalah...', 'options' => ["Gedung Sate", "Istana Merdeka", "Gedung Asia Afrika", "Balai Kota"], 'answer' => "Gedung Sate", 'region_id' => 5],

            ['type' => 'identify', 'question' => ' Siapa tokoh penting dalam pergerakan nasional yang berasa dari Jawa Barat? (namanya disingkat)', 'options' => ["Otista", "Moh Toha", "Juanda", "Martadinata"], 'answer' => "Otista", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Gunung tertinggi di Jawa Barat adalah...', 'options' => ["Gede", "Cikurai", "Guntur", "Ciremai"], 'answer' => "Ciremai", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Suku bangsa mayoritas di Jawa Barat adalah...', 'options' => ["Bagelen", "Sunda", "Cirebon", "Badui"], 'answer' => "Sunda", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Badan yang bertugas untuk mengawasi penyelenggaraan pemilihan umum disebut dengan...', 'options' => ["bawaslu", "baleg", "kpu", "kpps"], 'answer' => "bawaslu", 'region_id' => 5],

            ['type' => 'identify', 'question' => 'Tari tradisional Jawa Barat yang terkenal dengan gerakan tangannya disebut...', 'options' => ["Tari Topeng ", "Tari Jaipong", "Tari Merak", "Tari Rempak Kendang"], 'answer' => "Tari Jaipong", 'region_id' => 5],



            // Kota Bandung
            ['type' => 'identify', 'question' => 'Bandung memiliki julukan kota...', 'options' => ["Kota Kembang", "Kota Api", "Kota Seribu Gunung", "Kota Maung"], 'answer' => "Kota Kembang", 'region_id' => 1],

            ['type' => 'identify', 'question' => 'Sungai yang membelah pusat Kota Bandung adalah...', 'options' => ["cihampelas", "cinambo", "cikapundung", "citarum"], 'answer' => "cikapundung", 'region_id' => 1],

            ['type' => 'identify', 'question' => 'Bus wisata paling populer di Kota Bandung disebut dengan...', 'options' => ["Mobil telolet", "Mobil odong-odong", "Mobil bandros", "Mobil wisata"], 'answer' => "Mobil bandros", 'region_id' => 1],

            ['type' => 'identify', 'question' => 'Salah satu jembatan atau jalan layang yang cukup legendaris di Kota Bandung dan menjadi jembatan pertama yang menggunakan teknologi tahan gempa adalah jembatan atau jalan layang...', 'options' => ["Senopati", "Pasupati", "Pasteur", "Cirapati"], 'answer' => "Pasupati", 'region_id' => 1],

            ['type' => 'identify', 'question' => 'Jalan yang terkenal sebagai pusat perbelanjaan di Kota Bandung adalah...', 'options' => ["Cihampelas", "Kota Baru", "Coblong", "Dago"], 'answer' => "Cihampelas", 'region_id' => 1],

            ['type' => 'identify', 'question' => 'Pada tahun 1946 di Bandung terjadi peristiwa Bandung Lautan Api yang saat ini diabadikan dalam bentuk monumen. Monumen tersebut terletak di lapangan...', 'options' => ["Tegalega", "Soekarno", "Tugu Juang", "Tugu Layang"], 'answer' => "Tegalega", 'region_id' => 1],

            ['type' => 'identify', 'question' => 'Pada tahun 1955 pernah diselenggarakan konferensi internasional di Kota Bandung yang disebut dengan... (disingkat)', 'options' => ["KLD", "KMB", "KAA", "KDD"], 'answer' => "KAA", 'region_id' => 1],

            ['type' => 'identify', 'question' => 'Di Kota Bandung berdiri perguruan tinggi teknik pertama di Indonesia yang saat ini bernama...', 'options' => ["Polman", "ITHB", "Unpar", "ITB"], 'answer' => "ITB", 'region_id' => 1],

            ['type' => 'identify', 'question' => 'Salah satu jalan di Kota Bandung yang mempertahankan ciri arsitektur masa Hindia-Belanda adalah...', 'options' => ["Lembang", "Dago", "Braga", "Cinambo"], 'answer' => "Braga", 'region_id' => 1],

            ['type' => 'identify', 'question' => 'Mall pertama di Kota Bandung adalah...', 'options' => ["BEC", "BIP", "PVJ", "Ciwalk"], 'answer' => "BIP", 'region_id' => 1],




            // Kota Cimahi
            ['type' => 'identify', 'question' => 'Di Kota Cimahi terdapat salah satu rumah sakit tertua di Indonesia, yakni Rumah Sakit...', 'options' => ["Baros", "Dustira", "Avisena", "Cibabat"], 'answer' => "Dustira", 'region_id' => 2],

            ['type' => 'identify', 'question' => 'Salah satu makanan khas dari Kota Cimahi yang terbuat dari jantung pisang dinamakan...', 'options' => ["dengjapi", "rasi", "jegur", "misro"], 'answer' => "dengjapi", 'region_id' => 2],

            ['type' => 'identify', 'question' => 'TPA Leuwigajah yang terletak di Cimahi pernah mengalami ledakan yang cukup dahsyat pada tahun 2005 tepatnya pada bulan...', 'options' => ["Januari", "Februari", "Maret", "April"], 'answer' => "Februari", 'region_id' => 2],

            ['type' => 'identify', 'question' => 'Kecamatan di Kota Cimahi yang memiliki jumlah keluraha paling sedikit adalah Kecamatan Cimahi...', 'options' => ["Utara", "Barat", "Timur", "Selatan"], 'answer' => "Utara", 'region_id' => 2],

            ['type' => 'identify', 'question' => 'Dr. Ir. H. M. Itoc Tochija, M.M merupakab Walikota Cimahi yang...', 'options' => ["pertama", "kedua", "ketiga", "keempat"], 'answer' => "pertama", 'region_id' => 2],

            ['type' => 'identify', 'question' => 'Cimahi berasal dari 2 kata yakni "Cai" dan "Mahi". Cai artinya air, sedangkan Mahi berarti...', 'options' => ["lebih", "awis", "cukup", "kurang"], 'answer' => "cukup", 'region_id' => 2],

            ['type' => 'identify', 'question' => 'Salah satu gunung yang terletak di Kota Cimahi adalah Gunung...', 'options' => ["geulis", "bohong", "lembang", "pangrao"], 'answer' => "bohong", 'region_id' => 2],

            ['type' => 'identify', 'question' => 'Cimahi dijuluki sebagai Kota...', 'options' => ["Kota Oleh-oleh", "Kota Tentara", "Kota Someah", "Kota Serdadu"], 'answer' => "Kota Tentara", 'region_id' => 2],

            ['type' => 'identify', 'question' => 'Kampung adat yang cukup populer di Kota Cimahi adalah...', 'options' => ["Cirendeu", "Cicariu", "Cikoneng", "Cicarita"], 'answer' => "Cirendeu", 'region_id' => 2],



            // kabupaten bandung
            ['type' => 'identify', 'question' => 'Perkebunan teh Malabar merupakan salah satu perkebunan teh terbesar pada masanya yang didirikan oleh seorang pria asal Belanda yang bernama...', 'options' => ["Daendels", "Bosscha", "Houtman", "Herman"], 'answer' => "Bosscha", 'region_id' => 3],

            ['type' => 'identify', 'question' => 'Kecamatan yang terletak paling selatan dan berbatasan dengan Kabupaten Garut adalah...', 'options' => ["Majalaya", "Banjaran", "Pangalengan", "Ciparay"], 'answer' => "Pangalengan", 'region_id' => 3],

            ['type' => 'identify', 'question' => 'Kabupaten Bandung disebut-sebut memiliki luas beberapa kali lipat dari Kota Bandung, yakni... kali lipat', 'options' => ["lima", "sepuluh", "dua belas", "delapan"], 'answer' => "sepuluh", 'region_id' => 3],

            ['type' => 'identify', 'question' => 'Sungai terbesar di Kabupaten Bandung adalah...', 'options' => ["Citarum", "Ciawitali", "Cikapundung", "Cikeas"], 'answer' => "Citarum", 'region_id' => 3],

            ['type' => 'identify', 'question' => 'Kecamatan terluas di Kabupaten Bandung adalah...', 'options' => ["Baleendah", "Pasirjambu", "Soreang", " Dayeuh Kolot"], 'answer' => "Pasirjambu", 'region_id' => 3],

            ['type' => 'identify', 'question' => 'Di sebelah Barat, Kabupaten Bandung berbatasan langsung dengan Kabupaten Bandung Barat dan Kabupaten...', 'options' => ["Cianjur", "Bogor", "Garut", "Karawang"], 'answer' => "Cianjur", 'region_id' => 3],

            ['type' => 'identify', 'question' => 'Ibu Kota Kabupaten Bandung terletak di...', 'options' => ["Baleendah", "Pasirjambu", "Soreang", " Dayeuh Kolot"], 'answer' => "Dustira", 'region_id' => 3],

            ['type' => 'identify', 'question' => 'Gunung tertinggi di Kabupaten Bandung adalah...', 'options' => ["Gunung Geulis", "Gunung Patuha", "Gunung Malabar", "Gunung Puntang"], 'answer' => "Gunung Patuha", 'region_id' => 3],

            ['type' => 'identify', 'question' => 'Kecamatan di Kabupaten Bandung yang memiliki jumlah penduduk terpadat adalah...', 'options' => ["Baleendah", "Pasirjambu", "Soreang", " Dayeuh Kolot"], 'answer' => "Baleendah", 'region_id' => 3],



            // kabupaten bandung barat
            ['type' => 'identify', 'question' => 'Di sebelah Utara Kabupaten Bandung Barat berbatasan dengan Kabupaten...', 'options' => ["Subang", "Sukabumi", "Lembang", "Cianjur"], 'answer' => "Subang", 'region_id' => 4],

            ['type' => 'identify', 'question' => 'Di Kabupaten Bandung Barat ditemukan sebuah situs purbakala yakni sebuah gua yang bernama Gua...', 'options' => ["Gua Pawon", "Gua Jepang", "Gua Sanghyang Tikoro", "Gua Belanda"], 'answer' => "Gua Pawon", 'region_id' => 4],

            ['type' => 'identify', 'question' => 'Di Desa Cikidang, Kec, Lembang ada sebuah tradisi unik berupa perang yang disebut dengan Perang...', 'options' => ["Tomat", "Bonteng", "Air", "Bulu"], 'answer' => "Tomat", 'region_id' => 4],

            ['type' => 'identify', 'question' => 'Gunung aktif yang berada di wilayah Kabupaten Bandung Barat adalah...', 'options' => ["Tangkuban Parahu", "Lembang", "Salak", "Gede"], 'answer' => "Tangkuban Parahu", 'region_id' => 4],

            ['type' => 'identify', 'question' => 'Salah satu makanan manis yang cukup populer berasal dari Cililin adalah...', 'options' => ["angkleng", "wajit", "dodol", "rengginang"], 'answer' => "wajit", 'region_id' => 4],

            ['type' => 'identify', 'question' => 'Patahan aktif yang berada di wilayah Kabupaten Bandung Barat disebut dengan...', 'options' => ["sesarlembang", "sesargarsela", "sesartanggubanparahu", "sesarpamengpeuk"], 'answer' => "sesarlembang", 'region_id' => 4],

            ['type' => 'identify', 'question' => 'Sebuah legenda yang beredar di masyarakat berkaitan dengan terbentuknya Gunung Tangkuban Parahu adalah...', 'options' => ["Sangkuriang", "Lutung Kasarung", "Bagendit", "Nyi Rengganis"], 'answer' => "Sangkuriang", 'region_id' => 4],

            ['type' => 'identify', 'question' => 'Kecamatan terluas di Kabupaten Bandung Barat adalah...', 'options' => ["Gunung Halu", "Sindangkerta", "Cijenuk", "Cililin"], 'answer' => "Gunung Halu", 'region_id' => 4],

            ['type' => 'identify', 'question' => 'Ibu kota dari Kabupaten Bandung Barat adalah...', 'options' => ["Padalarang", "Ngamprah", "Cihampelas", "Batujajar"], 'answer' => "Ngamprah", 'region_id' => 4],


            // ... tambahkan pertanyaan lainnya
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
