<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::Create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123'),
            'education' => 'S1',
            'birdth_date' => '2000-01-01',
            'university' => 'Universitas Contoh',
            'phone_number' => '08123456789',
            'profile_picture' => 'img/default.png',
        ],
        [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123'),
            'education' => 'S1',
            'birdth_date' => '2000-01-01',
            'university' => 'Universitas Contoh',
            'phone_number' => '08123456789',
            'profile_picture' => 'img/default.png',
            'role' => 'admin',
        ]
    );
    }
}
