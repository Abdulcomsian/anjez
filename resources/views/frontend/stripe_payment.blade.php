@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Make a Payment</h1>
    
    <form id="payment-form" action="{{ route('process-payment') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="card-element">Card Details</label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>
            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>
        
        <input type="hidden" name="payment_intent_id" value="{{ $paymentIntent->id }}">
        
        <button type="submit" class="btn btn-primary">Pay Now</button>
    </form>
</div>

<script src="https://js.stripe.com/v3/"></script>
<script>
    const stripe = Stripe('{{ config('services.stripe.key') }}');
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    
    cardElement.mount('#card-element');
    
    const form = document.getElementById('payment-form');
    const errorDiv = document.getElementById('card-errors');
    
    form.addEventListener('submit', async (event) => {
        event.preventDefault();
        
        const { token, error } = await stripe.createToken(cardElement);
        
        if (error) {
            errorDiv.textContent = error.message;
        } else {
            // Add the token to the form and submit
            const tokenInput = document.createElement('input');
            tokenInput.type = 'hidden';
            tokenInput.name = 'payment_method_id';
            tokenInput.value = token.id;
            form.appendChild(tokenInput);
            
            form.submit();
        }
    });
</script>
@endsection
