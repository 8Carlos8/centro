<?php

namespace App\Http\Controllers;

use App\Models\Cartelera;
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
        return view('Carteleras.created');
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
        ]);

        /*
public function Evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento');
    }

    public function Sala()
    {
        return $this->belongsTo(Sala::class, 'id_sala');
    }
        */

        Cartelera::create($request->all());
        return redirect()->route('Carteleras.index')->with('success', 'Cartelera creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Carteleras.show', compact('cartelera'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Carteleras.edit', compact('cartelera'));
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
        ]);

        $cartelera->update($request->all());

        return redirect()->route('Cartelera.index')->with('success', 'Cartelera actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cartelera $cartelera)
    {
        $cartelera->delete();

        return redirect()->route('Carteleras.index')->with('success', 'Cartelera eliminado correctamente.');
    }
}
