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
        return view('usuario.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Aquí va la vista para crear un nuevo usuario
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos
    $request->validate([
        'rut' => 'required|max:15',
        'nombre' => 'required|max:50',
        'apellido' => 'required|max:50',
        'email' => 'required|max:50',
        'telefono' => 'required|max:20',
    ]);

    // Verificar si el RUT ya existe
     $existe = Usuario::where('rut', $request->rut)->first();

    if ($existe) {
        // Retornar con mensaje de error que el usuario ya existe
        return redirect()->back()
            ->withInput()
            ->withErrors(['rut' => 'Usuario ya registrado con este RUT']);
    }

    // Crear y guardar el nuevo usuario
    Usuario::create($request->all());

    // Redirigir o retornar mensaje
    return redirect()->route('usuario.index')->with('success', 'Usuario registrado correctamente.');
    }



    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
