<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $table = 'job_applications';

    protected $fillable = [
        'job_id',
        'name',
        'email',
        'phone',
        'resume',
        'message',
        'status',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}