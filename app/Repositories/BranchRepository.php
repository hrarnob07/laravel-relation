<?php


namespace App\Repositories;


use App\Models\Branch;
use App\Repositories\RepositoryInterfaces\BranchRepositoryInterface;

class BranchRepository extends BaseRepository implements BranchRepositoryInterface
{
        public function __construct(Branch $model)
        {
            parent::__construct($model);
        }
}
