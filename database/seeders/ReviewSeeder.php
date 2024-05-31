<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("reviews")->insert([
            [
                'book_id' => 1,
                'user_id' => 2,
                'review' => 'Quis labore fugiat irure anim culpa exercitation laborum. Cillum adipisicing duis amet aute aliqua commodo amet ut reprehenderit non consequat quis commodo. Pariatur elit enim laborum adipisicing non magna. Nulla quis aute ex dolore officia duis sint.',
                'rating' => 4,
            ],
            [
                'book_id' => 2,
                'user_id' => 2,
                'review' => 'Quis labore fugiat irure anim culpa exercitation laborum. Cillum adipisicing duis amet aute aliqua commodo amet ut reprehenderit non consequat quis commodo. Pariatur elit enim laborum adipisicing non magna. Nulla quis aute ex dolore officia duis sint.',
                'rating' => 5,
            ],
        ]);
    }
}
