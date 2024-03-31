<?php

namespace App\Http\Controllers;

use App\Models\Organizador;
use App\Models\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class OrganizadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizadores = Organizador::all();
        return view('Organizadores.index', compact('organizadores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $personas = Persona::all();
        return view('Organizadores.create', ['personas' => $personas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_persona' => 'required|numeric',
            'estado' => 'required|numeric',
            'razonSoc' => 'required|string',
            'direccion' => 'required|string',
        ]);

        $organizador = new Organizador();
        $organizador->id_persona = $request->id_persona;
        $organizador->estado = $request->estado;
        $organizador->razonSoc = $request->razonSoc;
        $organizador->direccion = $request->direccion;
        $organizador->save(); // Guardar el nuevo organizador en la base de datos

        return redirect()->route('Organizadores.index')->with('success', 'Organizador creado correctamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $organizador = Organizador::findOrFail($id);
        return view('Organizadores.show', compact('organizador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $personas = Persona::all();
        $organizador = Organizador::findOrFail($id);
        return view('Organizadores.edit', ['personas' => $personas], compact('organizador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organizador $organizador)
    {
        $request->validate([
            'id_persona' => 'required',
            'estado' => 'required',
            'razonSoc' => 'required',
            'direccion' => 'required',
        ]);

        $organizador->update($request->all());
        return redirect()->route('Organizadores.index')->with('success', 'Organizador actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $organizador = Organizador::findOrFail($id);
        $organizador->delete();
        return redirect()->route('Organizadores.index')->with('success', 'Organizador eliminado correctamente.');
    }
}
