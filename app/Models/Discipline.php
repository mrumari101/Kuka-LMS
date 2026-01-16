<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Discipline extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','slug','description','image','status'
    ];


    protected static function booted()
    {
        static::creating(function ($discipline) {

            $baseSlug = Str::slug($discipline->name);
            $slug = $baseSlug;
            $counter = 1;

            while (
            Discipline::withTrashed()
                ->where('slug', $slug)
                ->exists()
            ) {
                $slug = $baseSlug . '-' . $counter++;
            }

            $discipline->slug = $slug;
        });
    }



    public function levels()
    {
        return $this->hasMany(Level::class);
    }
}
