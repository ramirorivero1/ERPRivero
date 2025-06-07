<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsumoInternacion extends Model
{
    protected $table = 'Insumo_Internacion';
    public $timestamps = false;
    protected $fillable = ['internacion_id','insumo_id','fecha','cantidad'];
}