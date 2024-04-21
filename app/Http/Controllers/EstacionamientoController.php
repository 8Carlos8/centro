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
            'cajon_inicio' => 'required|integer|exists:cajons,id', // Asegúrate de que sea un ID válido
            'cajon_fin' => 'required|integer|exists:cajons,id', // Asegúrate de que sea un ID válido
            'entrada' => 'required|date',
            'salida' => 'required|date',
            'estado' => 'required|string',
        ]);

        $cajon_id = $request->cajon_inicio; // Asigna el valor del cajón seleccionado como cajon_id

        // Obtener el rango de cajones entre el cajón inicial y el cajón final con sus estados
        $cajones = Cajon::where('id', '>=', $request->cajon_inicio)
            ->where('id', '<=', $request->cajon_fin)
            ->get(['id', 'estado']);

        $estacionamiento = new Estacionamiento();
        $estacionamiento->cajon_id = $cajon_id; // Asigna el cajon_id
        $estacionamiento->cajones = $cajones->toJson(); // Guarda el arreglo de cajones con sus estados
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
            'cajon_inicio' => 'required|integer|exists:cajons,id',
            'cajon_fin' => 'required|integer|exists:cajons,id',
            'entrada' => 'required',
            'salida' => 'required',
            'estado' => 'required',
        ]);

        $cajon_id = $request->cajon_inicio; // Asigna el valor del cajón seleccionado como cajon_id

        // Obtener el rango de cajones entre el cajón inicial y el cajón final con sus estados
        $cajones = Cajon::where('id', '>=', $request->cajon_inicio)
            ->where('id', '<=', $request->cajon_fin)
            ->get(['id', 'estado']);

        // Obtener los datos del formulario
        $estacionamiento->cajones = $cajones->toJson(); // Guarda el arreglo de cajones con sus estados
        $entrada = $request->entrada;
        $salida = $request->salida;
        $estado = $request->estado;

        // Realizar las actualizaciones en el modelo Estacionamiento
        $estacionamiento->update([
            'cajones' => $cajones->toJson(), // Guarda el arreglo de cajones con sus estados
            'entrada' => $entrada,
            'salida' => $salida,
            'estado' => $estado,
        ]);

        // Redirigir a la vista de índice de Estacionamientos con un mensaje de éxito
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

    public function reporteE(Request $request)
    {
        $fecha = $request->fecha;

        // Obtener todos los estacionamientos para la fecha seleccionada
        $estacionamientos = Estacionamiento::whereDate('entrada', $fecha)->get();

        $totalCajones = 0; // Inicializamos el contador de cajones
        $cajonesDisponibles = 0;
        $cajonesOcupados = 0;
        $cajonesReservados = 0;

        // Calcular el número de cajones ocupados y reservados para la fecha seleccionada
        foreach ($estacionamientos as $estacionamiento) {
            $cajones = json_decode($estacionamiento->cajones);
            $totalCajones += count($cajones); // Sumamos el número de cajones en este estacionamiento
            foreach ($cajones as $cajon) {
                // Verificar el estado del cajón y actualizar los contadores correspondientes
                if ($cajon->estado == 0) {
                    $cajonesDisponibles++;
                } elseif ($cajon->estado == 1) {
                    $cajonesOcupados++;
                } elseif ($cajon->estado == 2) {
                    $cajonesReservados++;
                }
            }
        }

        // Verificar si el total de cajones es mayor que cero para evitar la división por cero
        $porcentajeDisponibilidad = $totalCajones > 0 ? ($cajonesDisponibles / $totalCajones) * 100 : 0;

        return view('Estacionamientos.reporteE')->with([
            'fecha' => $fecha,
            'cajonesDisponibles' => $cajonesDisponibles,
            'totalCajones' => $totalCajones,
            'cajonesOcupados' => $cajonesOcupados,
            'cajonesReservados' => $cajonesReservados,
            'porcentajeDisponibilidad' => $porcentajeDisponibilidad,
        ]);
    }
}
