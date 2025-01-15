<?php

namespace App\Http\Controllers;

use App\Models\personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $personas = personas::all();
        return view('personas.index', compact('personas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personas.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'email' => 'required|email|unique:personas,email',
        ]);

        personas::create($request->all());
        return redirect()->route('personas.index')->with('success', 'Persona creada exitosamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show(personas $personas)
    {
        return view('personas.show', compact('personas'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(personas $persona)
    {
        return view('personas.edit', compact('persona'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, personas $persona)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'email' => 'required|email|unique:personas,email,' . $persona->id,
        ]);

        $persona->update($request->all());
        return redirect()->route('personas.index')->with('success', 'Persona actualizada exitosamente.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(personas $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('success', 'Persona eliminada exitosamente.');
    }

}
