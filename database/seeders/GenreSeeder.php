<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'id' => 1,
            'name' => 'Shounen',
            'description' => 'Shōnen manga is an editorial category of Japanese comics targeting an audience of adolescent boys.',
        ]);
    
        Genre::create([
            'id' => 2,
            'name' => 'Drama',
            'description' => 'Drama is a captivating literary genre that is brought to life through performance.',
        ]);
    
        Genre::create([
            'id' => 3,
            'name' => 'School',
            'description' => ' It focuses on school students and is closely related to other genres such as slice of life, action, comedy, and especially romance.',
        ]); 

        Genre::create([
            'id' => 4,
            'name' => 'Horor',
            'description' => ' Horror is a popular one. This film can test the courage of its viewers.',
        ]); 

        Genre::create([
            'id' => 5,
            'name' => 'Adventure',
            'description' => ' This genre usually involves travel or exploration stories.',
        ]); 
    }
}
