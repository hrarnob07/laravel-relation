<?php

namespace App\Http\Controllers\Api\V1\Size;

use App\Http\Controllers\Controller;
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
            $response['sizes'] = $this->repository->paginate();
            return responseOk($response);

        }catch (\Throwable $throwable){
            return responseCantProcess($throwable);
        }
    }
}
