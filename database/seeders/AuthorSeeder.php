<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("authors")->insert([
            [
                'name' => 'Ari Ghorir Atiq',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sir John Lubbock',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Suci Indriyani',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tere Liye',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kiki Barkiah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
