<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LibroController extends Controller
{
    public function index()
    {
        return Libro::all();
    }

    public function store(Request $request)
    {
        return Libro::create($request->all());
    }

    public function show($id)
    {
        return Libro::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $libro = Libro::findOrFail($id);
        $libro->update($request->all());
        return $libro;
    }

    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);
        $libro->delete();
        return 204;
    }
}
