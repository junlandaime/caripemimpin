<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\Candidate;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CandidateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $faker = Faker::create('id_ID');

        // $positions = ['Walikota', 'Bupati', 'Wakil Walikota', 'Wakil Bupati', 'Gubernur', 'Wakil Gubernur'];
        // $parties = ['Partai Keadilan Sejahtera', 'Partai Demokrasi Perjuangan Indonesia', 'Partai Golongan Karya', 'Partai Gerakan Indonesia Raya', 'Partai Nasional Demokrat'];

        // // Get all region ids
        // $regionIds = Region::pluck('id')->toArray();

        // // Create 100 candidates
        // for ($i = 0; $i < 5; $i++) {
        //     $region = Region::find($faker->randomElement($regionIds));

        //     Candidate::create([
        //         'name' => $faker->name,
        //         'position' => $faker->randomElement($positions),
        //         'party' => $faker->randomElement($parties),
        //         'region_id' => $region->id,
        //         'short_bio' => $faker->paragraph,
        //         'full_bio' => $faker->paragraphs(3, true),
        //         'image_url' => $faker->imageUrl(640, 480, 'people'),
        //         'election_date' => $faker->dateTimeBetween('now', '+2 years'),
        //     ]);
        // }


        $candidates = [
            ['prename' => 'H.', 'name' => 'Ahmad Syaikhu', 'aftername' => '', 'ttl' => 'Cirebon, 23 Januari 1965', 'domisili' => 'Jl. Jenderal Ahmad Yani No.1 Bekasi', 'agama' => 'Islam', 'riwayatpen' => 'SDN Ciledug III
SDN Lemahabang II
SMON Sindanglaut
SMAN Sindanglaut
Sekolah Tinggi Akuntansi Negara (STAN)
', 'prestasi' => '', 'karir' => '1986 - 1989: Auditor di Badan Pengawasan Keuangan dan Pembangunan (BPKP) Sumatera Selatan
1989: Auditor di Badan Pengawasan Keuangan dan Pembangunan (BPKP) Pusat
2004 - 2009: Anggota DPRD Kota Bekasi
2009 - 2013: Anggota DPRD Jawa Barat
2013 - 2018: Wakil Wali Kota Bekasi
2019 - sekarang: Anggota DPR-RI
', 'akun' => '@syaikhu_ahmad_', 'nominal' => 'Rp5.271.684.274(2022)', 'partai' => 'Partai Keadilan Sejahtera', 'foto' => 'candidates/image8.jpg', 'region_id' => 5, 'position' => 'Gubernur'],

            ['prename' => 'H.', 'name' => 'Dedi Mulyadi', 'aftername' => ', S.H., M.M', 'ttl' => 'Subang, 12 April 1971', 'domisili' => 'Lembur Pakuan Desa Sukasari, Kecamatan Dawuan, Kabupaten Subang
', 'agama' => 'Islam', 'riwayatpen' => 'SD Subakti (1984)
SMP Kalijati (1987)
SMAN 1 Purwadadi (1990)
Sekolah Tinggi Hukum Purnawarman

', 'prestasi' => 'Satyalancana Kebudayaan', 'karir' => '1999-2004 Anggota DPRD Purwakarta
2003-2008 Wakil Bupati Purwakarta
2008-2013 Bupati Purwakarta
2013-2018 Bupati Purwakarta
2016-2020 Ketua DPD Partai Golkar Jawa Barat

', 'akun' => '@dedimulyadi71', 'nominal' => 'Rp9.683.033.925 (2022)', 'partai' => 'Partai Gerakan Indonesia Raya', 'foto' => 'candidates/image21.jpg', 'region_id' => 5, 'position' => 'Gubernur'],

            ['prename' => 'Drs. H.', 'name' => 'Acep Adang Ruhiat', 'aftername' => ', M.Si.', 'ttl' => 'Tasikmalaya, 1 Agustus 1958', 'domisili' => '-', 'agama' => 'Islam', 'riwayatpen' => '1965-1971 MI Cipasung
1971-1973 SMP Islam Cipasung
1973-1976 SMA Islam Cipasung
1984 (lulus) Sarjana Muda Universitas Siliwangi
1984-1988 Universitas Siliwangi 
2000 (lulus) Universitas Garut

', 'prestasi' => '', 'karir' => 'Ketua KNPI Kecamatan Singaparna
Wakil Ketua Pemuda Pancasila
Wakil Ketua KNPI Kabupaten Tasikmalaya
2008 Ketua Dewan Tanfidz PKB Kab. Tasikmalaya
2009-2014 Anggota DPRD Provinsi Jawa Barat
2011-2016 Ketua Dewan Syuro PKB
2014-2019 Anggota DPR Fraksi PKB Dapil Jawa Barat XI
2019-2024 Anggota Komisi X DPR RI

', 'akun' => '@acepadangruhiat', 'nominal' => 'Rp7.115.300.000 (2022)', 'partai' => 'Partai Kebangkitan Bangsa', 'foto' => 'candidates/image19.jpg', 'region_id' => 5, 'position' => 'Gubernur'],

            ['prename' => 'H.', 'name' => 'Jeje Wiradinata', 'aftername' => '', 'ttl' => 'Pangandaran, 14 Februari 1965', 'domisili' => '-', 'agama' => 'Islam', 'riwayatpen' => '1972-1978 SDN 8 Pangandaran
1978-1981 SMPN 1 Pangandaran
1981-1984 SMAN 1 Ciamis
1984-1988 Politeknik AUP Jakarta
', 'prestasi' => '', 'karir' => '1987-1991 Staf Ahli Samudra Farmindo Luas 
1991-1993 Manager Produksi PT. Wicakarya 
1999-2004 Anggota DPRD Kabupaten Ciamis 
2004-2009 Anggota DPRD Kabupaten Ciamis
2014-2015 Wakil Bupati Ciamis 
2016-2021 Bupati Pangandaran 
2017-2022 Ketua Umum KORAL AUP/STP Pusat 
', 'akun' => '@wiradinatajeje', 'nominal' => 'Rp 2.910.763.245 (2024)', 'partai' => 'Partai Demokrasi Perjuangan Indonesia', 'foto' => 'candidates/Jeje_Wiradinata.jpg', 'region_id' => 5, 'position' => 'Gubernur'],





            ['prename' => 'Dr.-Ing. H.', 'name' => 'Ilham Akbar Habibie', 'aftername' => ', Dipl.Ing., M.B.A.', 'ttl' => 'Aachen, 16 Mei 1963', 'domisili' => 'Jalan Sersan Bajuri, Kota Bandung', 'agama' => 'Islam', 'riwayatpen' => '1969–1973: Elementary School Windmuehlenweg, Hamburg, Jerman Barat
1973–1981: High School Hochrad, Hamburg, Jerman Barat
1981–1986: Universitas Teknik München, Jerman Barat (Faculty of Mechanical Engineering, Sub-Faculty Aeronautical Engineering)
1987: Diploma–Ingenieur (Universitas Teknik München, Jerman Barat) dengan predikat cum laude
1994: Doktor–Ingenieur (Universitas Teknik München, Jerman) dengan predikat summa cum laude
1999: International Executive Program, INSEAD, Fontainbleau, France, and Singapore
2003: Master of Business Administration (School of Business, Universitas Chicago)

', 'prestasi' => 'Bintang Satyalancana Wira Karya dan Adikarsa Pemuda
', 'karir' => 'Boeing: 1994–1996
Direktur Marketing PT Dirgantara Indonesia
Ketua Dewan TIK Nasional 
Presiden Direktur PT Ilthabi Rekatama
Presiden Direktur PT ILTHABI Bara Utama
CEO di PT ILTHABI Rekatama
Komisaris PT. Pollux Barelang Mega Superblok Meisterstadt Batam
Ketua Presidium ICMI 2010–2015
Ketua Umum Ikatan Saudagar Muslim se-Indonesia (ISMI) 2012–2017, 2018–2023

', 'akun' => '@ilham.a.habibie', 'nominal' => 'US$330 juta (2019)', 'partai' => 'Partai Nasional Demokrat', 'foto' => 'candidates/image6.jpg', 'region_id' => 5, 'position' => 'Wakil Gubernur'],

            ['prename' => 'H.', 'name' => 'Erwan Setiawan', 'aftername' => ', S.E.', 'ttl' => 'Bandung, 29 Juli 1970', 'domisili' => 'Dusun Ciluluk, Desa Margajaya, Kec. Tanjungsari, Sumedang', 'agama' => 'Islam', 'riwayatpen' => '1977-1983 SD Santo Yusup
1983-1986 SMP BPI 1
1986-1989 SMA BPI 1
1996 (lulus) Politeknik Industri dan Niaga Bandung
2008 (lulus) Universitas Langlangbuana

', 'prestasi' => '', 'karir' => '2001 Direktur CV. Ganeca Kiara
2009-2014 Anggota DPRD Kota Bandung
2009-2014 Ketua Partai Demokrat Kota Bandung
2014-2019 Anggota Komisi C DPRD Kota Bandung
2018-2023 Wakil Bupati Sumedang
2024 Tim Kampanye Daerah (TKD) Pemenangan Prabowo-Gibran

', 'akun' => '@erwansetiawan54', 'nominal' => 'Rp22.865.000.000 (2022)', 'partai' => 'Partai Golongan Karya', 'foto' => 'candidates/image18.jpg', 'region_id' => 5, 'position' => 'Wakil Gubernur'],

            ['prename' => 'Hj.', 'name' => 'mais Dwi Natarina', 'aftername' => ', S.Pd.M.Sos.', 'ttl' => 'Garut, 10 Oktober 1985', 'domisili' => 'Pasirwangi, Kab, Garut', 'agama' => 'Islam', 'riwayatpen' => 'Seni Musik UPI
Dakwah dan Penyiaran UIN Bandung

', 'prestasi' => '1993 Juara 1 Lomba Nyanyi Solo Pekan Olahraga dan Seni - PORSENI Kabupaten Garut 
1995 Juara 1 Lomba MTQ & Kaligrafi Kabupaten Garut 
1996 Juara 1 Lomba Nyanyi Dangdut se-Priangan Timur 
Juara 1 Lomba Nyanyi Qasidah & Gambus Kabupaten Garut 
1999 Juara 1 Lomba Nyanyi Lagu-lagu Arabic Musabaqoh Tilawatil Quran - MTQ se-Jawa Barat 
2000 Juara 1 Lomba Nyanyi Lagu-lagu Arabic Musabaqoh Tilawatil Quran - MTQ se-Jawa Barat  
2005 Juara 1 Kontes Dangdut TPI (KDI)  
2005 Juara 1 Lomba Nyanyi Lagu-lagu Arabic Musabaqoh Tilawatil Quran - MTQ tingkat Nasional di Palembang, Sumatra Selatan 
', 'karir' => '2011 Anggota Komisi XI DPR Fraksi PKB 
2019 Staf Ahli MPR

', 'akun' => '@gita_kdi', 'nominal' => 'Bukan penyelenggara negara', 'partai' => 'Partai Kebangkitan Bangsa', 'foto' => 'candidates/image12.jpg', 'region_id' => 5, 'position' => 'Wakil Gubernur'],

            ['prename' => 'H.', 'name' => 'Ronal Sunandar Surapradja', 'aftername' => '', 'ttl' => 'Bandung, 26 Mei 1977', 'domisili' => 'Bintaro, Jakarta Selatan', 'agama' => 'Islam', 'riwayatpen' => '1992 SMPN 1 Cimahi
2001 Universitas Padjadjaran
', 'prestasi' => '', 'karir' => '2004-2008 Pemain Sketsa Komedi Extravaganza
Aktor Film
Penyiar di Jak FM
', 'akun' => '@rocknal', 'nominal' => '-', 'partai' => 'Partai Demokrasi Perjuangan Indonesia', 'foto' => 'candidates/image15.jpg', 'region_id' => 5, 'position' => 'Wakil Gubernur'],


            // Kota Bandung
            // Walikota
            ['prename' => 'Dr. H.', 'name' => 'Haru Suandharu', 'aftername' => ', S.Si., M.Si.', 'ttl' => 'Tasikmalaya, 29 Juni 1975', 'domisili' => '-', 'agama' => 'Islam', 'riwayatpen' => '1990-1993 SMAN 5 Bandung
1993 S1 Sains Biologi Institut Teknologi Bandung
1998 S2 Wetland Ecology Institut Teknologi Bandung
2021 S3 Ilmu Pemerintahan Universitas Padjadjaran
', 'prestasi' => '', 'karir' => '2001-2002 Dosen Luar Biasa ITB
2006-2010 Ketua DPD PKS Kota Bandung
2013 Ketua Pemenangan Ridwan Kamil-Oded
2014-2019 Wakil Ketua DPRD Kota Bandung
2018 Ketua Pemenangan Sudrajat-Syaikhu
2019-2024 Anggota DPRD Provinsi Jawa Barat
2019-2024 Ketua Fraksi PKS DPRD Provinsi Jawa Barat
2019-sekarang Ketua DPW PKS Jawa Barat
', 'akun' => '@harusuandharu', 'nominal' => 'Rp.1.221.416.523 (2022)', 'partai' => 'Partai Keadilan Sejahtera', 'foto' => 'candidates/image9.jpg', 'region_id' => 1, 'position' => 'Walikota'],

            ['prename' => '', 'name' => 'Arfi Rafnialdi', 'aftername' => '', 'ttl' => 'Tangerang, 11 September 1977', 'domisili' => '-', 'agama' => 'Islam', 'riwayatpen' => '1996 S1 Teknik Sipil Institut Teknologi Bandung
2014 S2 MBA Institut Teknologi Bandung
', 'prestasi' => '', 'karir' => 'Tim Ahli Kebijakan Publik untuk Wali Kota Bandung (Pemerintahan Ridwan Kamil)
Tim Monitoring dan Evaluasi Program Penciptaan Wirausaha Baru Kota Bandung
Tim Apartemen Rakyat Kota Bandung
Tim Optimasi dan Sinkronisasi Gubernur Jawa Barat
2018-2020 Ketua Dewan Eksekutif Tim Akselerasi Pembangunan Provinsi Jawa Barat
2004-sekarang Direktur dan Trainer di GRAK System Management Consultant
2007-sekarang Staf Pengajar Softskill di Institut Teknologi Bandung
2008-sekarang Associate Trainer di Training Indonesia
2023-sekarang Ketua Bidang Strategi Penggalangan Pemilih DPP Golkar
2023-2024 Ketua Harian Tim Kampanye Daerah Jawa Barat Prabowo-Gibran

', 'akun' => '@arfirafnialdi', 'nominal' => 'Bukan pejabat publik', 'partai' => 'Partai Golongan Karya', 'foto' => 'candidates/image13.jpg', 'region_id' => 1, 'position' => 'Walikota'],

            ['prename' => '', 'name' => 'Dandan Riza Wardana', 'aftername' => '', 'ttl' => '2 Juli 1968', 'domisili' => '-', 'agama' => 'Islam', 'riwayatpen' => 'SDN Rajawali Banjarmasin
SMPN 2 Bandung
SMAN 5 Bandung
D3 di APDN
S1 Universitas Langlangbuana
S2 Universitas Padjadjaran
S3 Universitas Padjadjaran

', 'prestasi' => '2021 Penghargaan Lencana Pancawarsa Kwarda Pramuka Jabar 
2016 Penghargaan Gubernur Jabar Sebagai Atlet Bowling Asian Civil Service Game di Kuala Lumpur Malaysia 
2010 Satyalencana Karya Satya XX Tahun dari Presiden RI 
2009 penghargaan atas prestasi, dedikasi, dan partisipasi terbaik IV dari 73 peserta Diklat PIM tingkat  angkatan XXVII Lembaga Administrasi Negara. 
2004 Satyalencana Karya Satya X Tahun dari Presiden RI 
1995 penghargaan dan medali perjuangan angkatan 45, dewan harian nasional angkatan 45
', 'karir' => '2005 Manager Diklat Persib
Komisaris Utama PT. Multazam Mulia
Badan Audit Internal Pengda KONI Jawa Barat
2020-2021 Direktur Keuangan dan Umum PT. Bina Wahana Lestari
2022-2023 Komisaris BUMD di PT. Jaswita Jabar
2023- sekarang : Ketua Pembina Forum Ngadandanan Bandung
2023-Sekarang : Dewan Kehormatan GNPK-RI (Gerakan Nasional Pencegahan Korupsi) 
2023-Sekarang : Badan Audit internal KONI Jabar 
2023-sekarang : Dewan Penasehat FKPPI Jawa Barat 
2024-sekarang : Dewan Penasehat Kormi Kota Bandung 
2022-sekarang : Dewan Penasehat PP AMS 2022-sekarang : Wakil ketua DPP Perhimpunan Taman Rekreasi Indonesia 
2022-sekaranng : Wakil Ketua Pengda PERGATSI Jawa Barat. 
2008-2010 Manager Persib Bandung Junior 
1988-1989 Ketua Senat Mahasiwa APDN Bandung 
2008-2011 : Ketua DPD KNPI kota Bandung 
2020-2024 : ketua cabor E-Sport Indonesia Cab Kota Bandung.
Pengalaman Profesional (5 tahun terakhir) : 
2023 - sekarang : Komisaris Utama PT Multazam Mulia 
2022-2023 : Komisaris PT Jaswita Jabar 
2022-2023 : Direktur Keuangan dan Umum PT Bina Wana Lestari 
2021-2022 : Staf Ahli Direksi PT Jaswita Jabar 
2020-2021 : Komisaris Utama PT Jaswita Bumi Persada

', 'akun' => '@dandanrizawardana', 'nominal' => 'Rp3.407.604.303, tanggal lapor 29 April 2016.
Pada 2016, Dandan tercatat memiliki utang sebesar Rp339.807.031. Jika diakumulasikan dengan utang, maka total harta kekayaannya menjadi Rp3.067.797.272.', 'partai' => 'Partai Demokrasi Indonesia Perjuangan', 'foto' => 'candidates/image3.jpg', 'region_id' => 1, 'position' => 'Walikota'],

            ['prename' => '', 'name' => 'Muhammad Farhan', 'aftername' => ', S.E', 'ttl' => 'Bogor, 25 Februari 1970', 'domisili' => 'Jakarta Selatan', 'agama' => 'Islam', 'riwayatpen' => '1982 Bina Budaya, Bandung
1985 SMPN 3 Bandung
1988 SMAN 3 Bandung
1995 Universitas Padjadjaran

', 'prestasi' => '', 'karir' => '2000-sekarang Yayasan Autisme Indonesia
2004-2006 Trans TV
2008-2016 Announcer di Radio Delta
2009-2016 Direktur PT. Persib Bandung Bermartabat
2013-sekarang Direktur Farhan Management
2019-sekarang Anggota DPR RI Fraksi Partai Nasdem

', 'akun' => '@hmfarhanbdg', 'nominal' => 'Rp. 9,2 Miliar (2023)', 'partai' => 'Partai Nasional Demokrat', 'foto' => 'candidates/image10.jpg', 'region_id' => 1, 'position' => 'Walikota'],

            // Wakil Walikota
            ['prename' => '', 'name' => 'Ridwan Dhani Wirianata', 'aftername' => ', S.T.', 'ttl' => 'Jakarta, Maret 1992', 'domisili' => 'Kota Depok', 'agama' => 'Islam', 'riwayatpen' => '2007-2010 SMAN 60 Jakarta
2011-2018 S1 Universitas Gunadarma

', 'prestasi' => '', 'karir' => '2013-2015 Anggota Tim Media Gerindra dan Prabowo
2015-2024 Aspri Prabowo Subianto
2016-2024 Komisaris Utama PT. Garuda Pangan Nusantara
2019-2024 Wasekjend Partai Gerindra
2021-2021 Komisaris PT. AEN
', 'akun' => '@dhaniwirianata', 'nominal' => 'Bukan pejabat publik', 'partai' => 'Partai Gerakan Indonesia Raya', 'foto' => 'candidates/image2.jpg', 'region_id' => 1, 'position' => 'Wakil Walikota'],

            ['prename' => 'Hj.', 'name' => 'Yena Iskandar Ma’soem', 'aftername' => ', S.Si., MMPRS., apt', 'ttl' => 'Bandung, 12 November 1973', 'domisili' => 'Arcamanik, Kota Bandung', 'agama' => 'Islam', 'riwayatpen' => '1997 (lulus) Farmasi Universitas Padjadjaran
1998 (lulus) Program Profesi Apoteker
2002 (lulus) Magister Manajemen Rumah Sakit Universitas Padjadjaran
', 'prestasi' => '2015 Effective Leadership dari Hexpharm Jaya
2019 Inspiring Speaker Forum Sadar Hukum dan HAM', 'karir' => 'Direktur Utama PT. Ma’soem General Utama
Direktur Utama PT. Yena Farma Indonesia
2020-2025 Ketua Pertiwi Jawa Barat
2022-2026 Ketua Ikatan Apoteker Indonesia (IAI) Kota Bandung
2022-2027 Bendahara Masyarakat Hukum Kesehatan Indonesia Provinsi Jawa Barat
Komisaris Pt. Ammara Sahya Gemilang
2023-2027 Bendahara Persatuan Olahraga Berkuda Seluruh Indonesia (PORDASI)

', 'akun' => '@yenaiskandar', 'nominal' => 'Rp29.889.951.000 (2020)', 'partai' => 'Partai Solidaritas Indonesia', 'foto' => 'candidates/image11.jpg', 'region_id' => 1, 'position' => 'Wakil Walikota'],

            ['prename' => '', 'name' => 'Arif Wijaya', 'aftername' => '', 'ttl' => '-', 'domisili' => '-', 'agama' => '', 'riwayatpen' => '-', 'prestasi' => '', 'karir' => '', 'akun' => '@arifwijaya_official', 'nominal' => 'Berdasarkan penelusuran di laman resmi KPK pada Minggu, 31 Agustus 2024, tidak ditemukan LHKPN yang dilaporkan Arif Wijaya. Sebab, Arif Wijaya lebih banyak berkecimpung sebagai pengusaha', 'partai' => 'Partai Demokrat', 'foto' => 'candidates/image4.png', 'region_id' => 1, 'position' => 'Wakil Walikota'],

            ['prename' => 'H.', 'name' => 'Erwin', 'aftername' => ', S.E., M.Pd.', 'ttl' => 'Bandung, 18 Mei 1972', 'domisili' => '-', 'agama' => 'Islam', 'riwayatpen' => 'SD Cikutra V Kota Bandung
SLTP Santa Maria
SMA Yodhatama
S1 Manajemen Ekonomi Universitas Pasundan
S2 Magister Pendidikan Agama Islam (PAI) Universitas Islam Nusantara
S3 Program Doktoral lImu Pendidikan Universitas Islam Nusantara', 'prestasi' => '', 'karir' => 'Ketua DPC PKB Kota Bandung (2010-2025)
Dewan Penasehat FKPPI Kota Bandung (2023-2028)
Sekretaris Umum Garda Bangsa Jawa Barat (2017-2022)
Bendahara IKA FE UNPAS (2016-2019)
Wakil Ketua HPN Jawa Barat (Sekarang)
Ketua Pagar Nusa Kota Bandung (Sekarang)
Ketua Forum RW Kecamatan Kiaracondong (Sekarang)
Anggota DPRD Kota Bandung, Komisi D meliputi beberapa bidang di Kesejahteraan Rakyat
', 'akun' => '@kangerwin_bdg', 'nominal' => 'Rp14.851.741.500, tanggal lapor 29 Maret 2024
Erwin tercatat memiliki utang sebesar Rp4.655.000.000. Jika diakumulasikan dengan utang, maka total harta kekayaannya menjadi Rp10.196.741.500', 'partai' => 'Partai Kebangkita Bangsa', 'foto' => 'candidates/image14.jpg', 'region_id' => 1, 'position' => 'Wakil Walikota'],



            // Kab Bandung Barat
            // Bupati
            ['prename' => 'H.', 'name' => 'Didik Agus Triwiyono', 'aftername' => ', M.Pd.', 'ttl' => '', 'domisili' => '-', 'agama' => 'Islam', 'riwayatpen' => '1975-1981 SDN Grabagan 2
1981-1984 SMPN Rengel
1984 - 1987 SMAN 1 Tuban
1987 - 1992 S1 Institut Teknologi Bandung
2010 - 2012 S2 Universitas Pendidikan Indonesia
', 'prestasi' => '', 'karir' => '2014 - 2023 Direktur Utama PT Fithrah Insani Investama
2014 - 2019 Ketua Fraksi, Ketua Harian Badan Anggaran DPRD
2009 - 2014 Wakil Ketua DPRD
2007 - 2023 Direktur Utama PT Insan Sejahtera
2005 - 2006 Individual Consultant CPCU-BEP-II DEPDIKNAS RI
2001 - 2005 Individual Consultant  CPCU-WJBEP DEPDIKNAS RI
1999 - 2000 Computer Pragrammer PT Insan Mandiri
1997 - 2001 Assistant Project PT Kogas Driyap
1996 - 1998 Dosen Indonesian Germany Institute Computer Course
1995 - 2001 Dosen STT Widyatama Bandung
1992 - 1997 System Analyst Data PT Yodya Karya
1992 - 1995 Computer and Data Programmer Polytehcnics Evaluation DEPDIKBUD RI 
1992 - 1993 Computer and Data Programmer CPIU-IUC DEPDIKBUD RI
1992 - 1992 Instruktur Komputer Lembaga Administrasi Negara (LAN)
1990 - 1992 Pengajar Piksi ITB
1988 - 1992 Asisten Laboratorium ITB
', 'akun' => '@didik_at dan @didik.kbb', 'nominal' => '', 'partai' => 'Partai Keadilan Sejahtera', 'foto' => 'candidates/image7.png', 'region_id' => 4, 'position' => 'Bupati'],

            ['prename' => 'Ir.', 'name' => 'Sundaya', 'aftername' => ', M.M.', 'ttl' => 'Bandung, 20 Agustus 1972', 'domisili' => 'Bandung Barat', 'agama' => 'Islam', 'riwayatpen' => '1990-1992 SMA Sekolah Pertanian Pembangunan
1997-2000 S1 Universitas Kapuas Sintang
2014-2016 S2 Universitas Winaya Mukti', 'prestasi' => '', 'karir' => 'Ketua Komisi II DPRD Kabupaten Bandung Barat, Fraksi Partai Gerindra
', 'akun' => '', 'nominal' => '', 'partai' => 'Partai Gerakan Indonesia Raya', 'foto' => 'candidates/image20.png', 'region_id' => 4, 'position' => 'Bupati'],

            ['prename' => '', 'name' => 'Ritchie Ismail', 'aftername' => '', 'ttl' => 'Jakarta, 22 April 1983', 'domisili' => '-', 'agama' => 'Islam', 'riwayatpen' => 'sekolah Islam sejak TK hingga SMP
S1 Broadcasting Universitas Padjadjaran', 'prestasi' => '', 'karir' => 'Musisi dan Aktor
Drummer Grup Band Govinda
', 'akun' => '@ritchieismail', 'nominal' => '', 'partai' => 'Partai Amanat Nasional', 'foto' => 'candidates/image22.png', 'region_id' => 4, 'position' => 'Bupati'],

            ['prename' => '', 'name' => 'Edi Rusyandi', 'aftername' => '', 'ttl' => 'Cipongkor, Kabupaten Bandung Barat, 19 Januari 1982', 'domisili' => 'Kp. Lembur Sawah RT 001 RW 004, Desa Neglasari, Kec. Cipongkor, Kab. Bandung Barat', 'agama' => 'Islam', 'riwayatpen' => 'Pendidikan Formal
1993 Madrasah Ibtidaiyah Pasir Panjang
1996 SMPN 1 Cililin 
1999 SMA Al Bidayah Batujajar 
2001 Fakultas Tarbiyah UIN SGD Bandung

Pendidikan Nonformal
Pondok Pesantren Al Hikmah
Pesantren Mahasiswa Al Ihsan Cibiru Hilir

', 'prestasi' => '', 'karir' => '2004 -2009 Guru Honorer Madrasah
2009-2012 PNS Pengajar di MIN Ciawitali Cikalong Wetan 
2012-2018 Kepala Madrasah di MTS Syarif Hidayatulloh
2018-2024 Anggota Komisi II DPRD Jawa Barat, Fraksi Partai Golkar

', 'akun' => '@edirusyandi', 'nominal' => 'Rp1.291.026.582 (2023)', 'partai' => 'Partai Golongan Karya', 'foto' => 'candidates/image5.png', 'region_id' => 4, 'position' => 'Bupati'],

            ['prename' => '', 'name' => 'Hengki Kurniawan Chova', 'aftername' => '', 'ttl' => 'Blitar, Jawa Timur, 21 Oktober 1982', 'domisili' => 'Bandung', 'agama' => 'Islam', 'riwayatpen' => '1989-1995 SDN Kepanjelor II Blitar
1995-1998 SLTP Negeri 3 Blitar
1998-2001 SMUN 2 Blitar
Universitas Langlangbuana', 'prestasi' => '', 'karir' => '2004 Pemain Film
2018-2023 Wakil dan Bupati Bandung Barat
', 'akun' => '@hengkykurniawan', 'nominal' => 'Rp4.937.074.115 (2023)', 'partai' => 'Partai Demokrasi Indonesia Perjuangan', 'foto' => 'candidates/hengki.jpg', 'region_id' => 4, 'position' => 'Bupati'],






            //Wakil Bupati
            ['prename' => '', 'name' => 'Gilang Dirgahari', 'aftername' => '', 'ttl' => 'Jakarta, 17 Agustus 1989', 'domisili' => 'Bekasi, Jawa Barat', 'agama' => 'Islam', 'riwayatpen' => 'SMA Negeri 5 Bengkulu
SMA Negeri 8 Bengkulu
Fakultas Hukum Universitas Bengkulu (tidak selesai) 
', 'prestasi' => 'Runner-up  D’Academy Celebrity
Runner-up Pemilihan Model Indonesia 
', 'karir' => '2008 Model
2009 Bermain peran
2009 Peserta Komedi Extravaganza
2024 Anggota DPR RI Dapil DKI Jakarta I Fraksi PPP', 'akun' => '@gilangdirga', 'nominal' => 'Rp.7.014.600.000', 'partai' => 'PPP', 'foto' => 'candidates/image1.png', 'region_id' => 4, 'position' => 'Wakil Bupati'],


            ['prename' => 'Drs. H.', 'name' => 'Asep Ilyas', 'aftername' => ', M.Si.', 'ttl' => '', 'domisili' => '-', 'agama' => 'Islam', 'riwayatpen' => '', 'prestasi' => '', 'karir' => 'Aparatur Sipil Negara', 'akun' => '@asepilyas_', 'nominal' => 'Rp.2.013.361.469', 'partai' => 'Partai Demokrat', 'foto' => 'candidates/asepil.jpeg', 'region_id' => 4, 'position' => 'Wakil Bupati'],

            ['prename' => 'Drs. H.', 'name' => ' Asep Ismail', 'aftername' => ', Msi', 'ttl' => '', 'domisili' => '-', 'agama' => 'Islam', 'riwayatpen' => '', 'prestasi' => '', 'karir' => 'Pensiunan Aparatur Sipil Negara (ASN) yang terakhir berdinas sebagai Kepala Kantor Kementerian Agama (Kemenag) Bandung Barat', 'akun' => '@h.asepismail', 'nominal' => 'Rp.10.875.374.470', 'partai' => '', 'foto' => 'candidates/image16 - Copy.png', 'region_id' => 4, 'position' => 'Wakil Bupati'],

            ['prename' => '', 'name' => 'Unjang Asy’ari', 'aftername' => '', 'ttl' => '7 September 1977', 'domisili' => '-', 'agama' => 'Islam', 'riwayatpen' => '1997-2004 S1 UIN Sunan Gunung Djati Bandung', 'prestasi' => '', 'karir' => '2001-2002 Ketua Cabang PC PMII Bandung Raya
2002-2003 Wakil Ketua PKC PMII Jawa Barat
2005-2007 Sekretaris LBH Nusantara
2007-2011 Wakil Sekretaris GP Ansor Jawa Barat
2007-2011 Wakil Sekretaris DPD KNPI Jwa Barat
2009-2012 Wakil Direktur PT Mahardika Parahyangan
2015-2019 Tenaga Ahli Kementerian Desa dan Transmigrasi
2021 Tenaga Sukarela Kemnaker RI
2021 Ketua DKN Garda Bangsa
2022-sekarang Wakil Ketua DPW PKB
2023 Advokasi Petani Cianjur Maleber-Baros
2023 Advokasi Pedagang Kaki Lima Kota Bandung', 'akun' => '@unjang_asari', 'nominal' => 'Rp.5.738.241.747', 'partai' => 'Partai Kebangkitan Bangksa', 'foto' => 'candidates/unjang.png', 'region_id' => 4, 'position' => 'Wakil Bupati'],

            ['prename' => '', 'name' => 'Ade Sudradjat Usman', 'aftername' => '', 'ttl' => 'Majalaya, 11 Februari 1954', 'domisili' => 'Bandung', 'agama' => '', 'riwayatpen' => 'Formal
1960-1966 SDN 2 Bandung
1966-1969 SLTPN 2 Bandung
1969-1972 SLTA Bandung
1974-1979 S1 FH Niederrhein, Jerman

Informal
1995-1996 Kursus Manajemen Lingkungan di AOTS Jepang
1996-1997 Kursus Manajemen Belajar Mengajar IKIP, Bandung', 'prestasi' => '', 'karir' => '1993-1994 Sekretaris Asosiasi Pertekstilan Indonesia
2000-2001 Direktur di Binapusaka Intitama
2006-2007 Ketua Umum API JABAR Bandung
2007-2008 Wakil Ketua KADIN JABAR Bandung
2009-2010 Ketua Umum PI Nasional
2010-2011 Komisaris di Energi Samudra', 'akun' => '@adesudradjat
@adesudradjatofficial', 'nominal' => '', 'partai' => 'Partai Nasional Demokrat', 'foto' => 'candidates/ade.jpg', 'region_id' => 4, 'position' => 'Wakil Bupati'],



            // Kab Bandung 
            // Bupati
            ['prename' => 'H.', 'name' => 'Sahrul Gunawan', 'aftername' => ', S.E., M.Ag.', 'ttl' => '23 Mei 1976', 'domisili' => 'Soreang, Kabupaten Bandung', 'agama' => 'Islam', 'riwayatpen' => 'SDN 05 Sindang
SMP Bhakti Insani Bogor 
SMAN 1 Ciawi Bogor 
S1 Managemen Universitas Pakuan Bogor 
S2 Magister Fakultas Ilmu Tafsir Al - Quran Universitas PTIQ Jakarta
', 'prestasi' => '1993 Juara 3 Top Guest Aneka 
1994 Weekly Champion Asia Bagus 
1994 Juara 1 Cipta Pesona Bintang 
1997 Bintang Potensial Tabloid Bintang
2000 Nominasi AMI Sharps Awards ', 'karir' => '1994 Aktor
1996 Penyanyi
', 'akun' => '@sahrulgunawanofficial', 'nominal' => 'Rp10.925.797.480 (2022)', 'partai' => 'Partai Golongan Karya', 'foto' => 'candidates/sahrul.jpg', 'region_id' => 3, 'position' => 'Bupati'],

            ['prename' => 'Dr. H. M.', 'name' => 'Dadang Supriatna', 'aftername' => ', S.IP., M.Si', 'ttl' => 'Kabupaten Bandung, 7 Agustus 1971', 'domisili' => 'Jalan Raya Sapan Desa Tegalluar, Kecamatan Bojongsoang, Kabupaten Bandung', 'agama' => 'Islam', 'riwayatpen' => '1979-1985 MI Sapan pada tahun 
1985-1988 SMP Negeri 2 Buahbatu Bandung  
1988-1991 STM Igasar Pindad Bandung
1999-2003 Fakultas FISIP Universitas Langlangbuana (Unla) 
2008 - 2010 Universitas Langlangbuana (Unla) 
2016 - sekarang Universitas Trisakti 
', 'prestasi' => 'Lencana Bakti Desa Pertama 2002', 'karir' => '1988-1991 Ketua Anggota Karang Taruna Desa Tegalluar, Bojongsoang, Kabupaten Bandung
1998-2006 dan 2006-2012Kepala Desa Tegalluar, Bojongsoang, Bandung
2009-2014 Sekretaris Fraksi Partai Golkar dan Anggota Badan Anggaran DPRD Kab. Bandung.
2009-2019 Anggota DPRD Kabupaten Bandung
2019 Anggota DPRD Provinsi Jawa Barat 
2014-2019 Ketua Fraksi Partai Golkar dan Anggota Badan Anggaran
', 'akun' => '@dadangsupriatna', 'nominal' => 'Rp9.492.804.928 (2022)', 'partai' => 'Partai Kebangkitan Bangsa', 'foto' => 'candidates/dadang.png', 'region_id' => 3, 'position' => 'Bupati'],


            //Wakil Bupati
            ['prename' => 'H.', 'name' => 'Gun Gun Gunawan', 'aftername' => ', S.Si., M.Si', 'ttl' => 'Bandung, 12 Januari 1977', 'domisili' => 'Margahayu', 'agama' => 'Islam', 'riwayatpen' => '1982-1988 SD Negri Pagarsih 
1988-1991 SMP Negri 33 Bandung 
1991-1994 SMA Negeri 11 Bandung 
2001 Institut Teknologi Bandung (ITB) 
2004 Magister Institut Teknologi Bandung (ITB) 
', 'prestasi' => '', 'karir' => 'Ketua Alumni Magister Biologi ITB
Ketua LPTQ Kabupaten Bandung
Ketua ASKAB PSSI Kabupaten Bandung
Sekertaris DPD Partai Keadilan Sejahtera Kab. Bandung
2009-2014 Anggota DPRD Kab. Bandung F PKS 
2009-2014 Sekretaris Fraksi PKS DPRD Kab. Bandung 
2009-2014 Ketua Komisi D DPRD Kab. Bandung 
2016-2021 Wakil Bupati Bandung ', 'akun' => 'kang.gun.gun', 'nominal' => 'Rp493.842.767 (2024)', 'partai' => 'Partai Keadilan Sejahtera', 'foto' => 'candidates/gungun.jpg', 'region_id' => 3, 'position' => 'Wakil Bupati'],

            ['prename' => '', 'name' => 'Ali Syakieb', 'aftername' => '', 'ttl' => 'Bogor, Jawa Barat 6 Juni 1987', 'domisili' => '', 'agama' => 'Islam', 'riwayatpen' => 'Sekolah Pilot di Deraya Flying School
S1 Manajemen', 'prestasi' => '2016 Aktor Utama Paling Ngetop SCTV Awards
2022 Aktor Mega Series Kiss Awards', 'karir' => '2007-2022 Aktor ', 'akun' => '@alisyakieb', 'nominal' => 'Rp13.482.841.979 (2024)', 'partai' => 'Partai Demokrasi Indonesia Perjuangan', 'foto' => 'candidates/ali.jpg', 'region_id' => 3, 'position' => 'Wakil Bupati'],

            // noimage.jpg



            // Kota Cimahi 
            // Walkot
            ['prename' => '', 'name' => 'Dikdik Suratno Nugrahawan', 'aftername' => ', S.Si., M.M', 'ttl' => 'Bandung, 20 Mei  1972', 'domisili' => '', 'agama' => 'Islam', 'riwayatpen' => 'SMA Negeri 7 Bandung (1990)
S1 Universitas Padjajaran (1997)
S2 STIE Pasundan (2018)[2]
', 'prestasi' => '', 'karir' => '2004-2010 Kepala Sub Bidang Sosial Budaya, Hukum, dan Politik pada BAPPEDA Kota Cimahi 
2010-2012 Kepala Bidang Sosial Budaya, Hukum dan Politik pada BAPPEDA Kota Cimahi 
2012-2016 Kepala Bagian Administrasi Pembangunan Setda Kota Cimahi 
2016-2018 Kepala Dinas Pendidikan Pemuda dan Olahraga Kota Cimahi 
2018-2019 Asisten Perekonomian dan Pembangunan Setda Kota Cimahi 
2019-sekarang Sekretaris Daerah Kota Cimahi 
2022-2023 Penjabat Wali Kota Cimahi 
', 'akun' => '@dikdikcimahi', 'nominal' => 'Rp4.726.373.729 (2024)', 'partai' => 'Partai Demokrat', 'foto' => 'candidates/dikdik.png', 'region_id' => 2, 'position' => 'Walikota'],

            ['prename' => '', 'name' => 'Bilal Insan M. Priatna', 'aftername' => ', S.E', 'ttl' => '1996', 'domisili' => 'Kota Cimahi', 'agama' => 'Islam', 'riwayatpen' => '2011-2014 SMAN 22 Bandung
Universitas Pasundan', 'prestasi' => '', 'karir' => '2019-2024 Ketua Karang Taruna Kota Cimahi', 'akun' => '@bilalcimahi', 'nominal' => 'Rp3,5 miliar (2024)', 'partai' => 'Partai Demokrasi Indonesia Perjuangan', 'foto' => 'candidates/bilal.jpeg', 'region_id' => 2, 'position' => 'Walikota'],

            ['prename' => 'Letkol Inf. (Purn.)', 'name' => 'Ngatiyana', 'aftername' => ', S.A.P', 'ttl' => 'Bantul, 5 Juli 1961', 'domisili' => '', 'agama' => 'Islam', 'riwayatpen' => '1978-1981 STM 2 Jetis Yogyakarta', 'prestasi' => '', 'karir' => '1983 TNI Angkatan Darat
Komandan Peleton Kiwal Denma Kodiklat TNI AD
Ajudan Dankodiklat TNI AD
Paur Dalant Denang Kodiklat TNI AD
Kasi Dokexp Bagtu Setpussenif
Kasipers Bagpers Set Pussenif
Kabagpers Set Pussenif
Gumil Gol V Deppengmilum Pusdik Pussenif.
Sekretaris Pribadi Dubes RI di Singapura
Sekretaris Pribadi Menperindag RI
2017-2020 Wakil Wali Kota Cimahi ke 4  
2020-2022 Pelaksana Tugas Wali Kota Cimahi  
2022 Wali Kota Cimahi 
', 'akun' => '@letkolpum.ngatiyana', 'nominal' => 'Rp2,6 miliar (2024)', 'partai' => '', 'foto' => 'candidates/Ngatiyana.jpg', 'region_id' => 2, 'position' => 'Walikota'],




            ['prename' => '', 'name' => 'Bagja Setiawan', 'aftername' => ', S. Sy., M.M.', 'ttl' => 'Bandung, 16 Oktober 1977', 'domisili' => '', 'agama' => 'Islam', 'riwayatpen' => '1993-1997 SMKN 1 Bandung        
2006-2010 S1 STIA Yamisa       
2020-2022 S2 Universitas Winaya Mukti     
', 'prestasi' => '', 'karir' => '1997-1998 Electronics Teknisi di TEDS 
1998-2004 Electronics Teknisi di PT OMEDATA 
2003 Ketua Pimpinan Cabang (DPC) PKS Cangkuang
2003 Ketua Cabang Dakwah 3 di DPD Kabupaten Bandung Barat 
2004-2009 Direktur Operasional di CV MITRA UNGGUL    
2005 Ketua DPC PKS Gununghalu   
2006-2012 Direktur Utama di CV MITRA INSAN MANDIRI       
Ketua Komisi IV DPRD Kabupaten Bandung Barat Fraksi PKS. ', 'akun' => '@bagjasetiawan_', 'nominal' => 'Rp3,5 miliar (2024)', 'partai' => 'Partai Keadilan Sejahtera', 'foto' => 'candidates/bagja.jpeg', 'region_id' => 2, 'position' => 'Wakil Walikota'],
            ['prename' => 'H.', 'name' => 'A Mulyana', 'aftername' => ', S.H., M.Pd., MH.Kes', 'ttl' => 'Majalaya, 07 April 1959', 'domisili' => '', 'agama' => 'Islam', 'riwayatpen' => '1972-1975 SD PUI 
1975-1978 SMPN Majalaya  
1980 SPR RS Imanuel 
1991 Sekolah Tinggi Hukum Bandung 
2002 Pasca Sarjana Universitas Pendidikan Indonesia  
2015 Pasca Sarjana Universitas Katolik Soegijapranada Semarang 
', 'prestasi' => '', 'karir' => 'Dinas Kesehatan Kota Madya Bandung 
Dinas Kesehatan Provinsi Jawa Barat
Dewan Pembina Persatuan Perawat Nasional Indonesia (PPNI)
Dewan Pembina Ikatan Ahli Kesehatan Masyarakat Indonesia (IAKMI)
Wakil Manajer Persib
Pengurus Persatuan Menembak Sasaran dan Berburu Indonesia (Perbakin)
Ketua Jujitsu Jawa Barat', 'akun' => '@haji.mulyana.official', 'nominal' => 'Rp11,5 miliar (2024)', 'partai' => 'Partai Keadilan Sejahtera', 'foto' => 'candidates/amulyana.jpg', 'region_id' => 2, 'position' => 'Wakil Walikota'],
            ['prename' => '', 'name' => 'Adhitia Yudhisthira', 'aftername' => '', 'ttl' => 'Bandung, 25 November 1990', 'domisili' => '', 'agama' => 'Islam', 'riwayatpen' => 'SDN Andir Kidul 1
SMPN 5 Bandung 
SMA Negeri 8 Bandung 
Universitas Widyatama
', 'prestasi' => '', 'karir' => 'Direktur PT Gerak Tanaga Pasundan
Direkut PT Citra Bangun Selaras
Direktur Bagja Sundaya Group
2011 Asisten Dosen FE Utama
2015 Dosen di Universitas Singaperbangsa Karawang
2017 Wabendum Angkata Muda Siliwangi
2018 Wakil Ketua KNPI
2023 Dewan Pembina Laskar Merah Putih
2023 Dewan Pembina GADA AMS Kota Bandung', 'akun' => '@adhitiayudisthira', 'nominal' => 'Rp20,4 miliar (2024)', 'partai' => 'Partai Gerakan Indonesia Raya', 'foto' => 'candidates/adhi.jpg', 'region_id' => 2, 'position' => 'Wakil Walikota'],
        ];
        foreach ($candidates as $candidate) {
            $candidate['slug'] = Str::slug($candidate['name']);
            Candidate::create($candidate);
        }
    }
}
