<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("detail_genre")->insert([
            [
                'book_id' => 1,
                'genre_id' => 2,
            ],
            [
                'book_id' => 1,
                'genre_id' => 4,
            ],
            [
                'book_id' => 2,
                'genre_id' => 3,
            ],
            [
                'book_id' => 2,
                'genre_id' => 5,
            ],
            [
                'book_id' => 3,
                'genre_id' => 6,
            ],
            [
                'book_id' => 4,
                'genre_id' => 9,
            ],
            [
                'book_id' => 4,
                'genre_id' => 10,
            ],
            [
                'book_id' => 4,
                'genre_id' => 5,
            ],
            [
                'book_id' => 5,
                'genre_id' => 2,
            ],
            [
                'book_id' => 5,
                'genre_id' => 8,
            ],
            [
                'book_id' => 5,
                'genre_id' => 5,
            ],
            [
                'book_id' => 5,
                'genre_id' => 10,
            ],
        ]);
    }
}
