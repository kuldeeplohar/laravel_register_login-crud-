<?php

namespace Database\Seeders;
use App\Models\UserLogin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        UserLogin::create([
            'name' => 'kuldeep1',
            'email' => 'kuldeep1@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
