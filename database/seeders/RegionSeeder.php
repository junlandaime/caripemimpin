<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    public function run()
    {
        $regions = [
            ['name' => 'Bandung', 'type' => 'Kota'],
            ['name' => 'Cimahi', 'type' => 'Kota'],
            ['name' => 'Bandung', 'type' => 'Kabupaten'],
            ['name' => 'Bandung Barat', 'type' => 'Kabupaten'],
            ['name' => 'Jawa Barat', 'type' => 'Provinsi'],
            // Tambahkan wilayah lain sesuai kebutuhan
        ];

        foreach ($regions as $region) {
            Region::create($region);
        }
    }
}
