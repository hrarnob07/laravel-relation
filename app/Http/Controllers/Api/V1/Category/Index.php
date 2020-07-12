<?php

namespace App\Http\Controllers\Api\V1\Category;

use Illuminate\Http\Request;

class Index extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        try
        {
            $response['categories'] = $this->repository->paginate();
            return responseOk($response);

        }catch (\Throwable $throwable){
            return responseCantProcess($throwable);
        }
    }
}
