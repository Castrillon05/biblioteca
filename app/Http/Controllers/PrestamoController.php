<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



namespace App\Http\Controllers\Api;

use App\Models\Prestamo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrestamoController extends Controller
{
    public function index()
    {
        return Prestamo::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'libro_id' => 'required|exists:libros,id',
            'usuario_id' => 'required|exists:usuarios,id',
            'fecha_prestamo' => 'required|date',
            'fecha_devolucion' => 'nullable|date',
        ]);

        return Prestamo::create($request->all());
    }

    public function show($id)
    {
        return Prestamo::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $prestamo = Prestamo::findOrFail($id);
        
        $request->validate([
            'libro_id' => 'exists:libros,id',
            'usuario_id' => 'exists:usuarios,id',
            'fecha_prestamo' => 'date',
            'fecha_devolucion' => 'nullable|date',
        ]);

        $prestamo->update($request->all());
        return $prestamo;
    }

    public function destroy($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        $prestamo->delete();
        return response()->json(null, 204);
    }
}

