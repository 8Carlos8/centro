<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use App\Models\Usuario;
use App\Models\Cartelera;
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
        $usuarios = Usuario::all();
        $carteleras = Cartelera::all();
        return view('Boletos.create', ['usuarios' => $usuarios], ['carteleras' => $carteleras]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'require',
            'id_cartelera' => 'require',
            'noBoletos' => 'require',
        ]);

        $boleto = new Boleto();
        $boleto->id_usuario = $request->id_usuario;
        $boleto->id_cartelera = $request->id_cartelera;
        $boleto->noBoletos = $request->noBoletos;
        $boleto->save();
        return redirect()->route('Boletos.index')->with('success', 'Boleto creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $boleto = Boleto::findOrFail($id);
        return view('Boletos.show', compact('boleto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuarios = Usuario::all();
        $carteleras = Cartelera::all();
        $boleto = Boleto::findOrFail($id);
        return view('Boletos.edit', ['usuarios' => $usuarios, 'carteleras' => $carteleras], compact('boleto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boleto $boleto)
    {
        $request->validate([
            'id_usuario' => 'require',
            'id_cartelera' => 'require',
            'noBoletos' => 'require',
        ]);

        Boleto::update($request->all());
        return redirect()->route('Boleto.index')->with('success', 'Boleto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $boleto = Boleto::findOrFail($id);
        $boleto->delete();
        return redirect()->route('Boletos.index')->with('success', 'Boleto eliminado correctamente.');
    }
}
