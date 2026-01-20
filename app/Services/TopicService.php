<?php

namespace App\Services;

use App\Repositories\TopicRepository;
use App\Traits\CommonFunctions;

class TopicService
{
    use CommonFunctions;

    protected $topicRepository;

    public function __construct(TopicRepository $topicRepository)
    {
        $this->topicRepository = $topicRepository;
    }

    public function all()
    {
        $conditions = [
           // 'restaurant_id' => $restaurantId,
            // ['capacity', '>', 4],
            // 'status' => 'available',
        ];

        $relations = ['chapter'];
        //  $relations = ['restaurant', 'orders'];
        return $this->topicRepository->all(
            $conditions,
            ['id', 'name','description', 'image', 'status','chapter_id'],
            $relations,
            'id',
            'desc',
            null
        );
    }


    public function create($data)
    {
        $path = "topics";
        $imagePath = $this->ImageUpload($data['image'], $path);
        $data['image'] = $imagePath;
        return $this->topicRepository->create($data);
    }


    public function get($topicId)
    {
        return $this->topicRepository->find($topicId);
    }

    public function topicsBy($chapterId){

        $conditions = [
            'chapter_id' => $chapterId,
            // ['capacity', '>', 4],
            // 'status' => 'available',
        ];

        $relations = [];
        //  $relations = ['restaurant', 'orders'];
        return $this->topicRepository->all(
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
        $path = "topics";
        if (isset($data['image'])) {
            $this->ImageDelete($topic->image);
            $newImagePath = $this->ImageUpload($data['image'], $path);
            $data['image'] = $newImagePath;
        }

        return $this->topicRepository->update($topic->id, $data);
    }

    public function delete($topic)
    {
        $this->ImageDelete($topic->image);
        return $this->topicRepository->delete($topic->id);
    }
}
