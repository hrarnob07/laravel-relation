<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegistrationRequest;
use Illuminate\Http\Request;

class Registration extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(RegistrationRequest $request)
    {
        try{

            $user =  $this->repository->store($request->validated());
            $data = $this->repository->generateAuthToken($user);


        }catch (\Throwable $exception){
            dd($exception->getMessage());
        }
    }
}
