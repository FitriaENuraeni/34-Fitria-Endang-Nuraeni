<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role_id' => 1,
            ],
            [
                'name' => 'User 1',
                'email' => 'user1@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role_id' => 2,
            ],
        ]);
    }
}
