<?php

namespace App\Listeners;

use App\Events\WelcomeEmailEvent;
use App\Mail\WelcomeEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(WelcomeEmailEvent $event)
    {
        Mail::to($event->mail)->send(new WelcomeEmail($event->mail));
    }
}
