<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use HasFactory;

class Empleado extends Model
{
    //
   
    protected $fillable = 
    [
        'nombre',
        'apellido',
        'correo',
        'salario'
    ];
}
