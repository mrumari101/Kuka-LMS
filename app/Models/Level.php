<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Level extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'discipline_id','name','sequence', 'slug','description','image','status'
    ];

    protected $appends = ['code'];

    public function getCodeAttribute()
    {
        return str_pad($this->sequence, 2, '0', STR_PAD_LEFT);
    }

    protected static function booted()
    {
        static::creating(function ($level) {

            $baseSlug = Str::slug($level->name);
            $slug = $baseSlug;
            $counter = 1;

            while (
            Level::withTrashed()
                ->where('slug', $slug)
                ->exists()
            ) {
                $slug = $baseSlug . '-' . $counter++;
            }

            $level->slug = $slug;
        });
    }

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}

