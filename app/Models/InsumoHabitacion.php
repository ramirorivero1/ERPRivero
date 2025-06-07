<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsumoHabitacion extends Model
{
    protected $table = 'Insumo_Habitacion';
    public $timestamps = false;
    protected $fillable = ['habitacion_id','insumo_id','fecha','cantidad'];
}
