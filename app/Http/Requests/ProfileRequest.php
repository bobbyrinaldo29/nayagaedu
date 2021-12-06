<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'firstname' => 'min:3',
            'lastname' => 'min:3',
            'gender' => 'required',
            'phone' => 'min:8',
            'idCard' => 'required',
            'address' => 'required',
            'postalCode' => 'required',
            'fullName' => '',
            'bankName' => '',
            'accountNumber' => '',
            'package' => '',
        ];
    }

    public function messages()
    {
        return [
            'firstname.min' => 'Name minimum 3 character',
            'lastname.min' => 'Name minimum 3 character',
            'gender.required' => 'Gender is required',
            'phone.min' => 'Phone minimum 8 character',
        ];
    }
}
