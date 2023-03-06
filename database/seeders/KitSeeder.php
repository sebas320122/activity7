<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kits')->insert([
            [ 
            'nom_kit' => 'StarterKit', 
            'descripcion' => 'Contiene...',
            ],
            [ 
            'nom_kit' => 'Educational Robotics Kit', 
            'descripcion' => 'Contiene...',
            ],
            [ 
            'nom_kit' => 'Kit5', 
            'descripcion' => 'Contiene...',
            ]
            
    ]);
    }
}
