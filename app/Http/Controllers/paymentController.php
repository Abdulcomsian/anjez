<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Webhook;
use Stripe\PaymentIntent;
class paymentController extends Controller
{
    public function payments()
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $amount = 1000*100; // Amount in cents
        $paymentIntent = PaymentIntent::create([
            'amount' => $amount,
            'currency' => 'usd', // Change to your desired currency
            'payment_method_types' => ['card'],
            // 'setup_future_usage' => 'off_session', // Payment is one-time
        ]);

        return view('frontend.payments.payment', compact('paymentIntent'));
    }
}
