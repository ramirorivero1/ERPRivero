<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'Rol';
    public $timestamps = false;
    protected $fillable = ['nombreRol'];
}
