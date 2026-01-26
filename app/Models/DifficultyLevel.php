<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class DifficultyLevel extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','sequence','status'
    ];

    protected $appends = ['code'];

    public function getCodeAttribute()
    {
        return str_pad($this->sequence, 1, '0', STR_PAD_LEFT);
    }

}
