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
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'course_name'=>'required|max:35',
            'course_name_ar'=>'required|max:35',
            'course_details'=>'required',
            'course_details_ar'=>'required',
            'coachName' => 'required',
            'successRate'=>'required|numeric',
        ];
    }
}
