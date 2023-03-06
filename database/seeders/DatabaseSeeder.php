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
        $this->call(UsuarioSeeder::class); 
        $this->call(KitSeeder::class); 

        \App\Models\Curso::factory()->count(100)->create(); 
    }
}
