<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Job extends Model
{
    protected $table = 'atulya_jobs';

    protected $fillable = [
        'title',
        'slug',
        'department',
        'location',
        'employment_type',
        'salary',
        'experience',
        'description',
        'requirements',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($job) {
            if (empty($job->slug)) {
                $job->slug = Str::slug($job->title);
            }
        });

        static::updating(function ($job) {
            if ($job->isDirty('title')) {
                $job->slug = Str::slug($job->title);
            }
        });
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class);
    }
}