<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'nickname'=>'required|min:2|max:15',
            'password'=>'required|min:6|max:20',
        ];
    }

    public function messages()
    {
        return [
            'nickname.required' => '昵称不能为空！',
            'nickname.min' => '昵称不能小于2个字符！',
            'nickname.max' => '昵称不能大于15个字符！',
            'password.required' => '密码不能为空！',
            'password.min' => '密码不能小于6个字符！',
            'password.max' => '密码不能大于20个字符！',
        ];
    }
}
