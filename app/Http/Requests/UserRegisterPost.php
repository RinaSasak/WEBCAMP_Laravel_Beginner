<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterPost extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:128'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', 'string', 'max:72'],
        ];
    }
}
