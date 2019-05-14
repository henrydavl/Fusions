<?php

namespace App\Listeners;

use App\Mail\Newsletter;
use App\Subcriber;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendNewsletterMail
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
    public function handle($event)
    {
        $to = Subcriber::all()->pluck('email');
        Mail::to($to)->send(new Newsletter($event->mail));
    }
}
