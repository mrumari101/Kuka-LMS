<?php

namespace App\Repositories;

use App\Models\ReadingBuilder;
use App\Repositories\Interfaces\ReadingBuilderRepositoryInterface;


class ReadingBuilderRepository extends BaseRepository implements ReadingBuilderRepositoryInterface
{
    public function __construct(ReadingBuilder $model)
    {
        parent::__construct($model);
    }

}
