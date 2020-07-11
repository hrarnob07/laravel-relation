<?php

namespace App\Http\Controllers\Api\V1\Branch;


use App\Http\Requests\BranchStoreRequest;

class Store extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(BranchStoreRequest $request)
    {
        try{
            $response['branch'] = $this->repository->store($request->validated());
            return responseOk($response);
        }catch (\Throwable $throwable){
            return responseCantProcess($throwable);
        }
    }
}
