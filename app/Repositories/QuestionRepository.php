<?php

namespace App\Repositories;

use App\Models\Question;
use App\Models\Reading;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use App\Repositories\Interfaces\ReadingRepositoryInterface;


class QuestionRepository extends BaseRepository implements QuestionRepositoryInterface
{
    public function __construct(Question $model)
    {
        parent::__construct($model);
    }

}
