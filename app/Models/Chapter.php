<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Chapter extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'level_id','name','sequence','slug','description','image','status'
    ];

    protected $appends = ['code'];

    public function getCodeAttribute()
    {
        return str_pad($this->sequence, 3, '0', STR_PAD_LEFT);
    }

    protected static function booted()
    {
        static::creating(function ($chapter) {

            $baseSlug = Str::slug($chapter->name);
            $slug = $baseSlug;
            $counter = 1;

            while (
            Chapter::withTrashed()
                ->where('slug', $slug)
                ->exists()
            ) {
                $slug = $baseSlug . '-' . $counter++;
            }

            $chapter->slug = $slug;
        });
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}

