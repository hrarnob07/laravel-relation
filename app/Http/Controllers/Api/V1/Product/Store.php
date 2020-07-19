<?php

namespace App\Http\Controllers\Api\V1\Product;

use App\Http\Requests\ProductStoreRequest;
use Illuminate\Http\Request;

class Store extends BaseAction
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(ProductStoreRequest $request)
    {
        try{
            $response['product'] = $this->repository->storeProduct($request->validated());
            return responseOk($response);
        }
        catch (\Throwable $throwable){
            return responseCantProcess( $throwable);
        }
    }
}
