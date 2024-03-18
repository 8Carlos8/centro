<?php

namespace App\Http\Controllers;

use App\Models\Estacionamiento;
use Illuminate\Http\Request;

class EstacionamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estacionamientos = Estacionamiento::all();
        return view('Estacionamientos.index', compact('estacionamientos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Estacionamientos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'require',
            'estado' => 'require',
            'ultimocambio' => 'require',
        ]);

        Estacionamiento::create($request->all());
        return redirect()->route('Estacionamiento.index')->with('success', 'Estacionamiento creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Estacionamiento.show', compact('estacionamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Estacionamiento.edit', compact('estacionamiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estacionamiento $estacionamiento)
    {
        $request->validate([
            'nombre' => 'require',
            'estado' => 'require',
            'ultimocambio' => 'require',
        ]);

        $estacionamiento->update($request->all());
        return redirect()->route('Estacionamiento.index')->with('success', 'Estacionamiento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Estacionamiento $estacionamiento)
    {
        $estacionamiento->delete();
        return redirect()->route('Estacionamiento.index')->with('success', 'Estacionamiento eliminado correctamente.');
    }
}
