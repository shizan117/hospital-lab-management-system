<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
        'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'user_type' => 'admin',
        ]);

        User::create([
            'name' => 'Staff User',
            'email' => 'staff@gmail.com',
            'password' => Hash::make('staff@gmail.com'),
            'user_type' => 'staff',
        ]);
    }
}
