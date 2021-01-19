<?php

namespace App\Notifications;

use Illuminate\Auth\Listeners\SendEmailVerificationNotification as BaseSendEmailVerificationNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailVerificationNotification extends BaseSendEmailVerificationNotification implements ShouldQueue
{
    use Queueable;
}
