<?php

namespace App\Services;


use App\Models\Discipline;
use App\Repositories\DifficultyLevelRepository;
use App\Repositories\DisciplineRepository;
use App\Traits\CommonFunctions;
use Illuminate\Support\Str;

class DifficultyLevelService
{
    use CommonFunctions;

    protected $difficultyLevelRepository;

    public function __construct(DifficultyLevelRepository $difficultyLevelRepository)
    {
        $this->difficultyLevelRepository = $difficultyLevelRepository;
    }

    public function all()
    {
        $conditions = [
           // 'restaurant_id' => $restaurantId,
            // ['capacity', '>', 4],
            // 'status' => 'available',
        ];

        $relations = [];
        //  $relations = ['restaurant', 'orders'];
        return $this->difficultyLevelRepository->all(
            $conditions,
            ['id', 'name','sequence', 'status'],
            $relations,
            'id',
            'desc',
            null
        );
    }


    public function create($data)
    {
        return $this->difficultyLevelRepository->create($data);
    }


    public function get($difficultyLevelId)
    {
        return $this->difficultyLevelRepository->find($difficultyLevelId);
    }

    public function update($difficultyLevel, $data)
    {
        return $this->difficultyLevelRepository->update($difficultyLevel->id, $data);
    }

    public function delete($difficultyLevel)
    {
        return $this->difficultyLevelRepository->delete($difficultyLevel->id);
    }
}
