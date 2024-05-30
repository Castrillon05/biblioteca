<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index()
    {
        return Evento::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'required|string',
            'fecha' => 'required|date',
        ]);

        return Evento::create($request->all());
    }

    public function show($id)
    {
        return Evento::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::findOrFail($id);
        
        $request->validate([
            'nombre' => 'string',
            'descripcion' => 'string',
            'fecha' => 'date',
        ]);

        $evento->update($request->all());
        return $evento;
    }

    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return response()->json(null, 204);
    }
}
