<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::all();
        return view('Usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Usuarios.created');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_persona' => 'require',
            'estado' => 'require',
            'correo' => 'require',
            'username' => 'require',
            'password' => 'require',
            'rol' => 'require',
        ]);

        /*
 public function Persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }
        */

        Usuario::create($request->all());
        return redirect()->route('Usuarios.index')->with('success', 'Usuario creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('Usuarios.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('Usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'id_persona' => 'require',
            'estado' => 'require',
            'correo' => 'require',
            'username' => 'require',
            'password' => 'require',
            'rol' => 'require',
        ]);

        $usuario->update($request->all());
        return redirect()->route('Usuarios.index')->with('success', 'Usuario actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('Usuarios.index')->with('success', 'Usuario elimado correctamente.');
    }
}
