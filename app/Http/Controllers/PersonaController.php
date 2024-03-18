<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = Persona::all();
        return view('Personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:personas',
            'nombre' => 'required',
            'a_paterno' => 'required',
            'a_materno' => 'required',
            'fecha_nac' => 'required',
            'telefono' => 'required',
        ]);

        Persona::create($request->all());
        return redirect()->route('Usuarios.store');
        return redirect()->route('Personas.index')->with('success', 'Persona creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Personas.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Persona.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'id' => 'required|unique:personas',
            'nombre' => 'required',
            'a_paterno' => 'required',
            'a_materno' => 'required',
            'fecha_nac' => 'required',
            'telefono' => 'required',
        ]);

        $persona->update($request->all());
        return redirect()->route('Personas.index')->with('success', 'Persona actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('Persona.index')->with('success', 'Persona eliminada correctamente.');
    }
}
