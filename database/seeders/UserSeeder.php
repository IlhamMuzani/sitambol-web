<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin123@gmail.com',
                'password' => '$2y$10$XO1Kig8JP1cVt6AKq0I7z.h66Bo5Q5Ai4sSmJoXkkTYJ95/gAe/YK',
            ],
        ];

        \DB::table('users')->insert($users);
    }
}
