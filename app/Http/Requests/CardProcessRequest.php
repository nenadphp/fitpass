<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardProcessRequest extends FormRequest
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
            'object_uuid' => 'required|string',
            'card_uuid' => 'required|string'
        ];
    }
}
