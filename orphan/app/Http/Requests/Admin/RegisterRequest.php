<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'uname'=>'required|max:75',
            'email'=>'required|email|max:255|unique:people',
            'uphone'=>'required|numeric|min:10',
            'uaddress'=>'required|max:100',
            'uimage'=>'required',
            'cname'=>'required|max:75',
            'cage'=>'required|numeric|max:16',
            'sex'=>'required',
            'education'=>'required|min:2|max:45',
            'health'=>'required',
            'cimage'=>'required',
            'refphone'=>'required|numeric|min:8',
            'refimage'=>'required',

        ];
    }
}
