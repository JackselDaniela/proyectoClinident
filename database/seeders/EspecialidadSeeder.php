<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\especialidad;

class EspecialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        especialidad::create([
            'especialidad'       => 'Endodoncia',
            'codigo_especialidad'=> 'OD-End',

        ]);
        especialidad::create([
            'especialidad'       => 'Ortodoncia',
            'codigo_especialidad'=> 'OD-Ort',

        ]);
    }
}
