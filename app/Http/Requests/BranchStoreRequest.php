<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchStoreRequest extends BaseRequest
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
        return array(
            'name' =>'required',
            'address'=>'nullable|string',
            'status'=> 'required',
            'phone'=>'nullable|string',
            'lat' => 'nullable|numeric',
            'long'=>'nullable|numeric',
            'close_day'=>'nullable|string',
            'open_time'=>'nullable|date_format:Y-m-d H:i:s',
            'close_time'=>'nullable|date_format:Y-m-d H:i:s'
        );
    }
}
