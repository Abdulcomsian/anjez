
@extends('frontend.payments.layouts.main')
@section('content')
{{-- <div>
    <div class="container pricing">
        <div class="row d-flex justify-content-between mt-5 px-5 py-5">
            <div class="col-lg-6 mt-2">
                <div class="row">
                    <div class="price"> Pricing </div>
                </div>
                <div class="row ">
                    <div class="price-heading"> Make Your Payment</div>
                </div>
                <div class="row">
                    <div class="price-text">Select a plan to watch unlimited videos </div>
                </div>
                <div class="row mt-5">
                      <div class="accordion " id="accordionExample" style="padding-left: 0.8rem !important;">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               How long does it take to subscribe? <i class="fas fa-plus"></i>
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item mt-3">
                          <h2 class="accordion-header " id="headingTwo">
                            <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              What payment methods do you accept?  <i class="fas fa-plus"></i>
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item mt-3">
                          <h2 class="accordion-header " id="headingThree">
                            <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          What shipping options do you have?      <i class="fas fa-plus"></i>
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                            </div>
                          </div>
                        </div>
                      </div>

                </div>
            </div>
            <div class="col-lg-5 mt-5">
                <div class="row mt-4">
                    <a class="" href="{{route('payments')}}">Stripe</a>
                    <a class="" href="{{route('tabby')}}">Tabby</a>
                  </div>
                 <div class="cards" >
                    <div class="cards-heading m-auto "> <p class="pt-2">Enter Card Information </p>  </div>
                    <div class="row">
                      <form id="payment-form" action="{{ route('process-payment') }}" method="POST">
                        <input type="hidden" name="payment_intent_id" value="{{ $paymentIntent->id }}">

                            <div id="cards ">
                              <label for="card-number" class="form-label labelss mt-4 px-2 d-flex justify-content-start">Card Number</label>
                             <div class="centers d-flex justify-content-center">
                                <input
                                type="number"
                                class="form-control"
                                id="card-number"
                                placeholder="1234 1234 1234 1234"
                              />
                             </div>

                            </div>
                         </form>
                    </div>
                   <div class="row mt-4 mb-4">
                    <div class="col-sm-5 ">
                        <form>
                            <div id="expire">
                              <label for="expiry" class="form-label labelss px-2">Expiry Date</label>
                              <div class="centers ps-2">
                                <input
                                type="date"
                                class="form-control"
                                id="expiry"
                                placeholder=" MM / YY"
                              />
                              </div>

                            </div>
                         </form>
                    </div>

                    <div class="col-sm-5 ">
                      <form>
                          <div id="expire">
                            <label for="security" class="form-label labelss px-2">Security Code</label>
                            <div class="centers ps-2">
                              <input
                              type="number"
                              class="form-control"
                              id="security"
                              placeholder=" CVV"
                            />
                            </div>

                          </div>
                  </div>

                    <div class="col-sm-2 mt-4">
                      <div class="card-icond d-flex justify-content-center pe-4 mt-2">
                        <img src="{{ url('assets/images/cvv 1.png') }}" alt="" srcset="">
                      </div>

                    </div>
                   </div>


                </div>
                <button class="card-button mt-3" type="submit">Continue</button>
            </div>
        </form>
        </div>
    </div>
</div> --}}
<div>
  <div class="container pricing">
      <div class="row d-flex justify-content-between mt-5 px-5 py-5">
          <div class="col-lg-6 mt-2">
              <div class="row">
                  <div class="price"> Pricing </div>
              </div>
              <div class="row ">
                  <div class="price-heading"> Make Your Payment</div>
              </div>
              <div class="row">
                  <div class="price-text">Select a plan to watch unlimited videos </div>
              </div>
              <div class="row mt-5">
                    <div class="accordion " id="accordionExample" style="padding-left: 0.8rem !important;">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                          <button class="accordion-button d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                             How long does it take to subscribe? <i class="fas fa-plus"></i>
                          </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item mt-3">
                        <h2 class="accordion-header " id="headingTwo">
                          <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            What payment methods do you accept?  <i class="fas fa-plus"></i>
                          </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item mt-3">
                        <h2 class="accordion-header " id="headingThree">
                          <button class="accordion-button collapsed d-flex justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What shipping options do you have?      <i class="fas fa-plus"></i>
                          </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                          <div class="accordion-body">
                            Lorem ipsum dolor sit amet consectetur. Amet scelerisque duis at sit. Molestie vulputate magna egestas amet maecenas.
                          </div>
                        </div>
                      </div>
                    </div>

              </div>
          </div>
          <div class="col-lg-5 mt-5">
              <div class="row mt-4 mb-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: #0d6efd" aria-current="page" href="{{route('payments')}}">Stripe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color: #495057" href="{{route('tabby')}}">Tabby</a>
                    </li>
                  </ul>
              </div>
               <div class="cards" >

                      <div class="cards-heading m-auto "> <p class="pt-2" style="font-weight: bold">Enter Card Information </p>  </div>
                      <form id="payment-form" action="{{ route('process-payment') }}" method="POST">
                        @csrf

                        <div class="row form-group" style="margin-left: 7px;margin-right: 5px;">
                            <label for="card-element" style="text-align: center;margin-top: 15px;margin-bottom: 42px;;font-weight: bold;font-size: 20px;">Card Details</label>
                            <div id="card-element">
                            </div>
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <input type="hidden" name="payment_intent_id" value="{{ $paymentIntent->id }}">

                        <button type="submit" class="btn btn-primary w-75" style="background-color: #0d6efd !important; margin-top: 45px;margin-left: 45px;">Pay Now</button>
                      </form>

                </div>
            </div>


              </div>
          </div>
      </div>
  </div>
</div>
<style>
    .__PrivateStripeElement {
        padding: 11px !important;
        border: 1px solid black !important;
    }
</style>
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
