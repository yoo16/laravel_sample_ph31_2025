<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    // Item モデルとのリレーション設定
    public function items()
    {
        // 1:n の関係を定義
        return $this->hasMany(Item::class);
    }
}
