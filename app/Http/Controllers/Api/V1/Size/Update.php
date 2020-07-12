<?php

namespace App\Http\Controllers\Api\V1\Size;

use App\Http\Controllers\Controller;
use App\Http\Requests\SizeStoreRequest;
use Illuminate\Http\Request;

class Update extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(SizeStoreRequest $request , $id)
    {
        try{
            $response['size'] = $this->repository->update($request->validated(),$id);
            return responsePatched($response);
        }
        catch (\Throwable $throwable){
            return responseCantProcess($throwable);
        }
    }
}
