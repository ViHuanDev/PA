<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $email = $this->route('user');
        return [
            'fullname' => 'required|max:50',
            'email' => 'required|email|unique:users,email,'.$email->id,
            'phone' => 'numeric',
            'extendinfo' => 'max:100',
            'position' => 'max:100',
            'organization_id' => 'required',
            'group_id' => 'required',
            'status' => 'required',
        ];
    }
}
