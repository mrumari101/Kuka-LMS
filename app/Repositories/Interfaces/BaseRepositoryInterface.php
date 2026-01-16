<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

interface BaseRepositoryInterface
{
    /**
     * 🔹 Get all records with filtering, ordering, relations, and optional pagination
     */

    public function all(
        array $conditions = [],
        array $columns = ['*'],
        array $relations = [],
        ?string $orderBy = null,
        string $direction = 'asc',
        ?int $perPage = null
    );






    /**
     * 🔹 Find a single record by ID with optional columns, relations, and conditions
     */
    public function find(
        int|string $id,
        array $conditions = [],
        array $columns = ['*'],
        array $relations = []
    );

    //public function find($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
}
