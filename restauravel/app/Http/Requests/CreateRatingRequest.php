<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateRatingRequest extends Request
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
            'username' => 'required|max:100',
            'comment' => 'required|max:255',
            'value' => 'required|numeric|in:1,2,3,4,5'
        ];
    }
}
