<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|min:3' . $id,
            'category' => 'required|min:3',
            'editor' => 'required|min:3',
            'image.*' => 'required|image|mimes:jpeg,bmp,png,jpg,svg|max:2048',
            'content' => 'required|min:3',
            'publish' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'category.required' => 'Category is required',
            'editor.required' => 'Editor is required',
            'image.required' => 'Image is required',
            'content.required' => 'Content is required',
            'title.min' => 'Title of bank minimum 3 character',
            'category.min' => 'Category minimum 3 character',
            'Editor.min' => 'Editor minimum 3 character',
            'content.min' => 'Content minimum 3 character',
        ];
    }
}
