<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ],

        [
            'no' => 2,
            'judul' => 'Twenty One Twenty Five',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 2022,
            'rating' => 9.8,
        ],

        [
            'no' => 3,
            'judul' => 'StarUp',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 2020,
            'rating' => 9.8,
        ],

        [
            'no' => 4,
            'judul' => 'Love in Contract',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 2022,
            'rating' => 9.8,
        ],

        [
            'no' => 5,
            'judul' => 'Dokter Cha',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 2023,
            'rating' => 9.8,
        ],

    ];

    public function getAllMovies()
    {
        return $this->movies;
    }
}
