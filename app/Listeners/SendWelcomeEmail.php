<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegistered $event): void
    {
        // Access the user using $event->user and send a welcome email instantly
        // Mail::to($event->user->email)->send(new \App\Mail\WelcomeEmail($event->user));

        // Access the user using $event->user and dispatch the email to the queue
        Mail::to($event->user)->queue(new \App\Mail\WelcomeEmail($event->user));
    }
}
