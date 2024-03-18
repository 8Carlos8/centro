<?php

namespace App\Http\Controllers;

use App\Models\Organizador;
use Illuminate\Http\Request;

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
        return view('Organizadores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_persona' => 'require',
            'estado' => 'require',
            'razonsoc' => 'require',
            'direccion' => 'require',
        ]);

        Organizador::create($request->all());
        return redirect()->route('Organizadores.index')->with('success', 'Organizador creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Organizadores.show', compact('organizador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Organizadores.edit', compact('organizador'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Organizador $organizador)
    {
        $request->validate([
            'id_persona' => 'require',
            'estado' => 'require',
            'razonsoc' => 'require',
            'direccion' => 'require',
        ]);

        $organizador->update($request->all());
        return redirect()->route('Organizadores.index')->with('success', 'Organizador actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organizador $organizador)
    {
        $organizador->delete();
        return redirect()->route('Organizadores.index')->with('success', 'Organizador eliminado correctamente.');
    }
}
