<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'price' => 'required|integer',
            'note' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:1024',
        ];
    }
}
