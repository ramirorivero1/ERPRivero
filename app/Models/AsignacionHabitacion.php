<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsignacionHabitacion extends Model
{
    protected $table = 'Asignacion_Habitacion';
    public $timestamps = false;
    protected $fillable = [
        'habitacion_id', 'medico_id', 'enfermero_id', 'fecha'
    ];

    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'habitacion_id');
    }

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }

    public function enfermero()
    {
        return $this->belongsTo(Enfermero::class, 'enfermero_id');
    }
}