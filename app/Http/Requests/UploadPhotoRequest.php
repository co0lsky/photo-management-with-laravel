<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadPhotoRequest extends FormRequest
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
            'photo' => 'required|max:102|mimes:jpeg,png'
        ];
    }

    public function messages()
    {
        return [
            'photo.required' => 'You haven\'t choose a photo.',
            'photo.max' => 'Your photo is too large, must be less than :max kb.',
            'photo.mimes' => 'We only accept :values.',
        ];
    }


}
