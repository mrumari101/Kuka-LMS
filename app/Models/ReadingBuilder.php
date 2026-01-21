<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ReadingBuilder extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'topic_id','name', 'description','file','status'
    ];

    protected static function booted()
    {
        static::creating(function ($readingBuilder) {

            $baseSlug = Str::slug($readingBuilder->name);
            $slug = $baseSlug;
            $counter = 1;

            while (
            ReadingBuilder::withTrashed()
                ->where('slug', $slug)
                ->exists()
            ) {
                $slug = $baseSlug . '-' . $counter++;
            }

            $readingBuilder->slug = $slug;
        });
    }


    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
