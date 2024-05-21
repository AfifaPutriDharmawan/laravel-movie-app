<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'num' => '1',
            'title' => 'Jojo Bizarre Adventure',
            'poster' => 'movie-01.jpg',
            'description' => 'Jojos Bizarre Adventure is a story about the Joestar family, who are possessed with intense psychic strength.',
        ],
        [
            'id' => 2,
            'num' => '2',
            'title' => 'Noragami',
            'poster' => 'movie-02.jpg',
            'description' => 'Noragami is an anime series that follows a poor deity named Yato, who desires to become a famous god.',
        ],
        [
            'id' => 3,
            'num' => '3',
            'title' => 'Wind Breaker',
            'poster' => 'movie-03.jpg',
            'description' => 'Haruka Sakura wants nothing to do with weaklings—hes only interested in the strongest of the strong.',
        ],
        [
            'id' => 4,
            'num' => '4',
            'title' => 'Spy × Family',
            'poster' => 'movie-04.jpg',
            'description' => 'The story follows a spy who has to "build a family" to execute a mission, not realizing that his adopted daughter is a telepath, and the woman he agrees to marry is a skilled assassin.',
        ],
        [
            'id' => 5,
            'num' => '5',
            'title' => 'Detective Conan: Black Iron Submarine (2023)',
            'poster' => 'movie-05.jpeg',
            'description' => 'Detective Conan: Black Iron Submarine (2023) has a story about a black-robed organization that infiltrates an advanced technology facility.',
        ],
    ];  

    public function getAllGenres()
    {
        return $this->genres;
    }
}
