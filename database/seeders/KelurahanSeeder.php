<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelurahans = [
            [
                'kecamatan_id' => '1',
                'nama' => 'Cabawan'
            ],
            [
                'kecamatan_id' => '1',
                'nama' => 'Kaligangsa'
            ],
            [
                'kecamatan_id' => '1',
                'nama' => 'Kaliyamat Kulon'
            ],
            [
                'kecamatan_id' => '1',
                'nama' => 'Krandon'
            ],
            [
                'kecamatan_id' => '1',
                'nama' => 'Margadana'
            ],
            [
                'kecamatan_id' => '1',
                'nama' => 'Pesurungan Lor'
            ],
            [
                'kecamatan_id' => '1',
                'nama' => 'Sumurpanggang'
            ],
            [
                'kecamatan_id' => '2',
                'nama' => 'Debong Lor'
            ],
            [
                'kecamatan_id' => '2',
                'nama' => 'Kemandungan'
            ],
            [
                'kecamatan_id' => '2',
                'nama' => 'Kranton'
            ],
            [
                'kecamatan_id' => '2',
                'nama' => 'Muarareja'
            ],
            [
                'kecamatan_id' => '2',
                'nama' => 'Pekauman'
            ],
            [
                'kecamatan_id' => '2',
                'nama' => 'Pesurungan Kidul'
            ],
            [
                'kecamatan_id' => '2',
                'nama' => 'Tegalsari'
            ],
            [
                'kecamatan_id' => '3',
                'nama' => 'Bandung'
            ],
            [
                'kecamatan_id' => '3',
                'nama' => 'Debong Kidul'
            ],
            [
                'kecamatan_id' => '3',
                'nama' => 'Debong Tengah'
            ],
            [
                'kecamatan_id' => '3',
                'nama' => 'Kaliyamat Wetan'
            ],
            [
                'kecamatan_id' => '3',
                'nama' => 'Keturen'
            ],
            [
                'kecamatan_id' => '3',
                'nama' => 'Randugunting'
            ],
            [
                'kecamatan_id' => '3',
                'nama' => 'Tunon'
            ],
            [
                'kecamatan_id' => '4',
                'nama' => 'Kejambon'
            ],
            [
                'kecamatan_id' => '4',
                'nama' => 'Mangkukusuman'
            ],
            [
                'kecamatan_id' => '4',
                'nama' => 'Mintaragen'
            ],
            [
                'kecamatan_id' => '4',
                'nama' => 'Panggung'
            ],
            [
                'kecamatan_id' => '4',
                'nama' => 'Slerok'
            ]
        ];

        \DB::table('kelurahans')->insert($kelurahans);
    }
}
