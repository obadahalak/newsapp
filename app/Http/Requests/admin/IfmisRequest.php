<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class IfmisRequest extends FormRequest
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
            'name_ar' => 'required',
            'country' => 'required',
            'job' => 'required',
            'job_ar' => 'required',
           // 'imageProfile' => 'required|image',
            //'imageFlag' => 'required|image',
        ];
    }
}
