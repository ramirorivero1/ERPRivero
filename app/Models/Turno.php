<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'Turno';
    public $timestamps = false;
    protected $fillable = ['paciente_id','medico_id','fecha','hora','sala','tipo_turno','estado'];
}
