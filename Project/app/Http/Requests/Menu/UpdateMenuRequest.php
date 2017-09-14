<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMenuRequest extends FormRequest
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
        $namemenu = $this->route('menu');
        return [
            'name' => 'required|min:2|max:50|unique:menus,name,'.$namemenu->id,
            'parent_id' => 'required|numeric',
            'nameroute' => 'required|max:50',
            'order' => 'required|numeric',
        ];
    }
}
