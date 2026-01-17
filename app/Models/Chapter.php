<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Chapter extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'level_id','name','slug','description','image','status'
    ];

    protected static function booted()
    {
        static::creating(function ($discipline) {

            $baseSlug = Str::slug($discipline->name);
            $slug = $baseSlug;
            $counter = 1;

            while (
            Chapter::withTrashed()
                ->where('slug', $slug)
                ->exists()
            ) {
                $slug = $baseSlug . '-' . $counter++;
            }

            $discipline->slug = $slug;
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
}

