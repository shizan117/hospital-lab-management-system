<?php

namespace Database\Seeders;

use App\Models\Backend\DoctorsCategory;
use App\Models\Backend\Doctor;
use App\Models\Backend\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create users
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin@gmail.com'),
            'user_type' => 'admin',
        ]);

        User::create([
            'name' => 'Staff',
            'email' => 'staff@gmail.com',
            'password' => Hash::make('staff@gmail.com'),
            'user_type' => 'staff',
        ]);

        // Create roles
        Role::create(['name' => 'doctors']);
        Role::create(['name' => 'settings']);
        Role::create(['name' => 'new']);

        // Create doctor categories
        $category1 = DoctorsCategory::create([
            'name' => 'Diabetes and Child Diseases',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DoctorsCategory::create([
            'name' => 'Cardiology',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DoctorsCategory::create([
            'name' => 'Orthopedics',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        // Add doctor under first category
        Doctor::create([
            'name' => 'ডাঃ ওয়াজেদ জামিল',
            'doctors_category_id' => $category1->id,
            'specialty' => 'ডায়াবেটিস ও শিশু রোগের চিকিৎসক',
            'qualification' => 'এমবিবিএস, এফসিজিপি, সিসিডি (বারডেম), সিএমইউ
এসএমও, ডিপার্টমেন্ট অব জেনারেল এন্ড কলোরেক্টাল সার্জারী বাংলাদেশ স্পেশালাইজড হাসপাতাল, ঢাকা।',
            'experience' => '10',
            'description' => 'প্রতি বুধবার ও শুক্রবার',
            'image' => 'doctor.png', // or you can use a demo image path like 'doctors/jamil.jpg
        ]);
    }
}
