<?php

namespace App\Http\Controllers;

use App\Models\Estacionamiento;
use App\Models\Cajon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'id_cajonIni' => 'required',
            'id_cajonFin' => 'required',
            'entrada' => 'required',
            'salida' => 'required',
            'estado' => 'required',
        ]);

        $estacionamiento = new Estacionamiento();
        $estacionamiento->id_cajonIni = $request->id_cajonIni;
        $estacionamiento->id_cajonFin = $request->id_cajonFin;
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
            'id_cajonIni' => 'required',
            'id_cajonFin' => 'required',
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

    public function reporte(Request $request)
    {
        // Obtener la fecha del request
        $fecha = $request->input('fecha');

        // Consulta para contar cajones totales
        $totalCajones = Cajon::count();

        // Consulta para contar cajones ocupados y reservados en la fecha proporcionada
        $cajonesOcupados = Cajon::whereHas('estacionamientos', function ($query) use ($fecha) {
            $query->where('estado', 2) // Estado "ocupado"
                ->whereDate('entrada', $fecha);
        })->count();

        $cajonesReservados = Cajon::whereHas('estacionamientos', function ($query) use ($fecha) {
            $query->where('estado', 3) // Estado "reservado"
                ->whereDate('entrada', $fecha);
        })->count();

        // Calcular porcentaje de disponibilidad
        $porcentajeDisponibilidad = (($totalCajones - $cajonesOcupados - $cajonesReservados) / $totalCajones) * 100;


        // Obtener todos los cajones con su disponibilidad actual
        $todosLosCajones = Cajon::withCount(['estacionamientos as ocupados' => function ($query) use ($fecha) {
            $query->where('estado', 2) // Estado "ocupado"
                ->whereDate('entrada', $fecha);
        }])
            ->withCount(['estacionamientos as reservados' => function ($query) use ($fecha) {
                $query->where('estado', 3) // Estado "reservado"
                    ->whereDate('entrada', $fecha);
            }])
            ->get();

        return view('estacionamientos.reporte')->with([
            'totalCajones' => $totalCajones,
            'cajonesOcupados' => $cajonesOcupados,
            'cajonesReservados' => $cajonesReservados,
            'porcentajeDisponibilidad' => $porcentajeDisponibilidad,
            'todosLosCajones' => $todosLosCajones,
        ]);
    }
}
