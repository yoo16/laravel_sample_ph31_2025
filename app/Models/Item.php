<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'category_id',
        'name',
        'price',
        'note',
        'image',
        'tag',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    // Category モデルとのリレーション設定
    public function category()
    {
        // n:1 の関係を定義
        return $this->belongsTo(Category::class);
    }
}
