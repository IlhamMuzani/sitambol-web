<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GambarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gambars = [
            [
                'bengkel_id' => '1',
                'gambar' => 'bengkel/tambalban_izhar.jpg',
            ],
            [
                'bengkel_id' => '2',
                'gambar' => 'bengkel/tambalban_wendi.jpg',
            ],
            [
                'bengkel_id' => '3',
                'gambar' => 'bengkel/tambalban_ali.jpg',
            ],
            [
                'bengkel_id' => '4',
                'gambar' => 'bengkel/tambalban_nono1.jpg',
            ],
            [
                'bengkel_id' => '5',
                'gambar' => 'bengkel/tambalban_jangkung.jpg',
            ],
            [
                'bengkel_id' => '6',
                'gambar' => 'bengkel/tambalban_jalankyaidewantoro.jpg',
            ],
            [
                'bengkel_id' => '7',
                'gambar' => 'bengkel/tambalban_nono2.jpg',
            ],
            [
                'bengkel_id' => '8',
                'gambar' => 'bengkel/tambalban_sutarjo.jpg',
            ],
            [
                'bengkel_id' => '9',
                'gambar' => 'bengkel/tambalban_bledos.jpg',
            ],
            [
                'bengkel_id' => '10',
                'gambar' => 'bengkel/tambalban_sumurpanggang.jpg',
            ],
            [
                'bengkel_id' => '11',
                'gambar' => 'bengkel/tambalban_muhirfan.jpg',
            ],
            [
                'bengkel_id' => '12',
                'gambar' => 'bengkel/tambalban_nitrogencabawan.jpg',
            ],
            [
                'bengkel_id' => '13',
                'gambar' => 'bengkel/tambalban_marunijepang.jpg',
            ],
            [
                'bengkel_id' => '14',
                'gambar' => 'bengkel/tambalban_pojok.jpg',
            ],
            [
                'bengkel_id' => '15',
                'gambar' => 'bengkel/tambalban_paknur.jpg',
            ],
            [
                'bengkel_id' => '16',
                'gambar' => 'bengkel/tambalban_sukirno.jpg',
            ],
            [
                'bengkel_id' => '17',
                'gambar' => 'bengkel/tambalban_slamet.jpg',
            ],
            [
                'bengkel_id' => '18',
                'gambar' => 'bengkel/tambalban_pakyanto.jpg',
            ],
            [
                'bengkel_id' => '19',
                'gambar' => 'bengkel/tambalban_trisno.jpg',
            ],
            [
                'bengkel_id' => '20',
                'gambar' => 'bengkel/tambalban_didi.jpg',
            ],
            [
                'bengkel_id' => '21',
                'gambar' => 'bengkel/tambalban_tarjono.jpg',
            ],
            [
                'bengkel_id' => '22',
                'gambar' => 'bengkel/tambalban_taryono1.jpg',
            ],
            [
                'bengkel_id' => '22',
                'gambar' => 'bengkel/tambalban_taryono2.jpg',
            ],
            [
                'bengkel_id' => '23',
                'gambar' => 'bengkel/tambalban_sarjono.jpg',
            ]
        ];

        \DB::table('gambars')->insert($gambars);
    }
}
