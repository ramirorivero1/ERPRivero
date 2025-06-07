<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    protected $table = 'Insumo';
    public $timestamps = false;

    protected $fillable = [
        'codigo',
        'nombre',
        'descripcion',
        'cantidad',
        'unidad_medida',
        'estado',
        'ubicacion',
        'fecha_adquisicion',
        'fecha_vencimiento',
        'proveedor',
        'costo'
    ];

    /**
     * Usar `codigo` para route-model binding.
     */
    public function getRouteKeyName(): string
    {
        return 'codigo';
    }

    /**
     * Relación con trazabilidad (usa insumo_id como FK).
     */
    public function trazabilidades()
    {
        return $this->hasMany(TrazabilidadInsumo::class, 'insumo_id');
    }
}
