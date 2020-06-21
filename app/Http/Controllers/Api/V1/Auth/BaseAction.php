<?php


namespace App\Http\Controllers\Api\V1\Auth;


use App\Http\Controllers\Controller;
use App\Repositories\RepositoryInterfaces\UserRepositoryInterface;

abstract class BaseAction extends Controller
{
    /**
     * @var UserRepositoryInterface $repository
     */
    protected $repository;

    /**
     * BaseAction constructor.
     * @param UserRepositoryInterface $repository
     */
    public function __construct( UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


}
