<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'Paciente';
    public $timestamps = false;
    protected $fillable = [
        'dni','nombre','segundo_nombre','apellido','fecha_nacimiento',
        'direccion','telefono','email','fecha_ingreso','fecha_salida',
        'historia_clinica','estado','sexo','foto'
    ];
}
