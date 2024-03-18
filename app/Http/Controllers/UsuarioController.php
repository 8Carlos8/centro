<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Persona;
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

    public function login()
    {
        return view('Usuarios.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $id_persona = $request->input('id_persona');
        // Aquí puedes hacer lo que necesites con id_persona, como pasarlo a la vista

        return view('Usuarios.create', compact('id_persona'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_persona' => 'required',
            'estado' => 'required',
            'correo' => 'required',
            'username' => 'required',
            'password' => 'required',
            'rol' => 'required',
        ]);

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
