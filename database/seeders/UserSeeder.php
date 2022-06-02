<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
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
        User::truncate();
        User::create([
            'name' => 'Admin Aplikasi',
            'level' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'sefdani',
            'level' => 'karyawan',
            'email' => 'sefdani@gmail.com',
            'password' => bcrypt('sefdani'),
            'remember_token' => Str::random(60),
        ]);
        User::create([
            'name' => 'maproduction',
            'level' => 'karyawan',
            'email' => 'userma@gmail.com',
            'password' => bcrypt('userma'),
            'remember_token' => Str::random(60),
        ]);
    }
}
