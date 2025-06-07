<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    protected $table = 'Especialidad';
    public $timestamps = false;
    protected $fillable = ['nombre'];
}
