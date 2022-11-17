<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kecamatans = [
            [
                'nama' => 'Margadana',
            ],
            [
                'nama' => 'Tegal Barat',
            ],
            [
                'nama' => 'Tegal Selatan',
            ],
            [
                'nama' => 'Tegal Timur',
            ],
        ];

        \DB::table('kecamatans')->insert($kecamatans);
    }
}
