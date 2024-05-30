<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultaController extends Controller
{
    public function index()
    {
        return Multa::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'usuario_id' => 'required|exists:usuarios,id',
            'monto' => 'required|numeric',
            'motivo' => 'required|string',
        ]);

        return Multa::create($request->all());
    }

    public function show($id)
    {
        return Multa::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $multa = Multa::findOrFail($id);
        
        $request->validate([
            'usuario_id' => 'exists:usuarios,id',
            'monto' => 'numeric',
            'motivo' => 'string',
        ]);

        $multa->update($request->all());
        return $multa;
    }

    public function destroy($id)
    {
        $multa = Multa::findOrFail($id);
        $multa->delete();
        return response()->json(null, 204);
    }
}