<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\BaseRequest;

class RegistrationRequest extends BaseRequest
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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'user'=>'required',
            'status'=>'required',
        ];
    }


}
