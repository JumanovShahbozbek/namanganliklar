<?php

namespace App\Listeners;

use App\Events\LoginEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Log;

class LoginEventListener
{
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
    public function handle($event): void
    {
        /* \Log::info("User name {$event->user}"); */

        DB::table('logins')->insert([
            'username' => $event->user,
            'date' => date('Y-m-d H:i:s')
        ]);
    }
}
