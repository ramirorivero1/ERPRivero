<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'Usuario'; // Nombre exacto de la tabla
    protected $primaryKey = 'id';
    public $timestamps = false; // Si no usás created_at / updated_at automáticos

    protected $fillable = [
        'dni',
        'nombre',
        'segundo_nombre',
        'apellido',
        'direccion',
        'telefono',
        'email',
        'rol',
        'contraseña', // 👈 este es el campo real en tu tabla
        'fecha_creacion',
        'estado',
        'foto'
    ];

    protected $hidden = [
        'contraseña',
    ];

    // Cambiamos el nombre del campo password para Auth (si llegás a usar login)
    public function getAuthPassword()
    {
        return $this->contraseña;
    }

    public function testimonios()
    {
        return $this->hasMany(Testimonio::class, 'usuario_id');
    }
}
