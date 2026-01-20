<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReadingBuilder extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'topic_id','description','file','status'
    ];


    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
