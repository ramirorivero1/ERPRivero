<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table = 'Habitacion';
    public $timestamps = false;
    protected $fillable = ['numero','piso','capacidad','tipo'];
}
