<?php

namespace App\Listeners;

use App\Events\Uerlogin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Notifications\sendusrsmail;
use App\Models\User;

class SendUserEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $user;
    public function __construct(User $user)
    {
        //
        $this->user = $user;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Userlogin  $event
     * @return void
     */
    public function handle(Uerlogin $event)
    {

        $user = $event->user;
        $user->notify(new sendusrsmail($user));







    }
}
