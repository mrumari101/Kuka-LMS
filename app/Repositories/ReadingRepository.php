<?php

namespace App\Repositories;

use App\Models\Reading;
use App\Repositories\Interfaces\ReadingRepositoryInterface;


class ReadingRepository extends BaseRepository implements ReadingRepositoryInterface
{
    public function __construct(Reading $model)
    {
        parent::__construct($model);
    }

}
