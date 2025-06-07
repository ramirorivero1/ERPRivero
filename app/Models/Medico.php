<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'Medico';
    public $timestamps = false;
    protected $fillable = [
        'dni','nombre','segundo_nombre','apellido','especialidad_id',
        'direccion','telefono','email','licencia'
    ];

    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class, 'especialidad_id');
    }
}
