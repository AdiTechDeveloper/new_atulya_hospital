<?php

namespace App\Mail;

use App\Models\JobApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewJobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public JobApplication $application;

    public function __construct(JobApplication $application)
    {
        $this->application = $application;
    }

    public function build()
    {
        return $this
            ->subject('New Job Application - ' . $this->application->job->title)
            ->view('emails.jobs.application')
            ->attach(
                storage_path('app/public/' . $this->application->resume),
                [
                    'as' => basename($this->application->resume),
                ]
            );
    }
}