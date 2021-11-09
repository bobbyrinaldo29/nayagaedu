<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankNameRequest extends FormRequest
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
        $id = $this->route('id');
        return [
            'name' => 'required|min:3|unique:bank_names,name,' . $id,
            'code' => 'required|min:3|unique:bank_names,code,' . $id,
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required',
            'code.required' => 'Code is required',
            'name.unique' => 'Name already exist',
            'code.unique' => 'Code already exist',
            'name.min' => 'Name of bank minimum 3 character',
            'code.min' => 'Code minimum 3 character',
        ];
    }

    public function filter()
    {
        return [
            'code' => 'trim|capitalize',
        ];
    }
}
