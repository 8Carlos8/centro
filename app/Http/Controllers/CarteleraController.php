<?php

namespace App\Http\Controllers;

use App\Models\Cartelera;
use App\Models\Evento;
use App\Models\Sala;
use Illuminate\Http\Request;

class CarteleraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carteleras = Cartelera::all();
        return view('Carteleras.index', compact('carteleras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $eventos = Evento::all();
        $salas = Sala::all();
        return view('Carteleras.create', ['eventos' => $eventos], ['salas' => $salas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_evento' => 'required',
            'id_sala' => 'required',
            'estado' => 'required',
            'inicio' => 'required',
            'fin' => 'required',
            'lugares' => 'required',
        ]);

        $cartelera = new Cartelera();
        $cartelera->id_evento = $request->id_evento;
        $cartelera->id_sala = $request->id_sala;
        $cartelera->estado = $request->estado;
        $cartelera->inicio = $request->inicio;
        $cartelera->fin = $request->fin;
        $cartelera->lugares = $request->lugares;
        $cartelera->save();
        return redirect()->route('Carteleras.index')->with('success', 'Cartelera creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cartelera = Cartelera::findOrFail($id);
        $eventos = Evento::all();
        return view('Carteleras.show', ['eventos' => $eventos], compact('cartelera'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $eventos = Evento::all();
        $salas = Sala::all();
        $cartelera = Cartelera::findOrFail($id);
        return view('Carteleras.edit', ['eventos' => $eventos, 'salas' => $salas], compact('cartelera'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cartelera $cartelera)
    {
        $request->validate([
            'id_evento' => 'required',
            'id_sala' => 'required',
            'estado' => 'required',
            'inicio' => 'required',
            'fin' => 'required',
            'lugares' => 'required',
        ]);

        $cartelera->update($request->all());

        return redirect()->route('Carteleras.index')->with('success', 'Cartelera actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cartelera = Cartelera::findOrFail($id);
        $cartelera->delete();
        return redirect()->route('Carteleras.index')->with('success', 'Cartelera eliminado correctamente.');
    }
}
