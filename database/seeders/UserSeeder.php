<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'wpm',
            'email' => 'wpm@gmail.com',
            'user_type' => 'Business',
            'password' => bcrypt('wpm123'),
            'trial_until' => '31-12-2030'
        ]);
    }
}
