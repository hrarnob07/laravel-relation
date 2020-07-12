<?php

namespace App\Http\Controllers\Api\V1\Size;

use App\Http\Controllers\Controller;
use App\Http\Requests\SizeStoreRequest;
use Illuminate\Http\Request;

class Store extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SizeStoreRequest $request)
    {
        try{
            $response['size'] = $this->repository->store($request->validated());
            return responseOk($response);
        }
        catch (\Throwable $throwable){
            return responseCantProcess($throwable);
        }
    }
}
