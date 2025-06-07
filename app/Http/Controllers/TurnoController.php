<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TurnoController extends Controller
{
    /**
     * Muestra el formulario para sacar un turno.
     */
    public function create()
    {
        return view('pages.turno');

    }

    /**
     * Guarda el turno enviado desde el formulario.
     */
    public function store(Request $request)
    {
        // Validar los datos (podés ajustar los campos según tu formulario)
        $validated = $request->validate([
            'nombre'    => 'required|string|max:50',
            'apellido'  => 'required|string|max:50',
            'dni'       => 'required|numeric',
            'sintomas'  => 'required|string|max:1000',
        ]);

        // Por ahora solo devolvemos los datos como JSON
        return response()->json([
            'mensaje' => 'Turno recibido correctamente',
            'datos'   => $validated
        ]);
    }
}
