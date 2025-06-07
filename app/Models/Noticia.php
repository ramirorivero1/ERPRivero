<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'Noticias';
    public $timestamps = true;
    protected $fillable = ['titulo','contenido'];
}