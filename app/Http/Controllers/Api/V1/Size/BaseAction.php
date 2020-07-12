<?php


namespace App\Http\Controllers\Api\V1\Size;


use App\Http\Controllers\Controller;
use App\Repositories\RepositoryInterfaces\SizeRepositoryInterface;

abstract class BaseAction extends Controller
{
    protected $repository;
    public function __construct(SizeRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
