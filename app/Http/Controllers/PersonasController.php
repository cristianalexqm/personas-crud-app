<?php

namespace App\Http\Controllers;

use App\Services\PersonasService;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    protected $personasService;

    /**
     * Constructor para inyectar el servicio de personas.
     */
    public function __construct(PersonasService $personasService)
    {
        $this->personasService = $personasService;
    }

    /**
     * Mostrar una lista de todas las personas.
     */
    public function index()
    {
        $personas = $this->personasService->getAllPersonas();
        return view('personas.index', compact('personas'));
    }

    /**
     * Mostrar el formulario para crear una nueva persona.
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Guardar una nueva persona en la base de datos.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'email' => 'required|email|unique:personas,email',
        ]);

        $this->personasService->createPersona($data);
        return redirect()->route('personas.index')->with('success', 'Persona creada exitosamente.');
    }

    /**
     * Mostrar los detalles de una persona específica.
     */
    public function show($id)
    {
        $persona = $this->personasService->getPersonaById($id);
        return view('personas.show', compact('persona'));
    }

    /**
     * Mostrar el formulario para editar una persona existente.
     */
    public function edit($id)
    {
        $persona = $this->personasService->getPersonaById($id);
        return view('personas.edit', compact('persona'));
    }

    /**
     * Actualizar una persona en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'email' => 'required|email|unique:personas,email,' . $id,
        ]);

        $this->personasService->updatePersona($data, $id);
        return redirect()->route('personas.index')->with('success', 'Persona actualizada exitosamente.');
    }

    /**
     * Eliminar una persona de la base de datos.
     */
    public function destroy($id)
    {
        $this->personasService->deletePersona($id);
        return redirect()->route('personas.index')->with('success', 'Persona eliminada exitosamente.');
    }
}
