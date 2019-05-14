<?php

namespace App\Listeners;

use App\Events\ReplyContactUsMailEvent;
use App\Mail\ReplyContactUsMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendReplyContactUsMail
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
    public function handle(ReplyContactUsMailEvent $event)
    {
        Mail::to($event->input['email'])->send(new ReplyContactUsMail($event->input));
    }
}
