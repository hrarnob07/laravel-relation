<?php

namespace App\Http\Requests;


class ProductStoreRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string',
            'status'=>'nullable|boolean',
            'description'=>'nullable|string',
            'price'=>'required|numeric',
            'category_id' =>'required'
        ];
    }
}
