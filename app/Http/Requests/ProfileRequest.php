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
            'name' => 'min:3',
            'gender' => 'required',
            'phone' => 'min:8',
            'photo' => 'image|mimes:jpeg,png,jpg,svg,PNG,JPG,SVG,JPEG|max:2048',
            'idCard' => 'required',
            'address' => 'required',
            'postalCode' => 'required',
            'fullName' => '',
            'bankName' => '',
            'accountNumber' => '',
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Name minimum 3 character',
            'gender.required' => 'Gender is required',
            'phone.min' => 'Phone minimum 8 character',
            'photo.mimes' => 'Photo support jpeg, png, jpg, svg',
            'photo.max' => 'Maximum file size 2MB',
        ];
    }
}
