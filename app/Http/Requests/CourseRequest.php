<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'title' => 'required|min:5|max:50',
            'date' => 'required|after:01/01/2023|before:03/15/2023', // mm/dd/yyyy  after: 01/01/2023   before: 15/03/2023
            'start' => 'required|after:08:15|before:20:00',
            'end' => 'required|after:08:15|before:20:00',
            'teachers' => 'required|',
            'organizations' => 'required|',
            'settlements' => 'required|',
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
            //
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
            'title.required' => 'Please enter title between 5 and 50 characters.',
            'date.required' => 'Please enter date between 01/01/2023 and 15/03/2023.',
            'date.after' => 'Please enter date after 01/01/2023.',
            'date.before' => 'Please enter date before 15/03/2023.',
            'start.required' => 'Please enter time between 08:15 and 20:00.',
            'start.after' => 'Please enter time after 08:15.',
            'start.before' => 'Please enter time before 20:00.',
            'end.after' => 'Please enter time after 08:15.',
            'end.before' => 'Please enter time before 20:00.',
            'teachers.required' => "Please choose teacher.",
            'organizations.required' => "Please choose organization.",
            'settlements.required' => 'Please choose settlement.'
        ];
    }
}
