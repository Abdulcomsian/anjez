<?php

namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Plan;
use App\Models\User;
use App\Http\Helpers\Helper;
use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Stripe\Stripe;
use Stripe\Webhook;
use Stripe\PaymentIntent;

class PlanController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $plans = Plan::get();
  
        return view("plans", compact("plans"));
    }  
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Plan $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();
  
        return view("subscription", compact("plan", "intent"));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);
  
        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
                        ->create($request->token);
  
        return view("subscription_success");
    }

    public function checkPlan()
    {
        try {
            $user = auth()->user();

            // dd($user->subscribed('price_1NcjMPJNSwm9Bv4bCFDo07bW'));
            
            $isActiveSubscription = $user->subscribed(2);

            dd($isActiveSubscription);
        
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
       

    }

    public function handleWebhook(Request $request)
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

                // Retrieve the user by subscription's customer ID
                $user = User::where('stripe_customer_id', $subscription->customer)->first();

                if ($user) {
                    // Mark the user's subscription as canceled or inactive in your database
                    // You can also handle other actions or notifications based on this event
                    $user->subscriptions()->where('status', 'active')->update([
                        'status' => 'canceled',
                        'end_date' => now(), // Set the end date to the current time
                    ]);

                    // Check the payment status from Stripe
                    if ($subscription->status === 'canceled') {
                        // Handle the case where the subscription was canceled in Stripe
                    }
                }
            }
            
            return response()->json(['status' => 'success']);
        } catch (\Exception $e) {
            Log::error($e);
            return response()->json(['status' => 'error']);
        }
    }


    public function createPaymentIntent()
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $amount = 1000*100; // Amount in cents
        $paymentIntent = PaymentIntent::create([
            'amount' => $amount,
            'currency' => 'aed', // Change to your desired currency
            'payment_method_types' => ['card'],
            // 'setup_future_usage' => 'off_session', // Payment is one-time
        ]);

        return view('frontend.stripe_payment', compact('paymentIntent'));
    }

    public function showPaymentForm()
    {
        return view('frontend.stripe_payment');
    }

    public function processPayment(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $paymentIntentId = $request->input('payment_intent_id');
        $paymentMethodToken = $request->input('payment_method_id');

        $paymentIntent = PaymentIntent::retrieve($paymentIntentId);
        // $paymentIntent->confirm([
        //     'payment_method' => $request->input('payment_method_id'),
        // ]);
        $paymentIntent->confirm([
            'payment_method_data' => [
                'type' => 'card',
                'card' => [
                    'token' => $paymentMethodToken,
                ],
            ],
        ]);

        if ($paymentIntent->status === 'requires_action') {
            // Handle 3DS challenge if needed
            // Redirect user to 3DS authentication page
        }

        if ($paymentIntent->status === 'succeeded') {
            $payment = new Payment();
            $payment->user_id = auth()->user()->id;
            $payment->status = 'active';
            $payment->start_date = Carbon::now();
            $payment->end_date = Carbon::now()->addYear(); // Adding 
            $payment->save();
        }

        // Payment succeeded
        return redirect()->route('success');
    }

    public function paymentSuccess()
    {
        return redirect()->route('studentdashboard.student-dashboard');
    }

}