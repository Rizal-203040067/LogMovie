<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'Judul Film 1',
            'description' => 'Deskripsi Film 1',
            'poster_path' => '/mBaXZ95R2OxueZhvQbcEWy2DqyO.jpg',
            'category_id' => 1,
            'release_date' => 2023-10-18,
            'actor_id' => 1,
        ]);

        Movie::create([
            'title' => 'Judul Film 2',
            'description' => 'Deskripsi Film 1',
            'poster_path' => '/mBaXZ95R2OxueZhvQbcEWy2DqyO.jpg',
            'category_id' => 1,
            'release_date' => 2023-10-18,
            'actor_id' => 1,
        ]);

        Movie::create([
            'title' => 'Judul Film 3',
            'description' => 'Deskripsi Film 1',
            'poster_path' => '/mBaXZ95R2OxueZhvQbcEWy2DqyO.jpg',
            'category_id' => 1,
            'release_date' => 2023-10-18,
            'actor_id' => 1,
        ]);

        
    }
}
