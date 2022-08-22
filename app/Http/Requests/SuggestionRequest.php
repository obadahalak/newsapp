<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuggestionRequest extends FormRequest
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
            'name'=>'required',
            'age'=>'required|numeric',
            'job'=>'required',
            'email'=>'required|email',
            'phoneNumber'=>'required',
            'sectionName'=>'required',
            'typeOfJob'=>'required',
            'file'=>'required|file',
            'country'=>'required',
        ];
    }
}
