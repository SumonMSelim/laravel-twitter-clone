<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EmailUpdateRequested
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $email;

    public function __construct(string $email)
    {
        $this->email = $email;
    }
}
