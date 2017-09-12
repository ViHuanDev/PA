<?php

namespace App\Http\Requests\Document;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocumentRequest extends FormRequest
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
            'name'=>'required|min:2|max:255',
            'location'=>'min:2|max:255',
            'filepath'=>'min:2|max:255|required',
            'version'=>'max:255',
            'document_id'=>'number',
            'status'=>'required|max:255',
        ];
    }
}
