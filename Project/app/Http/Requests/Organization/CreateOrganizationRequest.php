<?php

namespace App\Http\Requests\Organization;

use Illuminate\Foundation\Http\FormRequest;

class CreateOrganizationRequest extends FormRequest
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
            'name' => 'required|min:2|max:100',
            'organization_code' => 'required|min:2|max:100|unique:organizations,organization_code',
            'address' => 'min:2|max:120',
            'phone' => 'required|numeric|min:10|max:12',
            'location' => 'required|min:2|max:120',
            'representative' => 'required|min:2|max:120',
        ];
    }
}
