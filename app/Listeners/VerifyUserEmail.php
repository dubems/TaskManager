<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;

class VerifyUserEmail
{
    /**
     * Create the event listener.
     *
     * @param Registered $event
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {

        Mail::to($event->user->email)
            ->send(new \App\Mail\VerifyUserEmail($event->user));
    }
}
