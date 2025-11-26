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
}
