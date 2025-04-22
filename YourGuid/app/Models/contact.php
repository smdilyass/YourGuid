<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'newsletter_subscription',
        'read',
        'replied',
        'replied_at',
    ];

    protected $casts = [
        'newsletter_subscription' => 'boolean',
        'read' => 'boolean',
        'replied' => 'boolean',
        'replied_at' => 'datetime',
    ];
}
