<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => 'Run BTS',
            'user' => 'Min yoongi',
            'rating' => '10',
            'review' => 'di run bts ini kamu bisa merasakan hangatnya kekeluargaan padahal tidak sedarah',
            'tanggal' => '2019-07-12',
            
        ]);

        Review::create([
            'film' => 'StarUp',
            'user' => 'kim namjoon',
            'rating' => '8.5',
            'review' => 'Filmnya mengajarkan tentang perjuangan dan relasi',
            'tanggal' => '2020-05-21',
            
        ]);

        Review::create([
            'film' => 'Nabi Muhammad SAW',
            'user' => 'masfiroh',
            'rating' => '10',
            'review' => 'Tiap episode meneteskan air mata, masyaallah rasulku',
            'tanggal' => '2017-09-14',
            
        ]);

        Review::create([
            'film' => 'Umar Bin Khattab',
            'user' => 'kim taehyung',
            'rating' => '10',
            'review' => 'yang dulunya musuh allah sekarang menjadi kekasih allah',
            'tanggal' => '2021-02-16',
            
        ]);

        Review::create([
            'film' => 'Twenty One Twenty Five',
            'user' => 'jeon jungkook',
            'rating' => '9.0',
            'review' => 'kisahnya seperti kisahku yang mana ada arti perjuangan,cinta, dan cita-cita',
            'tanggal' => '2023-03-13',
            
        ]);
    }
}
