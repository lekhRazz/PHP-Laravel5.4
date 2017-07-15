<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'membr_name' => 'required|max:255',
            'membrimg'=>'required|image',
            'member_post'=>'required|max:85',
            'membr_email'=>'required|email|max:255|unique:members',
            'membr_addr'=>'required|max:120',
            'membr_phone' => 'required|numeric|min:10',
            'sex'=>'required',
            'membr_exprnc'=>'required|max:20',
            'membr_qulifi'=>'required|max:75|min:7',
        ];
    }
}
