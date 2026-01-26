<?php
namespace App\Services;

use App\Models\Reading;

class ReadingUidService
{
    public static function generate($discipline, $level, $chapter, $topic = null)
    {
        // Topic code: 00 if full chapter
        $topicCode = $topic ? $topic->code : '00';

        // Reading number per chapter + topic
        $readingNo = Reading::where('chapter_id', $chapter->id)
                ->where('topic_id', $topic?->id)
                ->lockForUpdate()
                ->max('reading_no') + 1;

        // Build RID
        $uid = sprintf(
            'R%s.%s.%s.%s.%02d',
            $discipline->code, // 01
            $level->code,     // 02
            $chapter->code,    // 013
            $topicCode,        // 00 or 01
            $readingNo         // 01
        );

        return [$uid, $readingNo];
    }
}
