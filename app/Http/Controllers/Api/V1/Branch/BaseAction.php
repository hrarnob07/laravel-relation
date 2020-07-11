<?php


namespace App\Http\Controllers\Api\V1\Branch;


use App\Http\Controllers\Controller;
use App\Repositories\RepositoryInterfaces\BranchRepositoryInterface;

abstract class BaseAction extends Controller
{
    protected $repository;
    public function __construct(BranchRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

}
