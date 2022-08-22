<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

                return [
                    ///Sigin

                    'fname'=>'required|string',
                    'lname'=>'required|string',
                    'email'=>'required|email|unique:users,email',
                    'password'=>'required|confirmed|min:5',

                ];




    }
}
