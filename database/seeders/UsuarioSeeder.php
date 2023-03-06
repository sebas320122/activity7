<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash; 
use Illuminate\Support\Str; 

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usuarios')->insert([
                [ 
                'nombre' => 'Admon', 
                'email' => 'admon@robotics.com','codigo' => 'Adm@2022',
                'rol' => 'Administrative','id_grupo'=>null,
                ],
                [ 
                'nombre' => 'Tecmilenio', 
                'email' => 'tecmilenio@robotics.com','codigo' => 'Adm@2022',
                'rol' => 'Teacher','id_grupo'=>null,
                ],
                [ 
                'nombre' => 'Student', 
                'email' => 'student@robotics.com','codigo' => 'Adm@2022',
                'rol' => 'Student','id_grupo'=>null,
                ]
        ]);
    }
}
