<?php

namespace App\Repositories;

use App\Models\applicationModels\Banks\Bank;
use App\Models\applicationModels\Customers\Customer;
use App\Models\Discipline;
use App\Repositories\BaseRepository;
use App\Repositories\Interfaces\Banks\BankRepositoryInterface;
use App\Repositories\Interfaces\Customers\CustomerRepositoryInterface;
use App\Repositories\Interfaces\DisciplineRepositoryInterface;

class DisciplineRepository extends BaseRepository implements DisciplineRepositoryInterface
{
    public function __construct(Discipline $model)
    {
        parent::__construct($model);
    }

}
