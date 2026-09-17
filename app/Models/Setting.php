<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'hospital_name',
        'logo',
        'phone',
        'address',
        'google_maps_url',
        'google_maps_embed_url',
        'facebook_url',
        'instagram_url',
        'youtube_url',
        'whatsapp_url',
        'opening_time',
        'closing_time',
        'is_24_hours',
    ];

    protected $casts = [
        'is_24_hours' => 'boolean',
    ];
}