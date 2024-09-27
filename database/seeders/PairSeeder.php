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







            ['nomor_urut' => '1', 'party' => 'Haru', 'region_id' => 1, 'pemimpin_id' => 9, 'wakil_id' => 13, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/haru-dhani.webp', 'election_date' => '2024-11-11'],
            ['nomor_urut' => '1', 'party' => 'Arfi yena', 'region_id' => 1, 'pemimpin_id' => 10, 'wakil_id' => 14, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/arfi-rena.jpg', 'election_date' => '2024-11-11'],
            ['nomor_urut' => '1', 'party' => 'Dandan', 'region_id' => 1, 'pemimpin_id' => 11, 'wakil_id' => 15, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/dandan-arif.jpg', 'election_date' => '2024-11-11'],
            ['nomor_urut' => '1', 'party' => 'Farhan', 'region_id' => 1, 'pemimpin_id' => 12, 'wakil_id' => 16, 'short_bio' => '-', 'full_bio' => '-', 'visi' => '-', 'misi' => '-', 'image_url' => 'pairs/farhan-erwin.jpg', 'election_date' => '2024-11-11'],


        ];

        foreach ($pairs as $pair) {
            Pair::create($pair);
        }
    }
}
