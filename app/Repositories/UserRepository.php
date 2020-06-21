<?php


namespace App\Repositories;


use App\Repositories\RepositoryInterfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
   public function __construct(User $model)
   {
       parent::__construct($model);
   }

    function registerUser(array $data)
    {

    }

    function generateAuthToken(array $data)
    {
        // TODO: Implement generateAuthToken() method.
    }
}
