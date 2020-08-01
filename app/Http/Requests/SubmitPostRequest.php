<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class SubmitPostRequest extends FormRequest
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
         if (!empty($this->id)) {
             dd('id not empty');
            return [
                'body' => 'required|string',
                'title' => 'required|string'
            ];
        }
        return [
            //
            'id' => 'required|integer',
            'body' => 'required|string',
            'title' => 'required|string'
        ];
    }
}
