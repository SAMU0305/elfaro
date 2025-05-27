<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contacto.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Aquí va la vista para crear un nuevo contacto
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|max:50',
            'email' => 'required|max:50',
            'mensaje' => 'required|max:500',
        ]);

        // Crear y guardar el nuevo contacto
        Contacto::create($request->all());

        // Redirigir o retornar mensaje
        return redirect()->route('contacto.index')->with('success', 'Mensaje enviado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
