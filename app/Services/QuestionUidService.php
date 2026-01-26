<?php

namespace App\Services;

use App\Models\ReadingBuilder;

class ReadingUidService
{
    public static function generate($discipline, $level, $chapter, $topic,)
    {
        $questionNo = ReadingBuilder::where('topic_id', $topic->id)
                ->lockForUpdate()
                ->max('question_no') + 1;

        $uid = sprintf(
            'Q%s.%s.%s.%d',
            $discipline->code,
            $branch->code,
            $chapter->code,
            $difficulty
        );

        return [$uid, $questionNo];
    }
}
