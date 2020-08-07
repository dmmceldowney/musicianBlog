<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SavePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->admin = 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        if (!empty($this->id)) {
            return [
                'title' => 'required|string|unique:blog_posts,title,'.$this->id.',id',
                'id' => 'integer|exists:blog_posts,id'
            ];
        }
        return [
            'title' => 'required|string|unique:blog_posts,title'
        ];
    }
}
