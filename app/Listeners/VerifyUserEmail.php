<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyUserEmail
{
    /**
     * Create the event listener.
     *
     * @param Registered $event
     */
    public function __construct(Registered $event)
    {
        $this->user = $event->user;
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {

    }
}
