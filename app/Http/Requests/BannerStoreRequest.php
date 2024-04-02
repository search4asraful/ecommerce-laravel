<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerStoreRequest extends FormRequest
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
            'price' => 'required|integer|not_in:0',
            'heading' => 'required|string|max:255',
            'pricetag' => 'nullable|string|max:255',
            'link' => 'required|string|max:255',
            'image' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ':attribute field is required.',
            'name.max' => 'The :attribute field must be under 255 charecters.',
            'price.required' => ':attribute field is required',
            'price.integer' => ':attribute field must be an integer.',
            'price.not_in' => ':attribute field cannot be zero.',
            'heading.required' => ':attribute field is required.',
            'heading.max' => 'The :attribute field must be under 255 charecters.',
            'pricetag.required' => ':attribute field is required.',
            'pricetag.max' => 'The :attribute field must be under 255 charecters.',
            'image.required' => ':attribute field is required.',
            'image.mimes' => 'The :attribute must be a PNG, JPG, JPEG, or WEBP file.'
        ];
    }
}
