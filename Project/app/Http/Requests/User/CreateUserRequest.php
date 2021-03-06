<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'fullname' => 'required|max:50',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6|regex:/^.*(?=.{6,})(?=.*[\d\X]).*$/',
            'phone' => 'numeric',
            'extendinfo' => 'max:100',
            'position' => 'max:100',
            'organization_id' => 'required',
            'group_id' => 'required',
            'status' => 'required',
        ];
    }
}
