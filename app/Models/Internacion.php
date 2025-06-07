<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internacion extends Model
{
    protected $table = 'Internacion';
    public $timestamps = false;
    protected $fillable = [
        'paciente_id','medico_id','fecha_ingreso','fecha_salida',
        'sala','cama','diagnostico','tratamiento'
    ];
}