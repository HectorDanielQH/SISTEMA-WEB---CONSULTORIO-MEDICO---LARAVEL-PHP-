<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SalarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return \DB::table('salarios')->insert([
            [
                "Salario" => 0.0,
                "Bono" => 500,
                "created_at" => now()
            ],
            [
                "Salario" => 2200,
                "Bono" => 0,
                "created_at" => now()
            ],
            [
                "Salario" => 2200,
                "Bono" => 0,
                "created_at" => now()
            ]
        ]);
    }
}
