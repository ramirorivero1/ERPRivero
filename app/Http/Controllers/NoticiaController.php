<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function create()
    {
        return view('pages.noticias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'contenido' => 'required',
        ]);

        Noticia::create($request->only(['titulo', 'contenido']));

        return redirect()->route('noticias.index')->with('success', 'Noticia publicada');
    }

    public function index()
    {
        $noticias = Noticia::latest()->get();
        return view('pages.noticias', compact('noticias'));
    }
    
}
