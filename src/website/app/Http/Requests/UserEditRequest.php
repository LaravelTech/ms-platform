<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'name' => 'required|max:255|min:3|unique:users,name,'.$this->id,
            'email' => 'required|unique:users,email,'.$this->id,
            'password' => 'nullable|max:20|min:8|confirmed',
        ];
    }
}
