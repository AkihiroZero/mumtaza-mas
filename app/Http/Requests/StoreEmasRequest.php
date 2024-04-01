<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'kadar_emas_id' => ['required', 'string'],
            'level_emas_id' => ['required', 'string'],
            'category_emas_id' => ['required', 'string'],
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
            'weight' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'vendor' => ['nullable', 'string'],
            'barcode' => ['nullable', 'string'],
            'color' => ['nullable', 'string'],
            'bahan_keramik' => ['nullable', 'boolean'],
            'status' => ['nullable', 'required', 'boolean'],
        ];
    }
}
