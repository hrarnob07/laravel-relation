<?php

namespace App\Http\Controllers\Api\V1\Branch;


use App\Http\Requests\BranchAssociationRequest;

class Association extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(BranchAssociationRequest $request)
    {
        try {
             $this->repository->branchAssociation($request->validated());
             return responseOk();

        }catch (\Throwable $exception){
            return responseCantProcess($exception);
        }
    }
}
