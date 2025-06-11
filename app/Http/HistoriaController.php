<?php

namespace App\Http\Controllers;

use App\Models\Historia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoriaController extends Controller
{
    public function crear()
    {
        return view('historias.crear');
    }

    public function guardar(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'contenido' => 'required',
            'autor' => 'nullable|max:100'
        ]);

        Historia::create($request->all());

        return redirect()->route('historias')->with('success', 'Historia enviada con éxito');
    }

    public function listar()
    {
        $historias = Historia::latest()->get();
        return view('historias.lista', compact('historias'));
    }
}
