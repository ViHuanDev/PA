<?php

namespace App\Http\Requests\Group;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGroupRequest extends FormRequest
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
        $namegroup = $this->route('group');
        return [
        'name' => 'required|min:2|max:30|unique:groups,name,'.$namegroup->id,
        'note' => 'max:50',
        ];
    }
}
