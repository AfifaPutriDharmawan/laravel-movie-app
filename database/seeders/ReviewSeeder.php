<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => '1',
            'user' => 'Alex Brian',
            'rating' => '8/10',
            'date' => '1 Oktober 2021',
        ]);
        
       Review::create([
            'id' => 2,
            'movie_id' => '2',
            'user' => 'Baby Girl',
            'rating' => '9/10',
            'date' => '20 November 2021',
        ]);

       Review::create([
            'id' => 3,
            'movie_id' => '3',
            'user' => 'Bryan Elvaro',
            'rating' => '7/10',
            'date' => '28 Desember 2019',
        ]);

       Review::create([
            'id' => 4,
            'movie_id' => '4',
            'user' => 'Alvian Jord',
            'rating' => '6/10',
            'date' => '20 Februari 2020',
        ]);

       Review::create([
            'id' => 5,
            'movie_id' => '5',
            'user' => 'Vino Bastian',
            'rating' => '10/10',
            'date' => '21 Januari 2022',
        ]); 
    }
}