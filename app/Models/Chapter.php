<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chapter extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'level_id','name','slug','description','image','status'
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }
}

