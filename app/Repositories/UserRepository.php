<?php


namespace App\Repositories;


use App\Repositories\RepositoryInterfaces\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

    function generateAuthToken($data)
    {
        try{
            $user = $this->model->where('phone','=', $data["phone"])->first();
            if( $user == null){
                throw new \Exception('The phone number is not valid.');
            }
            $password = Hash::check($data["password"], $user->password);
            if(!$password){
                throw new \Exception('The phone number is not valid.');

            }
            if(auth()->attempt($data)){
                $token = auth()->user()->createToken('r-client')->accessToken;
                $user["token"] = $token;
                return $user;
            } else {
              throw new \Exception('Phone number or password is not valid');
            }

        } catch (\Throwable $exception){
            throw new \Exception($exception->getMessage());
        }






    }
}
