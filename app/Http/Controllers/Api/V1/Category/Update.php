<?php

namespace App\Http\Controllers\Api\V1\Category;

use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;

class Update extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CategoryStoreRequest $request , $id)
    {
        try{
            $response['category'] = $this->repository->update($request->validated(), $id);
            return responsePatched($response);
        }
        catch (\Throwable $throwable){
            return responseCantProcess($throwable);
        }

    }
}
