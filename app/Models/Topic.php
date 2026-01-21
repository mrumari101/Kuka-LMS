<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Topic extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'chapter_id','name','slug','description','image','status'
    ];

    protected static function booted()
    {
        static::creating(function ($topic) {

            $baseSlug = Str::slug($topic->name);
            $slug = $baseSlug;
            $counter = 1;

            while (
            Topic::withTrashed()
                ->where('slug', $slug)
                ->exists()
            ) {
                $slug = $baseSlug . '-' . $counter++;
            }

            $topic->slug = $slug;
        });
    }

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

}
