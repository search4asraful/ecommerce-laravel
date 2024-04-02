<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MembershipStoreRequest extends FormRequest
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
            'image' => 'required|image|mimes:png,jpg,jpeg,webp'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute field is required.',
            'name.max' => 'The :attribute field must be under 255 charecters.',
            'image.required' => ':attribute field is required.',
            'image.image' => 'The :attribute file must be an image.',
            'image.mimes' => 'The :attribute must be a PNG, JPG, JPEG, or WEBP file.'
        ];
    }
}
