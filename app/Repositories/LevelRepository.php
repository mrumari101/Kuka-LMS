<?php

namespace App\Repositories;


use App\Models\Level;
use App\Repositories\Interfaces\LevelRepositoryInterface;


class LevelRepository extends BaseRepository implements LevelRepositoryInterface
{
    public function __construct(Level $model)
    {
        parent::__construct($model);
    }

}
