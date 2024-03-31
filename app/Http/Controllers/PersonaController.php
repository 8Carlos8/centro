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
            'nombre' => 'required|string|max:255',
            'a_paterno' => 'required|string',
            'a_materno' => 'required|string',
            'fecha_nac' => 'required|date',
            'telefono' => 'required|string',
        ]);

        $persona = new Persona();
        $persona->nombre = $request->nombre;
        $persona->a_paterno = $request->a_paterno;
        $persona->a_materno = $request->a_materno;
        $persona->fecha_nac = $request->fecha_nac;
        $persona->telefono = $request->telefono;
        $persona->save();

        return redirect()->route('Personas.index')->with('success', 'Persona creada correctamente.');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $persona = Persona::findOrFail($id);
        return view('Personas.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $persona = Persona::findOrFail($id);
        return view('Personas.edit', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'a_paterno' => 'required|string|max:255',
            'a_materno' => 'required|string|max:255',
            'fecha_nac' => 'required|date',
            'telefono' => 'required|string|max:255',
        ]);

        $persona->update($request->all());

        return redirect()->route('Personas.index')->with('success', 'Persona actualizada correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('Personas.index')->with('success', 'Persona eliminada correctamente.');
    }
}
