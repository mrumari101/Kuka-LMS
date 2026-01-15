<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Level extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'discipline_id','name','slug','description','image','status'
    ];

    public function discipline()
    {
        return $this->belongsTo(Discipline::class);
    }

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}

