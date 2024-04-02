<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
            'category_id' => 'required|string',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|not_in:0',
            'short_description' => 'required',
            'long_description' => 'required',
            'qty' => 'required|integer|not_in:0',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp'
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => ':attribute field is required',
            'name.required' => ':attribute field is required',
            'name.max' => ':attribute field cannot be longer than 255 characters.',
            'price.required' => ':attribute field is required',
            'price.integer' => ':attribute field must be an integer.',
            'price.not_in' => ':attribute field cannot be zero.',
            'short_description.required' => ':attribute field is required',
            'long_description.required' => ':attribute field is required',
            'qty.required' => ':attribute field is required',
            'qty.integer' => 'Quantity field must be an integer.',
            'qty.not_in' => 'Quantity field cannot be zero.',
            'image.required' => ':attribute field is required',
            'image.image' => 'The :attribute file must be an image.',
            'image.mimes' => 'The :attribute must be a PNG, JPG, JPEG, or WEBP file.'
        ];
    }
}
