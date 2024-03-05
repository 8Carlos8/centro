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
        return view('Sala.index', compact('salas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Salas.created');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'estado' => 'require',
            'nombre' => 'require',
            'asientos' => 'require',
        ]);

        Sala::create($request->all());
        return redirect()->route('Salas.index')->with('success', 'Sala creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Salas.show', compact('sala'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Sala.edit', compact('sala'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sala $sala)
    {
        $request->validate([
            'estado' => 'require',
            'nombre' => 'require',
            'asientos' => 'require',
        ]);

        $sala->update($request->all());
        return redirect()->route('Salas.index')->with('success', 'Sala actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sala $sala)
    {
        $sala->delete();
        return redirect()->route('Salas.index')->with('success', 'Sala elimanda correctamente.');
    }
}
