<?php
namespace App\Repositories;

use App\Models\Personas;

class PersonasRepository implements PersonasRepositoryInterface
{
    public function all()
    {
        return Personas::all();
    }

    public function find($id)
    {
        return Personas::findOrFail($id);
    }

    public function create(array $data)
    {
        return Personas::create($data);
    }

    public function update(array $data, $id)
    {
        $persona = Personas::findOrFail($id);
        $persona->update($data);
        return $persona;
    }

    public function delete($id)
    {
        $persona = Personas::findOrFail($id);
        $persona->delete();
    }
     /**
     * Obtener personas con paginación.
     *
     * @param int $perPage Número de registros por página
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate($perPage)
    {
        return Personas::paginate($perPage); // Devuelve los datos paginados
    }
}
