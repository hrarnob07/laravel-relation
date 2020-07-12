<?php

namespace App\Http\Controllers\Api\V1\Category;

use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;

class Store extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CategoryStoreRequest $request)
    {
        try{
            $response['category'] = $this->repository->store($request->validated());
            return responseOk($response);
        }
        catch (\Throwable $throwable){
            return responseCantProcess($throwable);
        }
    }
}
