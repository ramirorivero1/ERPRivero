<?php

namespace App\Http\Controllers;

use App\Models\TrazabilidadInsumo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrazabilidadInsumoController extends Controller
{
    /**
     * Listado paginado de remitos.
     */


     public function indexRemitos()
     {
         $remitos = TrazabilidadInsumo::query()
             ->whereNotNull('remito')
             ->where('remito', '<>', '')
             ->select([
                 'remito AS codigoRemito',                               // ← alias aquí
                 DB::raw('MAX(COALESCE(fecha_ingreso, fecha_salida)) AS hora'),
                 DB::raw("CASE WHEN SUM(CASE WHEN fecha_salida IS NOT NULL THEN 1 ELSE 0 END)=COUNT(*) THEN 'APROBADO' ELSE 'PENDIENTE' END AS estado"),
                 DB::raw('MAX(destino) AS destino'),
                 DB::raw('COUNT(*) AS items'),
             ])
             ->groupBy('remito')
             ->orderBy('hora', 'desc')
             ->paginate(10);
     
         return view('trazabilidad.operacionesRemitos', compact('remitos'));
     }
     

    /**
     * Muestra el detalle de un remito concreto.
     */
    public function showByRemito(?string $remito)
    {
        if (! $remito) {
            // ✔️ Redirige al listado que realmente existe
            return redirect()->route('trazabilidad.operacionesRemitos');
        }
    
        $movimientos = TrazabilidadInsumo::with('insumo')
            ->porRemito($remito)
            ->orderBy('fecha_ingreso')
            ->get();
    
        return view('trazabilidad.tracking', compact('movimientos', 'remito'));
    }
    

}
