<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageValiRequest extends FormRequest
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
          'id' => 'required',
          'photo_1' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
          'photo_2' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
          'photo_3' => 'file|image|mimes:jpeg,png,jpg,gif|max:2048',
          'no1' => 'max:200',
          'no2' => 'max:200',
          'no3' => 'max:200'
        ];
    }

    public function messages()
    {
      return [
        "file" => "ファイルが見つかりません."
      ];
    }
}
