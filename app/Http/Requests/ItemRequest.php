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

    public function messages()
    {
        return [
            'name.required' => '商品名を入力してください。',
            'price.required' => '価格を入力してください。',
            'note.required' => 'Noteを入力してください。',
            'category_id.required' => '正しいカテゴリを選択してください。',
            'image.image' => '画像を選択してください。',
            'image.max' => '画像のサイズは1MB以下で選択してください。',
        ];
    }

}
