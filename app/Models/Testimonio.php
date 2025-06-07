<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    protected $table = 'Testimonios';
    public $timestamps = false;
    protected $fillable = ['usuario_id','contenido','nombre_persona','created_at'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}