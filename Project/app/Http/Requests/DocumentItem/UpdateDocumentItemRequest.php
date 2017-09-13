<?php

namespace App\Http\Requests\DocumentItem;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDocumentItemRequest extends FormRequest
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
            'document_index'=>'max:255',
            'parent_id'=>'number',
            'content'=>'required|max:1000',
            'document_id'=>'required|numeric|max:10',
            'status'=>'required|max:255'  
        ];
    }
}
