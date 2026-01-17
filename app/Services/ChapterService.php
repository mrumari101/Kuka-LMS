<?php

namespace App\Services;



use App\Repositories\ChapterRepository;
use App\Traits\CommonFunctions;

class ChapterService
{
    use CommonFunctions;

    protected $chapterRepository;

    public function __construct(ChapterRepository $chapterRepository)
    {
        $this->chapterRepository = $chapterRepository;
    }

    public function all()
    {
        $conditions = [
           // 'restaurant_id' => $restaurantId,
            // ['capacity', '>', 4],
            // 'status' => 'available',
        ];

        $relations = ['level'];
        //  $relations = ['restaurant', 'orders'];
        return $this->chapterRepository->all(
            $conditions,
            ['id', 'name','description', 'image', 'status','level_id'],
            $relations,
            'id',
            'desc',
            null
        );
    }


    public function create($data)
    {
        $path = "chapters";
        $imagePath = $this->ImageUpload($data['image'], $path);
        $data['image'] = $imagePath;
        return $this->chapterRepository->create($data);
    }


    public function get($chapterId)
    {
        return $this->chapterRepository->find($chapterId);
    }

    public function update($chapter, $data)
    {
        $path = "chapters";
        if (isset($data['image'])) {
            $this->ImageDelete($chapter->image);
            $newImagePath = $this->ImageUpload($data['image'], $path);
            $data['image'] = $newImagePath;
        }

        return $this->chapterRepository->update($chapter->id, $data);
    }

    public function delete($chapter)
    {
        $this->ImageDelete($chapter->image);
        return $this->chapterRepository->delete($chapter->id);
    }
}
