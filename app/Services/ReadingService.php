<?php

namespace App\Services;

use App\Models\Reading;
use App\Repositories\ReadingRepository;
use App\Traits\CommonFunctions;
use Illuminate\Support\Facades\DB;

class ReadingService
{
    use CommonFunctions;

    protected $readingRepository;
    protected $disciplineService;
    protected $levelService;
    protected $chapterService;
    protected $topicService;

    public function __construct(
        ReadingRepository $readingRepository,
        DisciplineService $disciplineService,
        LevelService $levelService,
        ChapterService $chapterService,
        TopicService $topicService

    )
    {
        $this->readingRepository = $readingRepository;
        $this->disciplineService = $disciplineService;
        $this->levelService      = $levelService;
        $this->chapterService    = $chapterService;
        $this->topicService      = $topicService;
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
        return $this->readingRepository->all(
            $conditions,
            ['id', 'name','reading_uid','reading_no', 'description', 'file', 'status','topic_id'],
            $relations,
            'id',
            'desc',
            null
        );
    }


    public function create($data)
    {

        return DB::transaction(function () use ($data) {

            $discipline_id = $data['discipline_id'];
            $level_id    = $data['level_id'];
            $chapter_id    = $data['chapter_id'];
            $topic_id      = $data['topic_id'] ?? null;

            $discipline = $this->disciplineService->get($discipline_id);
            $level =$this->levelService->get($level_id);
            $chapter =$this->chapterService->get($chapter_id);
            $topic =$this->topicService->get($topic_id);



            // 1️⃣ Generate UID + reading number (LOCKED)
            [$readingUid, $readingNo] = ReadingUidService::generate(
                $discipline,
                $level,
                $chapter,
                $topic
            );

            // 2️⃣ Upload file (PDF/DOCX)
            $path = "readings";
            $filePath = $this->FileUpload($data['file'], $path);
            $data['file'] = $filePath;

            $data['reading_uid']=$readingUid;
            $data['reading_no']=$readingNo;
            return $this->readingRepository->create($data);
        });




    }


    public function get($readingId)
    {
        return $this->readingRepository->find($readingId);
    }

    public function topicsBy($chapterId){

        $conditions = [
            'chapter_id' => $chapterId,
            // ['capacity', '>', 4],
            // 'status' => 'available',
        ];

        $relations = [];
        //  $relations = ['restaurant', 'orders'];
        return $this->readingRepository->all(
            $conditions,
            ['id', 'name'],
            $relations,
            'id',
            'desc',
            null
        );

    }

    public function update($reading, $data)
    {
        $path = "readings";
        if (isset($data['file'])) {
            $this->ImageDelete($reading->file);
            $newFilePath = $this->ImageUpload($data['file'], $path);
            $data['file'] = $newFilePath;
        }

        return $this->readingRepository->update($reading->id, $data);
    }

    public function delete($reading)
    {
        $this->ImageDelete($reading->file);
        return $this->readingRepository->delete($reading->id);
    }
}
