<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'no' => 1,
            'film' => 'Twenty One Twenty Five',
            'user' => 'fifi1406',
            'rating' => 8.5,
            'review' => 'Sebuah film yang seperti menggambarkan kehidupan kisah cinta dan cita-cita saya',
            'tanggal' => '14 januari 2019',
            
        ],
        [
            'no' => 2,
            'film' => 'StarUp',
            'user' => 'Firoh1234',
            'rating' => 8.0,
            'review' => 'Penuh perjuangan dan cinta',
            'tanggal' => '17 maret 2020',
            
        ],
        [
            'no' => 3,
            'film' => 'Dilwale',
            'user' => 'yoongi1234',
            'rating' => 8.3,
            'review' => 'film nya sungguh mengagumkan',
            'tanggal' => '15 desember 2018',

        ],
        [
            'no' => 4,
            'film' => 'Kisah Nabi Muhammad',
            'user' => 'masfiroh1406',
            'rating' => 1000,
            'review' => 'kisah yang masyallah dan terus menangis setiap perdetik filmnya',
            'tanggal' => '14 juni 2017',

        ],
        [
            'no' => 5,
            'film' => 'Umar bin Khattab r.a.',
            'user' => 'fi231',
            'rating' => 998,
            'review' => 'sahabat nabi yang paling gagah dan menantang orang mekkah jika melarang dirinya berdakwah',
            'tanggal' => '09 januari 1995',

        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
