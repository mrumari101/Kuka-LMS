<?php

namespace App\Services;


use App\Models\Discipline;
use App\Repositories\DisciplineRepository;
use App\Traits\CommonFunctions;
use Illuminate\Support\Str;

class DisciplineService
{
    use CommonFunctions;

    protected $disciplineRepository;

    public function __construct(DisciplineRepository $disciplineRepository)
    {
        $this->disciplineRepository = $disciplineRepository;
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
        return $this->disciplineRepository->all(
            $conditions,
            ['id', 'name','sequence', 'description', 'image', 'status'],
            $relations,
            'id',
            'desc',
            null
        );
    }


    public function create($data)
    {
        $path = "disciplines";
        $imagePath = $this->ImageUpload($data['image'], $path);
        $data['image'] = $imagePath;
        return $this->disciplineRepository->create($data);
    }


    public function get($disciplineId)
    {
        return $this->disciplineRepository->find($disciplineId);
    }

    public function update($discipline, $data)
    {
        $path = "disciplines";
        if (isset($data['image'])) {
            $this->ImageDelete($discipline->image);
            $newImagePath = $this->ImageUpload($data['image'], $path);
            $data['image'] = $newImagePath;
        }

        return $this->disciplineRepository->update($discipline->id, $data);
    }

    public function delete($discipline)
    {
        $this->ImageDelete($discipline->image);
        return $this->disciplineRepository->delete($discipline->id);
    }
}
