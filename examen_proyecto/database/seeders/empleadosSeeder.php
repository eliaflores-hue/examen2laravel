<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class empleadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $data = [
        ['nombre'=>'Ana','apellido'=>'Rojas','correo'=>'ana.rojas@ej.com','salario'=>4500.00],
        ['nombre'=>'Luis','apellido'=>'Vargas','correo'=>'luis.vargas@ej.com','salario'=>5200.00],
        ['nombre'=>'Marta','apellido'=>'Guzmán','correo'=>'marta.guzman@ej.com','salario'=>4800.00],
    ];
    foreach ($data as $e) { Empleado::create($e); }
    }
}
