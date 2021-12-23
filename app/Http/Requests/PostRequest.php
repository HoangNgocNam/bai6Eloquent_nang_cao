<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            "title" => "required|min:6|max:50",
            "content"=>"required",
            "user_id"=>"required|numeric",
        ];
    }

    public function messages()
    {
        return[
           "title.required"=>"trường này không được bỏ trống",
            "title.min"=>"tối thiểu là 6 ký tự",
            "title.max"=>"tối đa 50 ký tự",
        ];
    }
}
