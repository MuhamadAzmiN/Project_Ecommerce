<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            "name" => "azmi",
            "email" => "azmi@gmail.com",
            "role" => "superadmin",
            "password" => bcrypt('password'),
            
        ]);

        // Membuat pengguna kedua
        User::factory()->create([
            "name" => "asep",
            "email" => "asep@gmail.com",
            "role" => "admin",
            "password" => bcrypt('password'),
            
        ]);

        // Membuat pengguna ketiga
        User::factory()->create([
            "name" => "budi",
            "email" => "budi@gmail.com",
            "role" => "admin",
            "password" => bcrypt('password'),
            
        ]);
    }
}
