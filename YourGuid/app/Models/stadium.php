<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Stadium extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'city',
        'capacity',
        'description',
        'short_description',
        'main_image',
        'panorama_image',
        'map_image',
        'gallery_images',
        'features',
        'location',
        'status',
        'completion_date',
        'matches',
        'facilities',
        'transportation',
        'nearby_attractions',
        'featured',
        'display_order',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'features' => 'array',
        'location' => 'array',
        'matches' => 'array',
        'facilities' => 'array',
        'transportation' => 'array',
        'nearby_attractions' => 'array',
        'featured' => 'boolean',
        'completion_date' => 'date',
    ];

    public function facilities(): HasMany
    {
        return $this->hasMany(StadiumFacility::class);
    }

    public function events(): HasMany
    {
        return $this->hasMany(Event::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
