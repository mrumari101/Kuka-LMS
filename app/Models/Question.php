<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'question_uid',
        'chapter_id',
        'topic_id',
        'question_no',
        'difficulty_level_id',
        'question_type',
        'question_description',
        'question_file',
        'solution_description',
        'solution_file',
        'status',
    ];

    protected $appends = ['code'];

    public function getCodeAttribute()
    {
        return str_pad($this->question_no, 3, '0', STR_PAD_LEFT);
    }

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function mcqOptions()
    {
        return $this->hasMany(McqOption::class);
    }


}
