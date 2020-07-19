<?php


namespace App\Http\Controllers\Api\V1\Product;


use App\Http\Controllers\Controller;
use App\Repositories\RepositoryInterfaces\ProductRepositoryInterface;

abstract class BaseAction extends Controller
{
    protected $repository;
    public function __construct(ProductRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
