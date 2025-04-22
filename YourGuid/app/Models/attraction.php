<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'city',
        'description',
        'short_description',
        'main_image',
        'gallery_images',
        'category',
        'location',
        'address',
        'website',
        'opening_hours',
        'entrance_fee',
        'nearby_stadiums',
        'nearby_hotels',
        'transportation_options',
        'featured',
        'display_order',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'location' => 'array',
        'opening_hours' => 'array',
        'nearby_stadiums' => 'array',
        'nearby_hotels' => 'array',
        'transportation_options' => 'array',
        'featured' => 'boolean',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
