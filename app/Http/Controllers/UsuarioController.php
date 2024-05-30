<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'email' => 'required|email|unique:usuarios',
            'password' => 'required|string',
        ]);

        return Usuario::create($request->all());
    }

    public function show($id)
    {
        return Usuario::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        
        $request->validate([
            'nombre' => 'string',
            'email' => 'email|unique:usuarios,email,'.$id,
            'password' => 'string',
        ]);

        $usuario->update($request->all());
        return $usuario;
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return response()->json(null, 204);
    }
}
