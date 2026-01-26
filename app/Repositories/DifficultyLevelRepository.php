<?php

namespace App\Repositories;

use App\Models\applicationModels\Banks\Bank;
use App\Models\applicationModels\Customers\Customer;
use App\Models\DifficultyLevel;
use App\Models\Discipline;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\Banks\BankRepositoryInterface;
use App\Repositories\Interfaces\Customers\CustomerRepositoryInterface;
use App\Repositories\Interfaces\DifficutlyLevelRepositoryInterface;
use App\Repositories\Interfaces\DisciplineRepositoryInterface;

class DifficultyLevelRepository extends BaseRepository implements DifficutlyLevelRepositoryInterface
{
    public function __construct(DifficultyLevel $model)
    {
        parent::__construct($model);
    }

}
