<?php

namespace App\Http\Requests\CheckList;

use Illuminate\Foundation\Http\FormRequest;

class CreateCheckListRequest extends FormRequest
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
            'name'=>'required|max:255',
            'organization_id'=>'required|numeric',
            'status'=>'required|max:255'
        ];
    }
}
