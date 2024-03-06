<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use Illuminate\Http\Request;

class BoletoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boletos = Boleto::all();
        return view('Boletos.index', compact('boletos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Boletos.created');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_persona' => 'require',
            'id_evento' => 'require',
            'id_cajon' => 'require',
            'lugaresAp' => 'require',
            'fecha' => 'require',
        ]);

        Boleto::create($request->all());
        return redirect()->route('Boletos.index')->with('success', 'Boleto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Boletos.show', compact('boleto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Boletos.edit', compact('boleto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boleto $boleto)
    {
        $request->validate([
            'id_persona' => 'require',
            'id_evento' => 'require',
            'id_cajon' => 'require',
            'lugaresAp' => 'require',
            'fecha' => 'require',
        ]);

        Boleto::update($request->all());
        return redirect()->route('Boleto.index')->with('success', 'Boleto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Boleto $boleto)
    {
        $boleto->delete();
        return redirect()->route('Boletos.index')->with('success', 'Boleto eliminado correctamente.');
    }
}
