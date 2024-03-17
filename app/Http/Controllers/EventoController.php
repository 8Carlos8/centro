<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evento = Evento::all();
        return view('Eventos.index', compact('evento'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Eventos.created');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_organizador' => 'require',
            'nombre' => 'require',
            'tipo' => 'require',
            'duracion' => 'require',
            'foto' => 'require',
        ]);

        Evento::create($request->all());
        return redirect()->route('Eventos.index')->with('success', 'Evento creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Eventos.edit', compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'id_organizador' => 'require',
            'nombre' => 'require',
            'tipo' => 'require',
            'duracion' => 'require',
            'foto' => 'require',
        ]);

        $evento->update($request->all());
        return redirect()->route('Eventos.index')->with('success', 'Evento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evento $evento)
    {
        $evento->delete();
        return redirect()->route('Eventos.index')->with('success', 'Evento eliminado correctamente.');
    }
}
