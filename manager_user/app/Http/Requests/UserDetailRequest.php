<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserDetailRequest extends Request
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
            'txthoten' => 'required',
            'txtMaNV' => 'required',
            'txtUserId' => 'required',
            'txtRoleId' => 'required',
            'txtRoom'   => 'required',
            'txtngaysinh' => 'required',
            'txtgioitinh' => 'required',
            'txtemail' => 'required',
            'txtphone' => 'required'
        ];
    }
    public function messages(){
        return [
            'txthoten.required' => "Bạn chưa nhập họ tên",
            'txtMaNV.required' => "Bạn chưa nhập mã nhân viên",
            'txtUserId.required' => "Bạn chưa nhập User-id",
            'txtRoleId.required' => "Bạn chưa nhập Role-id",
            'txtRoom.required' => "Bạn chưa nhập Room-id",
            'txtngaysinh.required' => "Bạn chưa nhập ngày sinh",
            'txtgioitinh.required' => "Bạn chưa chọn giới tính",
            'txtemail.required' => "Bạn chưa nhập email",
            'txtphone.required' => "Bạn chưa nhập điện thoại",
        ];
    }
}
