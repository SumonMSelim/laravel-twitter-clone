<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Crypt;

class SendChangeEmailNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }

    public function via($notifiable): array
    {
        return ['mail'];
    }

    public function toMail($notifiable): MailMessage
    {
        $ttl = time() + 5 * 60;
        $tokenString = sprintf('%s::%s', $this->email, $ttl);
        $token = Crypt::encryptString($tokenString);

        return (new MailMessage)
            ->line('Please click to following link to confirm your email address change.')
            ->action('Click Here', route('setting.email.change', $token))
            ->line('If you have not requested this change or do not want to change your email address, you can ignore this email!');
    }
}
