<?php

namespace App\Http\Controllers;

use App\Models\Fruta;
use Illuminate\Http\Request;

class FrutaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Fruta::with('categoria')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'color' => 'required|string',
            'fecha_cosecha' => 'required|date',
            'categoria_id' => 'required|exists:categorias,id'
        ]);

        return Fruta::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return Fruta::with('categoria')->findOrFail($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'string',
            'color' => 'string',
            'fecha_cosecha' => 'date',
            'categoria_id' => 'exists:categorias,id'
        ]);

        $fruta = Fruta::findOrFail($id);
        $fruta->update($request->all());

        return $fruta;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fruta = Fruta::findOrFail($id);
        $fruta->delete();

        return response()->json(['message' => 'Fruta eliminada correctamente']);
    }
}