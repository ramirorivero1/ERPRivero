<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enfermero extends Model
{
    protected $table = 'Enfermero';
    public $timestamps = false;
    protected $fillable = [
        'dni','nombre','segundo_nombre','apellido','especialidad_id','direccion','telefono','email'
    ];

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class, 'especialidad_id');
    }
}