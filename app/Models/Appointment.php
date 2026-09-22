<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'department',
        'doctor_id',
        'appointment_date',
        'appointment_time',
        'message',
        'status',
    ];

    protected $casts = [
        'appointment_date' => 'date',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}