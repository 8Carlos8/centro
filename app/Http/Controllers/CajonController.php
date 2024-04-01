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
            'zona' => 'require',
            'cajon' => 'require',
            'estado' => 'require',
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
            'zona' => 'require',
            'cajon' => 'require',
            'estado' => 'require',
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
}
