<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Empleado::create([
            'nombre' => 'Rocio',
            'apellido' => 'Perez',
            'correo' => 'perezroc01@gmail.com',
            'salario' => 3050
        ]);

        Empleado::create([
            'nombre' => 'Raul',
            'apellido' => 'Coca',
            'correo' => 'coaas02@gmail.com',
            'salario' => 3500
        ]);
        
        Empleado::create([
            'nombre' => 'Diego',
            'apellido' => 'Tellez',
            'correo' => 'diegtell03@gmail.com',
            'salario' => 3500
        ]);
    }
}