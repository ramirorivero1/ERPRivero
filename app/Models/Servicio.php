<?php
// 1. Modelo Servicio (app/Models/Servicio.php)

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = 'Servicio';
    public $timestamps = true;
    protected $fillable = ['titulo','descripcion','imagen'];
}
