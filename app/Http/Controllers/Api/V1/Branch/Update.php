<?php

namespace App\Http\Controllers\Api\V1\Branch;


use App\Http\Requests\BranchStoreRequest;

class Update extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(BranchStoreRequest $request, $id)
    {
        try{
            $response["branch"] = $this->repository->update($request->validated(),$id);
            return responsePatched($response);

        }catch (\Throwable $throwable){
            return responseCantProcess($throwable);
        }
    }
}
