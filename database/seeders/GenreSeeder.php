<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("genre")->insert([
            [
                'name' => 'Drama', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Novel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Biografi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Romance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Islami',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Psikologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drama', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fiksi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Parenting',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Family',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Slice of Life',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
