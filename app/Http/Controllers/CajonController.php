<?php

namespace App\Http\Controllers;

use App\Models\Cajon;
use Illuminate\Http\Request;

class CajonController extends Controller
{
    public function index()
    {
        $cajones = Cajon::all();
        return view('Cajones.index', compact('cajones'));
    }

    public function create()
    {
        return view('Cajones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'zona' => 'required',
            'cajon' => 'required',
            'estado' => 'required',
        ]);

        $cajon = new Cajon();
        $cajon->zona = $request->zona;
        $cajon->cajon = $request->cajon;
        $cajon->estado = $request->estado;
        $cajon->save();
        return redirect()->route('Cajones.index')->with('success', 'Cajon creado correctamente');
    }

    public function show(string $id)
    {
        $cajon = Cajon::findOrFail($id);
        return view('Cajones.show', compact('cajon'));
    }

    public function edit(string $id)
    {
        $cajon = Cajon::findOrFail($id);
        return view('Cajones.edit', compact('cajon'));
    }

    public function update(Request $request, Cajon $cajon)
    {
        $request->validate([
            'zona' => 'required',
            'cajon' => 'required',
            'estado' => 'required',
        ]);

        $cajon->update($request->all());
        return redirect()->route('Cajones.index')->with('success', 'Cajon actualizado correctamente');
    }

    public function destroy(string $id)
    {
        $cajon = Cajon::findOrFail($id);
        $cajon->delete();
        return redirect()->route('Cajones.index')->with('success', 'Cajon eliminado correctamente');
    }

    public function reporte()
    {
        $cajones = Cajon::all(); // Obtener todos los cajones
        $totalCajones = $cajones->count();
        $cajonD = 0;
        $cajonesDisponibles = $totalCajones;
        $cajonesOcupados = 0;
        $cajonesReservados = 0;

        foreach ($cajones as $cajon) {
            // Verificar el estado del cajón y actualizar los contadores correspondientes
            if ($cajon->estado == 0) {
                $cajonD++;
                $cajonesDisponibles--;
            } elseif ($cajon->estado == 1) {
                $cajonesOcupados++;
            } elseif ($cajon->estado == 2) {
                $cajonesReservados++;
            }
        }

        $porcentajeDisponibilidad = ($cajonesDisponibles / $totalCajones) * 100;

        return view('Cajones.reporte')->with([
            'totalCajones' => $totalCajones,
            'cajonD' => $cajonD,
            'cajonesOcupados' => $cajonesOcupados,
            'cajonesReservados' => $cajonesReservados,
            'porcentajeDisponibilidad' => $porcentajeDisponibilidad,
        ]);
    }
}
