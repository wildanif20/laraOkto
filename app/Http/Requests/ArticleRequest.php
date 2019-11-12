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
        $id = $this->article;
        return [
            'title' => 'required|unique:articles,title|max:255',
            'content' => 'required|unique:article,content|min:50',
            'article_image' => 'require|mimes:jpeg,jpg,png|max:2048',
        ];
        
    }

    public function messages()
    {
        return [
            'title.required' => 'Title required, at least fill a character',
            'title.unique' => 'Title is unique, please take another fill'
        ];
    }
}
