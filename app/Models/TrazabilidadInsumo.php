<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrazabilidadInsumo extends Model
{
    protected $table = 'Trazabilidad_Insumo';
    public $timestamps = false;
    protected $fillable = [
        'remito',
        'insumo_id',
        'fecha_ingreso',
        'fecha_salida',
        'cantidad',
        'destino',
        'motivo',
        'autorizado_por',
        'observaciones',
    ];

    // Scope para filtrar un remito
    public function scopePorRemito($query, $numero)
    {
        return $query->where('remito', $numero);
    }

    // Relación al insumo
    public function insumo()
    {
        return $this->belongsTo(Insumo::class, 'insumo_id');
    }
}
