<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    public function run()
    {
        $regions = [
            ['name' => 'Bandung', 'type' => 'Kota', 'bendera' => 'regions/image3.png', 'lambang' => 'regions/image5.png', 'julukan' => '- Parijs van Java 
- Kota Kembang 
- City of Heritage 
- Kota Lautan Api', 'motto' => 'Gemah ripah wibawa mukti (Sunda)
 Tenteram, makmur, berlimpah, menyenangkan', 'semboyan' => 'Bermartabat (Bersih, makmur, taat, dan bersahabat)', 'lokasi' => '6.9021856°S 107.6187558°E', 'latitude' => '-6.9021856', 'longitude' => '107.6187558', 'dashum' => '', 'harjad' => '25 September 1810; 213 tahun lalu', 'harjadate' => '1810-09-25', 'ibukota' => 'Bandung', 'kepdar' => 'Bambang Tirtoyuliono (Pj.)', 'wakepdar' => '', 'sekda' => 'Hikmat Ginanjar (Plh.)', 'ketdprd' => 'Tedy Rusmawan', 'luasdaerah' => '167,31 km2 (64,60 sq mi)', 'totalpopulasi' => '2.569.107', 'kepadatanpop' => '15,000/km2 (40,000/sq mi)', 'agama' => '92,17% Islam
7,31% Kristen
– 5,17% Protestan
– 2,14% Katolik
0,44% Buddha
0,06% Hindu
0,01% Konghucu
0,01% Kepercayaan
', 'bahasa' => 'Indonesia, Sunda', 'ipm' => 'Kenaikan 83,29 (2023) (kategori sangat tinggi)', 'zonwak' => 'UTC+07:00 (WIB)', 'kodepos' => '40100 – 40200', 'kodebps' => '3273', 'pelatken' => 'D xxxx', 'kodeiso3166' => '', 'kodekemendagri' => '32.73', 'apbd' => '', 'pad' => '', 'dau' => 'Rp 1.776.235.910.000,- (2020)', 'lagudaerah' => '', 'rumahadat' => '', 'senjata' => '', 'flora' => 'Anggrek bulan', 'fauna' => 'Hylobates moloch', 'situs' => 'https://www.bandung.go.id/'],
            ['name' => 'Cimahi', 'type' => 'Kota', 'bendera' => 'regions/image10.png', 'lambang' => 'regions/image8.png', 'julukan' => '', 'motto' => '"Saluyu ngawangun jati mandiri" (Sunda: Bersama membangun jati kemandirian)', 'semboyan' => '', 'lokasi' => '6.8800382°S 107.5385202°E', 'latitude' => '-6.8800382', 'longitude' => '107.5385202', 'dashum' => 'UU No.9 Tahun 2001', 'harjad' => '21 Juni 2001; 23 tahun lalu', 'harjadate' => '2001-06-21', 'ibukota' => '', 'kepdar' => 'Dicky Saromi (Penjabat)', 'wakepdar' => '', 'sekda' => 'Dikdik Suratno Nugrahawan', 'ketdprd' => '', 'luasdaerah' => '40,47 km2 (15,63 sq mi)', 'totalpopulasi' => '560.512', 'kepadatanpop' => '13.850/km2 (35,900/sq mi)', 'agama' => '94,14% Islam
5,56% Kekristenan
– 4,09% Protestan
– 1,47% Katolik
0,16% Buddha
0,11% Hindu
0,03% Lainnya
', 'bahasa' => 'Bahasa Indonesia (resmi), Bahasa Sunda (daerah)', 'ipm' => 'Penurunan 77,83 (2020) (Kategori Tinggi)', 'zonwak' => 'UTC+07:00 (WIB)', 'kodepos' => '', 'kodebps' => '3277', 'pelatken' => 'D xxxx', 'kodeiso3166' => '', 'kodekemendagri' => '32.77', 'apbd' => '', 'pad' => '', 'dau' => 'Rp600,1 Miliar', 'lagudaerah' => '', 'rumahadat' => '', 'senjata' => '', 'flora' => '', 'fauna' => '', 'situs' => 'https://cimahikota.go.id/'],
            ['name' => 'Bandung', 'type' => 'Kabupaten', 'bendera' => 'regions/image1.png', 'lambang' => 'regions/image9.png', 'julukan' => 'Bumi Parahyangan, Indung Bandung', 'motto' => 'ᮛᮨᮕᮨᮂ ᮛᮕᮤᮂ ᮊᮨᮁᮒ ᮛᮠᮏ "Répéh rapih kerta rahaja" 
(Bahasa Sunda: Sederhana, rapi, damai, dan tenteram)', 'semboyan' => 'Bandung Bedas', 'lokasi' => '7.0219354°S 107.52807468°E', 'latitude' => '-7.0219354', 'longitude' => '107.52807468', 'dashum' => 'UU Nomor 14 Tahun 1950', 'harjad' => '20 April 1641 (umur 383)', 'harjadate' => '1641-04-20', 'ibukota' => 'Soreang', 'kepdar' => 'H. Dadang Supriatna', 'wakepdar' => 'H. Sahrul Gunawan', 'sekda' => 'Cakra Amiyana', 'ketdprd' => '', 'luasdaerah' => '1.768 km2 (683 sq mi)', 'totalpopulasi' => '3.773.104', 'kepadatanpop' => '2,100/km2 (5,500/sq mi)', 'agama' => '98,03% Islam
1,86% Kekristenan
– 1,38% Protestan
– 0,48% Katolik
0,09% Buddha
0,01% Hindu
0,01% Lainnya
', 'bahasa' => 'Indonesia, Sunda', 'ipm' => 'Kenaikan 73,16(2022) (Kategori Tinggi)', 'zonwak' => 'UTC+07:00 (WIB)', 'kodepos' => '', 'kodebps' => '3204', 'pelatken' => 'D xxxx V**/Y**/Z**', 'kodeiso3166' => '', 'kodekemendagri' => '32.04', 'apbd' => '', 'pad' => '', 'dau' => 'Rp 2.176.386.196.000,00 (2020)', 'lagudaerah' => '', 'rumahadat' => '', 'senjata' => '', 'flora' => 'Kina', 'fauna' => 'Surili', 'situs' => 'http://www.bandungkab.go.id/'],
            ['name' => 'Bandung Barat', 'type' => 'Kabupaten', 'bendera' => 'regions/image2.png', 'lambang' => 'regions/image7.png', 'julukan' => 'Siberia van Java', 'motto' => 'Wibawa mukti kerta raharja (Sunda) Tekad kuat menata kehidupan yang lebih baik untuk mewujudkan kesejahteraan lahir-batin atas rida Tuhan Yang Maha Esa', 'semboyan' => 'Bandung Barat Cermat', 'lokasi' => '6.84111714°S 107.5125832°E', 'latitude' => '-6.84111714', 'longitude' => '107.5125832', 'dashum' => 'UU Nomor 12 Tahun 2007', 'harjad' => '19 Juni 2007 (umur 17)', 'harjadate' => '2007-06-19', 'ibukota' => 'Ngamprah', 'kepdar' => 'Ade Zakir Hasim (Pj.)', 'wakepdar' => '', 'sekda' => 'Ade Zakir Hasim', 'ketdprd' => '', 'luasdaerah' => '1.305,77 km2 (504,16 sq mi)', 'totalpopulasi' => '1.834.256', 'kepadatanpop' => '1,400/km2 (3,600/sq mi)', 'agama' => '98,41% Islam
1,52% Kekristenan
– 1,16% Protestan
– 0,36% Katolik
0,04% Buddha
0,03% Hindu
0,04% Lainnya
', 'bahasa' => 'Indonesia, Sunda', 'ipm' => 'Kenaikan 69,04 (2022) (Katergori Sedang)', 'zonwak' => 'UTC+07:00 (WIB)', 'kodepos' => '40700', 'kodebps' => '3217', 'pelatken' => 'D xxxx U**/X**/Z**', 'kodeiso3166' => '', 'kodekemendagri' => '32.17', 'apbd' => '', 'pad' => '', 'dau' => 'Rp 1.139.444.658.000,00 (2020)', 'lagudaerah' => '', 'rumahadat' => '', 'senjata' => '', 'flora' => '', 'fauna' => '', 'situs' => 'https://bandungbaratkab.go.id/'],
            ['name' => 'Jawa Barat', 'type' => 'Provinsi', 'bendera' => 'regions/image4.png', 'lambang' => 'regions/image6.png', 'julukan' => 'Tatar Sunda & Pasundan', 'motto' => 'ᮌᮨᮙᮂ, ᮛᮤᮕᮂ, ᮛᮦᮕᮦᮂ, ᮛᮕᮤᮂ “Gemah, Ripah, Répéh, Rapih” 
            (Bahasa Sunda: Makmur, sentosa, sederhana, rapi)', 'semboyan' => '', 'lokasi' => 'Jawa Barat berbatasan dengan Banten dan DKI Jakarta di sebelah barat, Laut Jawa di utara, Jawa Tengah di timur, dan Samudra Hindia di sebelah selatan.', 'latitude' => '-6.9175', 'longitude' => '107.6191', 'dashum' => 'UU No. 11 Tahun 1950', 'harjad' => '19 Agustus 1945; 79 tahun lalu', 'harjadate' => '1945-08-19', 'ibukota' => 'Kota Bandung', 'kepdar' => 'Bey Machmudin (Penjabat)', 'wakepdar' => '', 'sekda' => 'Herman Suryatman', 'ketdprd' => 'Taufik Hidayat', 'luasdaerah' => '35.377,76 km2 (13,659,43 sq mi)', 'totalpopulasi' => '49.572.392', 'kepadatanpop' => '1,400/km2 (3,600/sq mi)', 'agama' => '97,22% Islam
            2,45% Kekristenan
            – 1,83% Protestan
            – 0,65% Katolik
            0,22% Buddha
            0,04% Hindu
            0,03% Konghucu
            0,01% Sunda Wiwitan
            ', 'bahasa' => 'Indonesia (resmi)
            Sunda (daerah),
            –Sunda Priangan (dominan),
            – Sunda Cirebon,
            –Sunda Bogor,
            –Sunda Majalengka,
            –Sunda Ciamis,
            – Sunda Banten,
            –Sunda Indramayu,
            Jawa
            –Jawa Indramayu,
            –Jawa Cirebon,
            Betawi,
            Lainnya
            ', 'ipm' => 'Kenaikan 73,74 (2023) (kategori tinggi)', 'zonwak' => 'UTC+7 (Waktu Indonesia Barat)', 'kodepos' => '16xxx-46xxx', 'kodebps' => '32', 'pelatken' => '', 'kodeiso3166' => 'ID - JB', 'kodekemendagri' => '32', 'apbd' => 'Rp28,5 triliun (2015)', 'pad' => 'Rp23,9 triliun (2014)', 'dau' => 'Rp3,3 triliun (2020)', 'lagudaerah' => '- Manuk Dadali
            - Bubuy Bulan
            - Tokecang', 'rumahadat' => 'Rumah Kasepuhan & Julang Ngapak', 'senjata' => 'Kujang', 'flora' => 'Gandaria', 'fauna' => 'Macan tutul jawa', 'situs' => 'https://jabarprov.go.id/'],
            // Tambahkan wilayah lain sesuai kebutuhan
        ];

        foreach ($regions as $region) {
            $region['slug'] = Str::slug($region['type'] . '' . $region['name']);

            Region::create($region);
        }
    }
}

// ['name' => 'Bandung Barat', 'type' => 'Kabupaten', 'bendera' => 'regions/', 'lambang' => 'regions/', 'julukan' => '', 'motto' => '', 'semboyan' => '', 'lokasi' => '', 'dashum' => '', 'harjad' => '', 'harjadate' => '1641-04-20', 'ibukota' => '', 'kepdar' => '', 'wakepdar' => '', 'sekda' => '', 'ketdprd' => '', 'luasdaerah' => '', 'totalpopulasi' => '', 'kepadatanpop' => '', 'agama' => '', 'bahasa' => '', 'ipm' => '', 'zonwak' => '', 'kodepos' => '', 'kodebps' => '', 'pelatken' => '', 'kodeiso3166' => '', 'kodekemendagri' => '', 'apbd' => '', 'pad' => '', 'dau' => '', 'lagudaerah' => '', 'rumahadat' => '', 'senjata' => '', 'flora' => '', 'fauna' => '', 'situs' => ''],
// -6.9021856, 107.6187558