<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class registarionRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //open to everyone
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|min:2|max:20|Regex:/^[a-zA-Z]+$/',
            'last_name' => 'required|min:2|max:20|Regex:/^[a-zA-Z]+$/',
            'email' => 'required|email',
            'password' => 'required|Regex:/[0-9]+/|Regex:/[a-zA-Z]+/|Regex:/^[a-zA-Z,$0-9_]+$/',
        ];
    }
}
