<?php

namespace App\Listeners;

use \App\Events\RemiderEvent;
use Mail;
use App\Mail\ReminderMailable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReminderEmailSender
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
     * @param  RemiderEvent  $event
     * @return void
     */
    public function handle(RemiderEvent $event)
    {
        $user = $event->user;
        $remider = $event->remider;
        $detail = [
            'id' => $user->id,
            'email' => $user->email,
            'code' => $remider->code,
        ];
        Mail::to($user->email)->queue(new ReminderMailable($detail));
    }
}
