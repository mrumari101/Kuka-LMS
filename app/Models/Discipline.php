<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discipline extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name','slug','description','image','status'
    ];

    public function levels()
    {
        return $this->hasMany(Level::class);
    }
}
