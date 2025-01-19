<?php

namespace App\Services;

use App\Repositories\PersonasRepositoryInterface;

class PersonasService
{
    protected $personasRepository;

    /**
     * Constructor para inyectar el repositorio de personas.
     */
    public function __construct(PersonasRepositoryInterface $personasRepository)
    {
        $this->personasRepository = $personasRepository;
    }

    /**
     * Obtener todas las personas.
     */
    /*public function getAllPersonas()
    {
        return $this->personasRepository->all();
    }

    /**
     * Obtener todas las personas con paginación.
     *
     * @param int $perPage Número de registros por página
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getAllPersonas($perPage = 10)
    {
        return $this->personasRepository->paginate($perPage);
    }

    /**
     * Obtener una persona por su ID.
     */
    public function getPersonaById($id)
    {
        return $this->personasRepository->find($id);
    }

    /**
     * Crear una nueva persona.
     */
    public function createPersona(array $data)
    {
        return $this->personasRepository->create($data);
    }

    /**
     * Actualizar una persona existente.
     */
    public function updatePersona(array $data, $id)
    {
        return $this->personasRepository->update($data, $id);
    }

    /**
     * Eliminar una persona por su ID.
     */
    public function deletePersona($id)
    {
        return $this->personasRepository->delete($id);
    }
}
