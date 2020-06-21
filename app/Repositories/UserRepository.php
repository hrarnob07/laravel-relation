<?php


namespace App\Repositories;


use App\Repositories\RepositoryInterfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use TheSeer\Tokenizer\Exception;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
   public function __construct(User $model)
   {
       parent::__construct($model);
   }

    function registerUser(array $data)
    {

    }

    function generateAuthToken($user)
    {
        $userCanGoToAction = Auth::once($user);
        if (!empty($userCanGoToAction)) {
            $token = Auth::user()->createToken('body-gym')->plainTextToken;
        }
        else throw new Exception('user not found');

        return $token;



    }
}
