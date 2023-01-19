<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:50',
            'email' => 'required|min:5|max:50',
            'password' => 'required|min:5|max:100'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name.required' => 'Please enter name between 5 and 50 characters.',
            'name.min' => 'Please enter name with 5 or more characters',
            'name.max' => 'Please enter name with 50 or less characters.',
            'email.required' => 'Please enter email between 5 and 50 characters.',
            'email.min' => 'Please enter email with 5 or more characters',
            'email.max' => 'Please enter email with 50 or less characters.',
            'password.required' => 'Please enter password between 5 and 50 characters.',
            'password.min' => 'Please enter password with 5 or more characters',
            'password.max' => 'Please enter password with 50 or less characters.'
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
