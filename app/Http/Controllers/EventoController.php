<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use App\Models\Organizador;
use App\Models\Estacionamiento;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('Eventos.index', compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organizadores = Organizador::all();
        $estacionamientos = Estacionamiento::all();
        return view('Eventos.create', ['organizadores' => $organizadores], ['estacionamientos' => $estacionamientos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_organizador' => 'required',
            'id_estacionamiento' => 'required',
            'nombre' => 'required',
            'tipo' => 'required',
            'duracion' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Ajusta las reglas de validación para la carga de imágenes
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120', // Ajusta las reglas de validación para la carga de imágenes
        ]);

        $posterPath = $request->file('poster')->store('posters', 'public');
        $bannerPath = $request->file('banner')->store('banners', 'public');

        $evento = new Evento();
        $evento->id_organizador = $request->id_organizador;
        $evento->id_estacionamiento = $request->id_estacionamiento;
        $evento->nombre = $request->nombre;
        $evento->tipo = $request->tipo;
        $evento->duracion = $request->duracion;
        $evento->poster = $posterPath;
        $evento->banner = $bannerPath;

        $evento->save();
        return redirect()->route('Eventos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $evento = Evento::findOrFail($id);
        return view('Eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $organizadores = Organizador::all();
        $estacionamientos = Estacionamiento::all();
        $evento = Evento::findOrFail($id);
        return view('Eventos.edit', ['organizadores' => $organizadores, 'estacionamientos' => $estacionamientos], compact('evento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evento $evento)
    {
        $request->validate([
            'id_organizador' => 'required',
            'id_estacionamiento' => 'required',
            'nombre' => 'required',
            'tipo' => 'required',
            'duracion' => 'required',
            'poster' => 'required',
            'banner' => 'required',
        ]);

        $evento->update($request->all());
        return redirect()->route('Eventos.index')->with('success', 'Evento actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return redirect()->route('Eventos.index')->with('success', 'Evento eliminado correctamente.');
    }
}
