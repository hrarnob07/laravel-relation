<?php

namespace App\Http\Controllers\Api\V1\Category;

use Illuminate\Http\Request;

class Show extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        try
        {
            $response['category'] = $this->repository->find($id);
            return responseOk($response);

        }catch (\Throwable $throwable){
            return responseCantProcess($throwable);
        }
    }
}
