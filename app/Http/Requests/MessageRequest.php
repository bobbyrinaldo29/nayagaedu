<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name'                  => ['required', 'min:3'],
            'email'                 => ['required', 'email'],
            'subject'               => ['required', 'min:3'],
            'message'               => ['required', 'min:50'],
            'read'                  => [''],
            'g-recaptcha-response'  => ['recaptcha'],
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Name minimum 3 character',
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'subject.min' => 'Subject minimum 8 character',
            'subject.required' => 'Subject is required',
            'message.required' => 'Message is required',
            'message.min' => 'Subject minimum 50 character',
            'g-recaptcha-response.recaptcha' => 'Recaptcha is require',
        ];
    }
}
