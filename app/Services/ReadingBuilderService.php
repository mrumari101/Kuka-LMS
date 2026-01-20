<?php

namespace App\Services;

use App\Repositories\ReadingBuilderRepository;
use App\Traits\CommonFunctions;

class ReadingBuilderService
{
    use CommonFunctions;

    protected $readingBuilderRepository;

    public function __construct(ReadingBuilderRepository $readingBuilderRepository)
    {
        $this->readingBuilderRepository = $readingBuilderRepository;
    }

    public function all()
    {
        $conditions = [
           // 'restaurant_id' => $restaurantId,
            // ['capacity', '>', 4],
            // 'status' => 'available',
        ];

        $relations = ['topic'];
        //  $relations = ['restaurant', 'orders'];
        return $this->readingBuilderRepository->all(
            $conditions,
            ['id', 'description', 'file', 'status','topic_id'],
            $relations,
            'id',
            'desc',
            null
        );
    }


    public function create($data)
    {
        $path = "reading-builders";
        $filePath = $this->FileUpload($data['file'], $path);
        $data['file'] = $filePath;
        return $this->readingBuilderRepository->create($data);
    }


    public function get($readingBuilderId)
    {
        return $this->readingBuilderRepository->find($readingBuilderId);
    }

    public function topicsBy($chapterId){

        $conditions = [
            'chapter_id' => $chapterId,
            // ['capacity', '>', 4],
            // 'status' => 'available',
        ];

        $relations = [];
        //  $relations = ['restaurant', 'orders'];
        return $this->readingBuilderRepository->all(
            $conditions,
            ['id', 'name'],
            $relations,
            'id',
            'desc',
            null
        );

    }

    public function update($topic, $data)
    {
        $path = "reading-builders";
        if (isset($data['file'])) {
            $this->ImageDelete($topic->file);
            $newFilePath = $this->ImageUpload($data['file'], $path);
            $data['file'] = $newFilePath;
        }

        return $this->readingBuilderRepository->update($topic->id, $data);
    }

    public function delete($readingBuilder)
    {
        $this->ImageDelete($readingBuilder->file);
        return $this->readingBuilderRepository->delete($readingBuilder->id);
    }
}
