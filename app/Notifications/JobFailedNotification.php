<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class JobFailedNotification extends Notification
{
    use Queueable;

    protected $jobId;
    protected $errorMessage;

   
    public function __construct(string $jobId, string $errorMessage)
    {
        $this->jobId = $jobId;
        $this->errorMessage = $errorMessage;
    }

   
    public function via($notifiable)
    {
        return ['mail'];
    }

   
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->line("The job {$this->jobId} failed after multiple attempts.")
            ->line("Error: {$this->errorMessage}")
            ->action('View Logs', url('/logs'))
            ->line('Please contact support if the issue persists.');
    }
}
