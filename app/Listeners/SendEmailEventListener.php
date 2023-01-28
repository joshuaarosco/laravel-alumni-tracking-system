<?php

namespace App\Listeners;

use App\Mail\AlumniCreation;
use App\Events\SendEmailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmailEventListener
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
    public function handle(SendEmailEvent $event)
    {
        switch ($event->type) {
            case 'alumni_creation':
                \Mail::to($event->data->email)->send(
                    new AlumniCreation($event->data)
                );

                break;
            
            default:
                // code...
                break;
        }
    }
}
