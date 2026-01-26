<?php

namespace App\Services;


use App\Models\Discipline;
use App\Repositories\DisciplineRepository;
use App\Repositories\LevelRepository;
use App\Traits\CommonFunctions;
use Illuminate\Support\Str;

class LevelService
{
    use CommonFunctions;

    protected $levelRepository;

    public function __construct(LevelRepository $levelRepository)
    {
        $this->levelRepository = $levelRepository;
    }

    public function all()
    {
        $conditions = [
           // 'restaurant_id' => $restaurantId,
            // ['capacity', '>', 4],
            // 'status' => 'available',
        ];

        $relations = ['discipline'];
        //  $relations = ['restaurant', 'orders'];
        return $this->levelRepository->all(
            $conditions,
            ['id', 'name','sequence','description', 'image', 'status','discipline_id'],
            $relations,
            'id',
            'desc',
            null
        );
    }


    public function create($data)
    {
        $path = "levels";
        $imagePath = $this->ImageUpload($data['image'], $path);
        $data['image'] = $imagePath;
        return $this->levelRepository->create($data);
    }


    public function get($levelId)
    {
        return $this->levelRepository->find($levelId);
    }

    public function levelsBy($disciplineId){

        $conditions = [
            'discipline_id' => $disciplineId,
            // ['capacity', '>', 4],
            // 'status' => 'available',
        ];

        $relations = [];
        //  $relations = ['restaurant', 'orders'];
        return $this->levelRepository->all(
            $conditions,
            ['id', 'name','sequence'],
            $relations,
            'id',
            'desc',
            null
        );

    }



    public function update($level, $data)
    {
        $path = "levels";
        if (isset($data['image'])) {
            $this->ImageDelete($level->image);
            $newImagePath = $this->ImageUpload($data['image'], $path);
            $data['image'] = $newImagePath;
        }

        return $this->levelRepository->update($level->id, $data);
    }

    public function delete($level)
    {
        $this->ImageDelete($level->image);
        return $this->levelRepository->delete($level->id);
    }
}
