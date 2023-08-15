<?php

namespace App\Listeners;

use App\Events\VerificationEvent;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class VerificationListener
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
    public function handle(VerificationEvent $event): void
    {
        try
        {
            $email = $event->email;
            $token = $event->token;
            Mail::send('email.emailVerificationEmail', ['token' => $token], function($message) use($email){
                $message->to($email);
                $message->subject('Email Verification Mail');
            });
        }
        catch (Exception $ex)
        {
            dd($ex->getMessage());
            // return redirect()->route('login')->withError($ex->getMessage());
        }
    }
}
