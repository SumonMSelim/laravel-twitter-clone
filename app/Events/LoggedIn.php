<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LoggedIn
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private Authenticatable $user;

    public function __construct(Authenticatable $user)
    {
        $this->user = $user;
    }
}
