<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [

    [
        'no' => 1,
        'nama genre' => 'Romantis',
        'deskripsi' => 'genre romance menceritakan kisah cinta yang tercipta di antara para tokoh. Bagaimana cintanya dapat terbangun, dan bagaimana para tokoh menyelesaikan masalah yang ada, genre romance dapat membuat para penonton ikut bahagia atau sedih, tergantung pada akhir film yang dibuat.',

    ],
    [
        'no' => 2,
        'nama genre' => 'Komedi',
        'deskripsi' => 'menciptakan sebuah cerita yang lucu dan dapat membuat penonton tertawa. Dalam genre film ini, penonton dapat tertawa baik dari adegan tokoh, percakapan, atau alur ceritanya.',

    ],
    [
        'no' => 3,
        'nama genre' => 'Aksi',
        'deskripsi' => 'bercerita mengenai konfrontasi fisik antara tokoh, yang melibatkan aksi dalam filmnya. Film aksi merupakan salah satu genre yang populer dalam industri film karena menciptakan rasa tegang bagi para penontonnya.',

    ],
    [
        'no' => 4,
        'nama genre' => 'Horor',
        'deskripsi' => 'Genre horor sering diasosiakan dengan kisah yang memiliki atau menceritakan tokoh dan pertemuannya dengan hantu, meskipun tidak selalu, namun hantu seringkali dapat menciptakan rasa takut bagi penonton.',

    ],
    [
        'no' => 5,
        'nama genre' => 'Drama',
        'deskripsi' => 'menceritakan kisah dari sebuah tokoh yang dihadapkan pada sebuah masalah, dimana dia harus menyelesaikan masalah tersebut, dalam cerita, juga ditunjukkan hal yang dapat menciptakan rasa relevan bagi para penonton, karena genre drama pada umumnya dibuat berdasarkan kisah atau stereotip yang ada.',

    ],
];

public function getAllGenres()
{
    return $this->genres;
}
}
