<?php

namespace App\Providers;

use App\Events\NewsletterEvent;
use App\Events\OrderConfirmation;
use App\Events\ReplyContactUsMailEvent;
use App\Events\UserActivationEmail;
use App\Events\WelcomeEmailEvent;
use App\Listeners\SendActivationEmail;
use App\Listeners\SendNewsletterMail;
use App\Listeners\SendOrderConfirmationEmail;
use App\Listeners\SendReplyContactUsMail;
use App\Listeners\SendWelcomeEmail;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        UserActivationEmail::class => [
            SendActivationEmail::class,
        ],
        ReplyContactUsMailEvent::class => [
            SendReplyContactUsMail::class,
        ],
        OrderConfirmation::class => [
            SendOrderConfirmationEmail::class,
        ],
        WelcomeEmailEvent::class => [
            SendWelcomeEmail::class,
        ],
        NewsletterEvent::class => [
            SendNewsletterMail::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
