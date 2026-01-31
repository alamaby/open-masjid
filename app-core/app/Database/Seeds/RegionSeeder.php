<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RegionSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        
        // Provinces Data (All 38)
        $provinces = [
            ['id' => 1, 'name' => 'Aceh'],
            ['id' => 2, 'name' => 'Sumatera Utara'],
            ['id' => 3, 'name' => 'Sumatera Barat'],
            ['id' => 4, 'name' => 'Riau'],
            ['id' => 5, 'name' => 'Kepulauan Riau'],
            ['id' => 6, 'name' => 'Jambi'],
            ['id' => 7, 'name' => 'Bengkulu'],
            ['id' => 8, 'name' => 'Sumatera Selatan'],
            ['id' => 9, 'name' => 'Kepulauan Bangka Belitung'],
            ['id' => 10, 'name' => 'Lampung'],
            ['id' => 11, 'name' => 'Banten'],
            ['id' => 12, 'name' => 'DKI Jakarta'],
            ['id' => 13, 'name' => 'Jawa Barat'],
            ['id' => 14, 'name' => 'Jawa Tengah'],
            ['id' => 15, 'name' => 'DI Yogyakarta'],
            ['id' => 16, 'name' => 'Jawa Timur'],
            ['id' => 17, 'name' => 'Bali'],
            ['id' => 18, 'name' => 'Nusa Tenggara Barat'],
            ['id' => 19, 'name' => 'Nusa Tenggara Timur'],
            ['id' => 20, 'name' => 'Kalimantan Barat'],
            ['id' => 21, 'name' => 'Kalimantan Tengah'],
            ['id' => 22, 'name' => 'Kalimantan Selatan'],
            ['id' => 23, 'name' => 'Kalimantan Timur'],
            ['id' => 24, 'name' => 'Kalimantan Utara'],
            ['id' => 25, 'name' => 'Sulawesi Utara'],
            ['id' => 26, 'name' => 'Gorontalo'],
            ['id' => 27, 'name' => 'Sulawesi Tengah'],
            ['id' => 28, 'name' => 'Sulawesi Barat'],
            ['id' => 29, 'name' => 'Sulawesi Selatan'],
            ['id' => 30, 'name' => 'Sulawesi Tenggara'],
            ['id' => 31, 'name' => 'Maluku'],
            ['id' => 32, 'name' => 'Maluku Utara'],
            ['id' => 33, 'name' => 'Papua Barat'],
            ['id' => 34, 'name' => 'Papua'],
            ['id' => 35, 'name' => 'Papua Tengah'],
            ['id' => 36, 'name' => 'Papua Pegunungan'],
            ['id' => 37, 'name' => 'Papua Selatan'],
            ['id' => 38, 'name' => 'Papua Barat Daya'],
        ];

        $db->table('provinces')->insertBatch($provinces);

        // Major Regencies/Cities for each province (Subset)
        $regencies = [
            // Aceh
            ['id' => 1, 'province_id' => 1, 'name' => 'Kota Banda Aceh'],
            ['id' => 2, 'province_id' => 1, 'name' => 'Kab. Aceh Besar'],
            ['id' => 3, 'province_id' => 1, 'name' => 'Kota Lhokseumawe'],
            // Sumatera Utara
            ['id' => 4, 'province_id' => 2, 'name' => 'Kota Medan'],
            ['id' => 5, 'province_id' => 2, 'name' => 'Kota Binjai'],
            ['id' => 6, 'province_id' => 2, 'name' => 'Kab. Deli Serdang'],
            // Jabar
            ['id' => 7, 'province_id' => 13, 'name' => 'Kota Bandung'],
            ['id' => 8, 'province_id' => 13, 'name' => 'Kota Bekasi'],
            ['id' => 9, 'province_id' => 13, 'name' => 'Kota Depok'],
            ['id' => 10, 'province_id' => 13, 'name' => 'Kab. Bogor'],
            // DKI
            ['id' => 11, 'province_id' => 12, 'name' => 'Kota Jakarta Selatan'],
            ['id' => 12, 'province_id' => 12, 'name' => 'Kota Jakarta Timur'],
            ['id' => 13, 'province_id' => 12, 'name' => 'Kota Jakarta Pusat'],
            // Jateng
            ['id' => 14, 'province_id' => 14, 'name' => 'Kota Semarang'],
            ['id' => 15, 'province_id' => 14, 'name' => 'Kota Surakarta'],
            // Jatim
            ['id' => 16, 'province_id' => 16, 'name' => 'Kota Surabaya'],
            ['id' => 17, 'province_id' => 16, 'name' => 'Kota Malang'],
        ];

        $db->table('regencies')->insertBatch($regencies);
    }
}
