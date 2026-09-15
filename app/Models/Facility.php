<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'main_image',
        'secondary_image',
        'section_heading',
        'section_description',
        'features',
        'bottom_heading',
        'bottom_description',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'sort_order' => 'integer',
        'is_active' => 'boolean',
    ];
}