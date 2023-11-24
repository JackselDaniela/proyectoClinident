<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\registrar_tratamiento;

class TratamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        registrar_tratamiento::create([
            'nom_tratamiento' => 'Blanqueamiento',
            'costo_tratamiento' => '30$',
            'codigo_tratamiento' => '0001',
            'fecha_añadido' => '10/10/2013',
            'especialidad_tratamiento' => 'Odontologia General',

        ]);
        registrar_tratamiento::create([
            'nom_tratamiento' => 'Tratamiento de Conducto',
            'costo_tratamiento' => '200$',
            'codigo_tratamiento' => '0002',
            'fecha_añadido' => '11/10/2013',
            'especialidad_tratamiento' => 'Endodoncia',

        ]);
        registrar_tratamiento::create([
            'nom_tratamiento' => 'Extraccion de Pieza',
            'costo_tratamiento' => '50$',
            'codigo_tratamiento' => '0003',
            'fecha_añadido' => '11/10/2013',
            'especialidad_tratamiento' => 'Odontología General',

        ]);
        registrar_tratamiento::create([
            'nom_tratamiento' => 'Limpieza',
            'costo_tratamiento' => '20$',
            'codigo_tratamiento' => '0004',
            'fecha_añadido' => '12/10/2013',
            'especialidad_tratamiento' => 'Odontología General',

        ]);
    }
}
