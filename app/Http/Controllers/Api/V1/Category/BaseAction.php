<?php


namespace App\Http\Controllers\Api\V1\Category;


use App\Http\Controllers\Controller;
use App\Repositories\RepositoryInterfaces\CategoryRepositoryInterface;

abstract class BaseAction extends Controller
{
    protected $repository;
    public function __construct(CategoryRepositoryInterface $repository )
    {
        $this->repository = $repository;
    }
}
