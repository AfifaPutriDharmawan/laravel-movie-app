<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'num' => '1',
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'user' => 'Alex Brian',
            'rating' => '4',
            'date' => '1 Oktober 2021',
        
        ],
        [
            'id' => 2,
            'num' => '2',
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'user' => 'Baby Girl',
            'rating' => '4',
            'date' => '20 November 2021',
        ],
        [
            'id' => 3,
            'num' => '3',
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'user' => 'Bryan Elvaro',
            'rating' => '5',
            'date' => '28 Desember 2019',
        ],
        [
            'id' => 4,
            'num' => '4',
            'title' => 'Spy x Family',
            'poster' => 'movie-04.jpg',
            'user' => 'Alvian Jord',
            'rating' => '5',
            'date' => '20 Februari 2020',
        ],
        [
            'id' => 5,
            'num' => '5',
            'title' => 'Detective Conan: Black Iron Submarine (2023)',
            'poster' => 'movie-05.jpeg',
            'user' => 'Vino Bastian',
            'rating' => '5',
            'date' => '21 Januari 2022',
        ],
    ];  

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
