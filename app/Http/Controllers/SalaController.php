<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salas = Sala::all();
        return view('Salas.index', compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Salas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'estado' => 'required',
            'nombre' => 'required',
            'asientos' => 'required',
        ]);

        $sala = new Sala();
        $sala->estado = $request->estado;
        $sala->nombre = $request->nombre;
        $sala->asientos = $request->asientos;
        $sala->save();
        return redirect()->route('Salas.index')->with('success', 'Sala creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $sala = Sala::findOrFail($id);
        return view('Salas.show', compact('sala'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sala = Sala::findOrFail($id);
        return view('Salas.edit', compact('sala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sala $sala)
    {
        $request->validate([
            'estado' => 'required',
            'nombre' => 'required',
            'asientos' => 'required',
        ]);

        $sala->update($request->all());
        return redirect()->route('Salas.index')->with('success', 'Sala actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sala = Sala::findOrFail($id);
        $sala->delete();
        return redirect()->route('Salas.index')->with('success', 'Sala elimanda correctamente.');
    }
}
