<?php

namespace App\Repositories;

interface PersonasRepositoryInterface
{
    public function all();
    public function find($id);
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
    /**
     * Obtener personas con paginación.
     *
     * @param int $perPage Número de registros por página
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate($perPage);
}

