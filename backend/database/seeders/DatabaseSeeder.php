<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@sorsucommutersguide.com',
            'password' => bcrypt('password123'),
            'role' => 'admin',
        ]);
    }
}