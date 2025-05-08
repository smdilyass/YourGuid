<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'type',
        'description',
        'short_description',
        'main_image',
        'gallery_images',
        'stadium_id',
        'location_name',
        'location',
        'start_date',
        'end_date',
        'team1',
        'team2',
        'match_type',
        'group',
        'match_number',
        'transportation_options',
        'ticket_info_url',
        'featured',
        'display_order',
    ];

    protected $casts = [
        'gallery_images' => 'array',
        'location' => 'array',
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'transportation_options' => 'array',
        'featured' => 'boolean',
    ];

    public function stadium(): BelongsTo
    {
        return $this->belongsTo(Stadium::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
