<?php

namespace App\Http\Controllers\Api\V1\Branch;


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
        try {
            $data["branch"] =$this->repository->paginate();
            return responseOk($data);

        }catch (\Throwable $exception){
            return responseCantProcess($exception);
        }

    }
}
