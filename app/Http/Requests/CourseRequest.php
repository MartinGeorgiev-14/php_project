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
            'date' => 'required|after_or_equal:01/01/2023|before_or_equal:03/15/2023', // mm/dd/yyyy  after: 01/01/2023   before: 15/03/2023
            'start' => 'required|after_or_equal:08:15|before_or_equal:20:00',
            'end' => 'required|after_or_equal:08:15|before_or_equal:20:00',
            'teachers' => 'required|',
            'organizations' => 'required|',
            'settlements' => 'required|',
            'file' => 'mimes:rar,7z,pdf,docx,pptx,xlsx|file|max:20480'
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
            'date.after_or_equal' => 'Please enter date after 01/01/2023.',
            'date.before_or_equal' => 'Please enter date before 15/03/2023.',
            'start.required' => 'Please enter time between 08:15 and 20:00.',
            'start.after_or_equal' => 'Please enter time after 08:15.',
            'start.before_or_equal' => 'Please enter time before 20:00.',
            'end.after_or_equal' => 'Please enter time after 08:15.',
            'end.before_or_equal' => 'Please enter time before 20:00.',
            'teachers.required' => "Please choose teacher.",
            'organizations.required' => "Please choose organization.",
            'settlements.required' => 'Please choose settlement.',
            'file.mimes' => 'Please choose the correct format file (rar, 7z, pdf, docx, pptx or xlsx).',
            'file.max' => "The max size for file is 20 megabytes."
        ];
    }
}
