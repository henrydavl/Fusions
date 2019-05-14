<?php

namespace App\Listeners;

use App\Events\OrderConfirmation;
use App\Mail\OrderConfirmationEmail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendOrderConfirmationEmail
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
    public function handle(OrderConfirmation $event)
    {
        Mail::to($event->mail['email'])->send(new OrderConfirmationEmail($event->mail));
    }
}
