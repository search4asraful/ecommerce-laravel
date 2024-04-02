<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg,webp',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute field is required',
            'name.max' => ':attribute field cannot be longer than 255 characters.',
            'image.image' => 'The :attribute file must be an image.',
            'image.mimes' => 'The :attribute must be a PNG, JPG, JPEG, or WEBP file.'
        ];
    }
}
