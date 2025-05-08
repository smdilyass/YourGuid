<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'city',
        'description',
        'short_description',
        'main_image',
        'gallery_images',
        'star_rating',
        'price_category',
        'amenities',
        'location',
        'address',
        'website',
        'phone',
        'email',
        'nearby_stadiums',
        'nearby_attractions',
        'transportation_options',
        'featured',
        'display_order',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'amenities' => 'array',
        'location' => 'array',
        'nearby_stadiums' => 'array',
        'nearby_attractions' => 'array',
        'transportation_options' => 'array',
        'featured' => 'boolean',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    /** @use HasFactory<\Database\Factories\HotelsFactory> */
    use HasFactory;
}
