<?php

namespace App\Providers;

use App\Repositories\BranchRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use App\Repositories\RepositoryInterfaces\BranchRepositoryInterface;
use App\Repositories\RepositoryInterfaces\CategoryRepositoryInterface;
use App\Repositories\RepositoryInterfaces\ProductRepositoryInterface;
use App\Repositories\RepositoryInterfaces\SizeRepositoryInterface;
use App\Repositories\RepositoryInterfaces\UserRepositoryInterface;
use App\Repositories\SizeRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );

        $this->app->bind(
            BranchRepositoryInterface::class,
            BranchRepository::class
            );
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
        $this->app->bind(
            CategoryRepositoryInterface::class,
            CategoryRepository::class
        );
        $this->app->bind(
            SizeRepositoryInterface::class,
            SizeRepository::class
        );
    }
}
