<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TableRequest extends Request
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
            'txtCode' => 'required|unique:desks,table_code',
            'txtPhone' => 'required',
            'txtuserid' => 'required',
            'txtRoleid' => 'required'
        ];
    }
    public function messages(){
        return [
            'txtCode.required' => "Bạn chưa nhập email",
            'txtPhone.required' => "Bạn chưa nhập password",
            'txtuserid.required' => "Bạn chưa nhập User-id",
            'txtRoleid.required' => "Bạn chưa nhập Role-id",
        ];
    }
}
