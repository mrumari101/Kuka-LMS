<?php

namespace App\Repositories;

use App\Repositories\Interfaces\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Fetch all records with optional conditions, relations, ordering, and pagination.
     */
    public function all(
        array $conditions = [],
        array $columns = ['*'],
        array $relations = [],
        ?string $orderBy = null,
        string $direction = 'asc',
        ?int $perPage = null
    ) {
        $query = $this->model->newQuery();

        // 🔹 Apply relations if provided
        if (!empty($relations)) {
            $query->with($relations);
        }

        // 🔹 Apply where conditions
        foreach ($conditions as $key => $value) {
            // if numeric array (e.g., [['capacity', '>', 4]])
            if (is_int($key) && is_array($value)) {
                $query->where(...$value);
            }
            // if associative array (e.g., ['restaurant_id' => 1])
            else {
                $query->where($key, $value);
            }
        }

        // 🔹 Apply order by
        if ($orderBy) {
            $query->orderBy($orderBy, $direction);
        }

        // 🔹 Return paginated or all results
        return $perPage
            ? $query->paginate($perPage, $columns)
            : $query->get($columns);
    }



    public function find(
        int|string $id,
        array $conditions = [],
        array $columns = ['*'],
        array $relations = []
    ) {
        $query = $this->model->newQuery();

        if (!empty($relations)) {
            $query->with($relations);
        }

        foreach ($conditions as $key => $value) {
            if (is_int($key) && is_array($value)) {
                $query->where(...$value);
            } else {
                $query->where($key, $value);
            }
        }

        return $query->findOrFail($id, $columns);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $record = $this->model->findOrFail($id);
        $record->update($data);
        return $record;
    }

    public function delete($id)
    {
        $record = $this->model->findOrFail($id);
        return $record->delete();
    }
}
