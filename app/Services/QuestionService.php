<?php

namespace App\Services;

use App\Models\McqOption;
use App\Repositories\QuestionRepository;
use App\Traits\CommonFunctions;
use Illuminate\Support\Facades\DB;

class QuestionService
{
    use CommonFunctions;

    protected $questionRepository;
    protected $disciplineService;
    protected $levelService;
    protected $chapterService;
    protected $topicService;
    protected $difficultyLevelService;

    public function __construct(
        QuestionRepository $questionRepository,
        DisciplineService $disciplineService,
        LevelService $levelService,
        ChapterService $chapterService,
        TopicService $topicService,
        DifficultyLevelService $difficultyLevelService

    )
    {
        $this->questionRepository = $questionRepository;
        $this->disciplineService = $disciplineService;
        $this->levelService      = $levelService;
        $this->chapterService    = $chapterService;
        $this->topicService      = $topicService;
        $this->difficultyLevelService     = $difficultyLevelService;
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
        return $this->questionRepository->all(
            $conditions,
            ['id','question_uid','question_no','mcq_description', 'mcq_file', 'question_description', 'question_file', 'solution_description', 'solution_file', 'question_type', 'status','chapter_id'],
            $relations,
            'id',
            'desc',
            null
        );
    }
    public function create(array $data)
    {
        return DB::transaction(function () use ($data) {

            /* ---------------------------------
             | Resolve dependencies
             |----------------------------------*/
            $discipline = $this->disciplineService->get($data['discipline_id']);
            $level      = $this->levelService->get($data['level_id']);
            $chapter    = $this->chapterService->get($data['chapter_id']);
            $difficulty = $this->difficultyLevelService->get($data['difficulty_level_id']);

            /* ---------------------------------
             | Generate UID + Question No
             |----------------------------------*/
            [$questionUid, $questionNo] = QuestionUidService::generate(
                $discipline,
                $level,
                $chapter,
                $difficulty
            );

            /* ---------------------------------
             | File uploads (based on type)
             |----------------------------------*/

            // MCQ
            if ($data['question_type'] === 'mcq') {

                if (!empty($data['mcq_file'])) {
                    $data['mcq_file'] = $this->FileUpload(
                        $data['mcq_file'],
                        'questions/mcq'
                    );
                }
            }

            // Descriptive
            if ($data['question_type'] === 'descriptive') {

                if (!empty($data['question_file'])) {
                    $data['question_file'] = $this->FileUpload(
                        $data['question_file'],
                        'questions/descriptive'
                    );
                }

                if (!empty($data['solution_file'])) {
                    $data['solution_file'] = $this->FileUpload(
                        $data['solution_file'],
                        'questions/solutions'
                    );
                }
            }

            /* ---------------------------------
             | Create Question
             |----------------------------------*/
            $data['question_uid'] = $questionUid;
            $data['question_no']  = $questionNo;

            $question = $this->questionRepository->create($data);

            /* ---------------------------------
             | MCQ Options (ONLY for MCQ)
             |----------------------------------*/
            if ($data['question_type'] === 'mcq') {

                $descriptions = $data['description'] ?? [];
                $correctFlags = array_map('intval', $data['is_correct'] ?? []);

                // Extra safety (never trust frontend fully)
                if (count($descriptions) < 2 || array_sum($correctFlags) !== 1) {
                    throw new \Exception('Invalid MCQ options configuration.');
                }

                foreach ($descriptions as $index => $text) {
                    McqOption::create([
                        'question_id'  => $question->id,
                        'option_index' => $index,
                        'description'  => $text,
                        'is_correct'   => !empty($correctFlags[$index]),
                    ]);
                }
            }

            return $question;
        });
    }



//    public function create($data)
//    {
//
//        return DB::transaction(function () use ($data) {
//
//            $discipline_id = $data['discipline_id'];
//            $level_id    = $data['level_id'];
//            $chapter_id    = $data['chapter_id'];
//           // $topic_id      = $data['topic_id'] ?? 0;
//            $difficulty_level_id = $data['difficulty_level_id'];
//            $discipline = $this->disciplineService->get($discipline_id);
//            $level =$this->levelService->get($level_id);
//            $chapter =$this->chapterService->get($chapter_id);
//
//          //  $topic =$this->topicService->get($topic_id);
//            $difficultyLevel =$this->difficultyLevelService->get($difficulty_level_id);
//
//
//
//
//            // 1️⃣ Generate UID + reading number (LOCKED)
//            [$questionUid, $questionNo] = QuestionUidService::generate(
//                $discipline,
//                $level,
//                $chapter,
//                $difficultyLevel,
//               // $topic
//            );
//
//            // 2️⃣ Upload file (PDF/DOCX)
////            $path = "questions";
////            $filePath = $this->FileUpload($data['question_file'], $path);
////            $data['question_file'] = $filePath;
//            // 🔹 File upload (only if exists)
//
//                if (!empty($data['question_file']) && $data['question_type'] === 'mcq') {
//                    $data['question_file'] = $this->FileUpload(
//                        $data['question_file'],
//                        'questions'
//                    );
//                }
//
//
//            $data['question_uid']=$questionUid;
//            $data['question_no']=$questionNo;
//            $question = $this->questionRepository->create($data);
//
//            // 2. MCQ options
////            $descriptions = $data['description'];
////            $correctFlags = $data['is_correct'] ?? [];
////
////            foreach ($descriptions as $index => $text) {
////                McqOption::create([
////                    'question_id'  => $question->id,
////                    'option_index' => $index,
////                    'description'  => $text,
////                    'is_correct'   => !empty($correctFlags[$index]),
////                ]);
////            }
//
//
//            // 🔹 MCQ options (ONLY if MCQ)
//            if ($data['question_type'] === 'mcq') {
//
//                $descriptions = $data['description'] ?? [];
//                $correctFlags = $data['is_correct'] ?? [];
//
//                // Defensive check (exam-safe)
//                if (count($descriptions) < 2 || array_sum($correctFlags) !== 1) {
//                    throw new \Exception('Invalid MCQ options configuration.');
//                }
//
//                foreach ($descriptions as $index => $text) {
//                    McqOption::create([
//                        'question_id'  => $question->id,
//                        'option_index' => $index,
//                        'description'  => $text,
//                        'is_correct'   => !empty($correctFlags[$index]),
//                    ]);
//                }
//            }
//
//            return $question;
//
//        });
//    }


    public function get($questionId)
    {
        return $this->questionRepository->find($questionId);
    }


    public function update($question, $data)
    {
        $path = "questions";
        if (isset($data['file'])) {
            $this->ImageDelete($question->file);
            $newFilePath = $this->ImageUpload($data['file'], $path);
            $data['file'] = $newFilePath;
        }

        return $this->questionRepository->update($question->id, $data);
    }

    public function delete($question)
    {
        $this->ImageDelete($question->file);
        return $this->questionRepository->delete($question->id);
    }
}
