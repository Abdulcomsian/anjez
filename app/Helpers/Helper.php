<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Stripe;
use Stripe\Webhook;
use Carbon\Carbon;
use App\Models\Payment;

class Helper
{
    public static function handleWebhook(Request $request)
    {
        // Verify the webhook signature
        Stripe::setApiKey(config('services.stripe.secret'));
        $endpoint_secret = config('services.stripe.webhook_secret');
        
        $payload = $request->getContent();
        $sig_header = $request->header('Stripe-Signature');
        
        try {
            $event = Webhook::constructEvent($payload, $sig_header, $endpoint_secret);
            
            if ($event->type === 'customer.subscription.deleted') {
                $subscription = $event->data->object;
                // Update your user's subscription status here
                // For example, mark the subscription as canceled or inactive in your database
                // You can also handle other actions or notifications based on this event
            }
            
            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            Log::error($e);
            return response()->json(['status' => 'error']);
        }
    }

    public static function isPaymentActive()
    {
        $user = auth()->user();
        $now = Carbon::now();

        $payment = Payment::where('user_id', $user->id)
            ->where('status', 'active')
            ->where('start_date', '<=', $now)
            ->where('end_date', '>=', $now)
            ->first();
        if($payment){
            return true;
        }
        return false;
    }
}