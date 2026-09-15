<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
   protected $fillable = [
    'title',
    'slug',
    'category',
    'language',
    'description',
    'youtube_url',
    'duration',
    'thumbnail',
    'is_featured',
    'is_active',
    'sort_order',
    'published_at',
];

protected $casts = [
    'is_featured' => 'boolean',
    'is_active' => 'boolean',
    'sort_order' => 'integer',
    'published_at' => 'datetime',
];
}