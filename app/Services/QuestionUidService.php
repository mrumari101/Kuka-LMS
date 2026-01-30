<?php

namespace App\Services;

use App\Models\Question;
use Illuminate\Support\Facades\DB;

class QuestionUidService
{

    public static function generate($discipline, $level, $chapter, $difficultyLevel, $topic = null): array
    {


        // Remove nested transaction — outer transaction handles locking
        // Topic code: 00 if full chapter
        $topicCode = $topic ? $topic->code : '00';

        // Reading number per chapter + topic
        $questionNo = Question::where('chapter_id', $chapter->id)
                ->where('topic_id', $topic?->id)
                ->lockForUpdate()
                ->max('question_no') + 1;

        // Build Question UID
        $uid = sprintf(
            'Q%02d.%02d.%03d.%03d.%d',
            $discipline->code, // DD
            $level->code,      // LL
            $chapter->code,    // CCC
            $questionNo,       // QQQ
            $difficultyLevel->code // D
        );

        return [$uid, $questionNo];
    }
}
