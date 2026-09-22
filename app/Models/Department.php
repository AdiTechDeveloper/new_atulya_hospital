<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Department extends Model
{
    protected $guarded = [];

    protected $casts = [
        'services' => 'array',
        'specialities' => 'array',
        'conditions' => 'array',
        'why_choose' => 'array',
        'sort_order' => 'integer',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($department) {
            if (empty($department->slug)) {
                $department->slug = Str::slug($department->name);
            }
        });
    }

    public function doctors()
    {
        return $this->belongsToMany(Doctor::class);
    }
   
}
