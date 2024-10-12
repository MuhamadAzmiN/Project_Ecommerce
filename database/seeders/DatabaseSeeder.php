<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // data azmi
        // \App\Models\User::factory()->create([
        //     "name" => "azmi",
        //     "email" => "azmi@gmail.com",
        //     "role" => "admin",
        //     "password" => bcrypt('password')
            
        // ]);

        // \App\Models\User::factory()->create([
        //     "name" => "asep",
        //     "email" => "asep@gmail.com",
        //     "password" => bcrypt('password')
            
        // ]);


        $this->call(BarangSeeder::class);
    }
}
