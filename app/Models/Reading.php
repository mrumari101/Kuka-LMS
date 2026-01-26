<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Reading extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'reading_uid',  'reading_no','chapter_id', 'topic_id','name','sequence', 'description','file','status'
    ];

    protected $appends = ['code'];

    public function getCodeAttribute()
    {
        return str_pad($this->reading_no, 2, '0', STR_PAD_LEFT);
    }

    protected static function booted()
    {
        static::creating(function ($reading) {

            $baseSlug = Str::slug($reading->name);
            $slug = $baseSlug;
            $counter = 1;

            while (
            Reading::withTrashed()
                ->where('slug', $slug)
                ->exists()
            ) {
                $slug = $baseSlug . '-' . $counter++;
            }

            $reading->slug = $slug;
        });
    }


    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}
