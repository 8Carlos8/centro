<?php

namespace App\Http\Controllers;

use App\Models\Boleto;
use App\Models\Usuario;
use App\Models\Cartelera;
use App\Models\Cajon;
use App\Models\Estacionamiento;
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
        $cajones = Cajon::all();
        //$cajones = Estacionamiento::all();
        return view('Boletos.create', compact('usuarios', 'carteleras', 'cajones'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_usuario' => 'required',
            'id_cartelera' => 'required',
            'id_cajon' => 'required',
            'noBoletos' => 'required',
            'estado' => 'required',
        ]);

        $boleto = new Boleto();
        $boleto->id_usuario = $request->id_usuario;
        $boleto->id_cartelera = $request->id_cartelera;
        $boleto->id_cajon = $request->id_cajon;
        $boleto->noBoletos = $request->noBoletos;
        $boleto->save();

        // Actualiza el estado del cajón asociado al boleto
        $cajon = Cajon::find($request->id_cajon);
        if ($cajon) {
            $cajon->estado = $request->estado;
            $cajon->save();
        }

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
        $cajones = Cajon::all();
        $boleto = Boleto::findOrFail($id);
        return view('Boletos.edit', ['usuarios' => $usuarios, 'carteleras' => $carteleras, 'cajones' => $cajones], compact('boleto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Boleto $boleto)
    {
        $request->validate([
            'id_usuario' => 'required',
            'id_cartelera' => 'required',
            'id_cajon' => 'required',
            'noBoletos' => 'required',
            'estado' => 'required',
        ]);

        // Actualizamos los datos del boleto
        $boleto->update($request->all());

        // Actualizamos el estado del cajón asociado al boleto
        $cajon = Cajon::find($request->id_cajon);
        if ($cajon) {
            $cajon->estado = $request->estado;
            $cajon->save();
        }

        return redirect()->route('Boletos.index')->with('success', 'Boleto actualizado correctamente.');
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
