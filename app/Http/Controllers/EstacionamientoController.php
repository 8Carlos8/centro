<?php

namespace App\Http\Controllers;

use App\Models\Estacionamiento;
use App\Models\Cajon;
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
        $cajones = Cajon::all();
        return view('Estacionamientos.create', ['cajones' => $cajones]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_cajon' => 'required',
            'entrada' => 'required',
            'salida' => 'required',
            'estado' => 'required',
        ]);

        $estacionamiento = new Estacionamiento();
        $estacionamiento->id_cajon = $request->id_cajon;
        $estacionamiento->entrada = $request->entrada;
        $estacionamiento->salida = $request->salida;
        $estacionamiento->estado = $request->estado;
        $estacionamiento->save();
        return redirect()->route('Estacionamientos.index')->with('success', 'Estacionamiento creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estacionamiento = Estacionamiento::findOrFail($id);
        return view('Estacionamientos.show', compact('estacionamiento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cajones = Cajon::all();
        $estacionamiento = Estacionamiento::findOrFail($id);
        return view('Estacionamientos.edit', ['cajones' => $cajones], compact('estacionamiento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Estacionamiento $estacionamiento)
    {
        $request->validate([
            'id_cajon' => 'required',
            'entrada' => 'required',
            'salida' => 'required',
            'estado' => 'required',
        ]);

        $estacionamiento->update($request->all());
        return redirect()->route('Estacionamientos.index')->with('success', 'Estacionamiento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estacionamiento = Estacionamiento::findOrFail($id);
        $estacionamiento->delete();
        return redirect()->route('Estacionamientos.index')->with('success', 'Estacionamiento eliminado correctamente.');
    }
}
