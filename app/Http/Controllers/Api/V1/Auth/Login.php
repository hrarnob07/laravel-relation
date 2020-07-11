<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class Login extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(LoginRequest $request)
    {
        try {
            $data["user"] =$this->repository->generateAuthToken($request->validated());
            return responseOk($data);

        }catch (\Throwable $exception){
            return responseCantProcess($exception);
        }
    }
}
