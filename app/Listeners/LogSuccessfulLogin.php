<?php

namespace App\Listeners;

use App\Http\Controllers\RatingController;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogSuccessfulLogin
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
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $user = $event->user;
        RatingController::$lastLogin = $user->pluck('last_login')
                                            ->first();
        $user->timestamps = false;
        $user->last_login = date('Y-m-d H:i:s');
        $user->save();
    }
}
