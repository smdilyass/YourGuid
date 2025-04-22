<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'image',
        'details',
        'display_order',
    ];

    protected $casts = [
        'details' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
