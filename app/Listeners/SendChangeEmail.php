<?php

namespace App\Listeners;

use App\Notifications\SendChangeEmailNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;

class SendChangeEmail implements ShouldQueue
{
    public function handle($event)
    {
        Notification::route('mail', $event->email)->notify(new SendChangeEmailNotification($event->email));
    }
}
