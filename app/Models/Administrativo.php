<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model
{
    protected $table = 'Administrativo';
    public $timestamps = false;
    protected $fillable = [
        'dni', 'nombre', 'segundo_nombre', 'apellido', 'direccion', 'telefono', 'email'
    ];
}
