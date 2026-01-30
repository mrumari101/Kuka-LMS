<?php

namespace App\Repositories;

use App\Models\McqOption;

use App\Repositories\Interfaces\McqOptionRepositoryInterface;
class McqOptionRepository extends BaseRepository implements McqOptionRepositoryInterface
{
    public function __construct(McqOption $model)
    {
        parent::__construct($model);
    }

}
