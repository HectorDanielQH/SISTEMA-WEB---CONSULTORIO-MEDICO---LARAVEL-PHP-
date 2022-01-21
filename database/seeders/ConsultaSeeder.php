<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConsultaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return \DB::table('especialidades')->insert([
            [
                "nombre_especialidad" => "Pediatría",
                "created_at" => now()
            ],
            [
                "nombre_especialidad" => "Gineco-obstetricia",
                "created_at" => now()
            ],
            [
                "nombre_especialidad" => "Cirugía General",
                "created_at" => now()
            ],
            [
                "nombre_especialidad" => "Medicina Interna",
                "created_at" => now()
            ]
        ]);
    }
}
