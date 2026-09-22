<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Doctor extends Model
{
    protected $guarded = [];

    protected $casts = [
        'areas_of_care' => 'array',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($doctor) {
            if (empty($doctor->slug)) {
                $doctor->slug = Str::slug($doctor->name);
            }
        });
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function departments()
    {
        return $this->belongsToMany(Department::class);
    }
}
