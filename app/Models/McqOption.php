<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class McqOption extends Model
{
    protected $fillable = [
        'question_id',
        'description',
        'option_index',
        'is_correct'
    ];
}
