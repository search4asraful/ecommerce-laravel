<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'category_id' => 'required|string|max:255',
            'brand_id' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|not_in:0',
            'qty' => 'sometimes|integer|not_in:0',
            'image' => 'sometimes|image|mimes:png,jpg,jpeg,webp'

        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => 'category_id field is required',
            'brand_id.required' => 'brand_id field is required',
            'name.required' => 'name field is required',
            'price.required' => ':attribute field is required',
            'price.integer' => ':attribute field must be an integer.',
            'price.not_in' => ':attribute field cannot be zero.',
            'image.image' => 'The :attribute file must be an image.',
            'image.mimes' => 'The :attribute must be a PNG, JPG, JPEG, or WEBP file.'
        ];
    }
}
