<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Testimonio;
use App\Models\Noticia; // ✅ Agregado

class IndexController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        $testimonios = Testimonio::inRandomOrder()->limit(3)->get();
        $noticias = Noticia::latest()->take(5)->get(); // ✅ Agregado

        return view('pages.index', compact('servicios', 'testimonios', 'noticias'));
    }

    public function verServicios(Request $request)
    {
        $query = Servicio::query();

        if ($busqueda = $request->search) {
            // ahora filtramos por 'titulo'
            $query->where('titulo', 'like', "%{$busqueda}%");
        }

        // paginar resultados
        $servicios = $query->paginate(12);

        return view('pages.servicios', compact('servicios'));
    }
    
}
