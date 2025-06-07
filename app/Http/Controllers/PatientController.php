<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class PatientController extends Controller
{
    /**
     * Buscar pacientes por nombre, apellido o DNI
     */
    public function search(Request $request)
    {
        try {
            $query = $request->input('query');

            if (!$query) {
                return response()->json(['message' => 'Debe ingresar un término de búsqueda.'], 422);
            }

            $resultados = Paciente::where('nombre', 'like', "%{$query}%")
                ->orWhere('apellido', 'like', "%{$query}%")
                ->orWhere('dni', 'like', "%{$query}%")
                ->get();

            return response()->json($resultados);

        } catch (\Exception $e) {
            Log::error('Error en búsqueda de paciente: ' . $e->getMessage());
            return response()->json(['error' => 'Ocurrió un error durante la búsqueda.'], 500);
        }
    }
}
