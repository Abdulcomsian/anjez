@extends('frontend.layouts.main')

<style>
    .error-message{
        color:red;
        margin-bottom:22px;
        margin-top:-20px;
    }
</style>



    <link rel="stylesheet" href="{{ asset('assets/style/signup.css') }}" />

@section('content')
<div class="signup-main">
    <div class="left-signup-side">
        <div>
            <img src="{{ url('assets/images/Frame.png') }}" alt="logo" />
        </div>
    </div>
    <div class="right-signup-side mb-4">
        <div class="logo-section">
            <div>
                <a href="{{ url('/') }}"><img src="{{ url('assets/images/Group 6.png') }}" alt="logo" /></a>
            </div>
        </div>
        <div class="form-section">
            <div>
                <div class="text-container mt-3">
                    <div class="text-line-1 mt-5">
                        <span>{{ __('lang.signup_form.get_started_with') }}<span>{{ __('lang.login_form.angez') }}</span> </span>
                    </div>
                    <div class="text-line-2">
                        <span>
                            {{ __('lang.signup_form.already_have_an_account') }} <a href="{{ url('/login') }}">{{ __('lang.navbar.login') }}</a>
                        </span>
                    </div>
                </div>
                <div class="form-container">
                    <form method="POST" id="signup-form" action="{{ route('user.signup') }}">
                        @csrf
                        <div class="nav-div">
                            <div>
                                <label for="firstname" class="form-label">{{ __('lang.signup_form.first_name') }}</label>
                                <input style="width: 100%" type="text" class="form-control" name="first_name" id="firstname"
                                    placeholder="{{ __('lang.signup_form.first_name') }}" />
                                    <div class="error-message d-none" id="firstname-error"></div>
                            </div>
                            <div>
                                <label for="lastname" class="form-label">{{ __('lang.signup_form.last_name') }}</label>
                                <input style="width: 100%" type="text" class="form-control" name="last_name" id="lastname"
                                    placeholder="{{ __('lang.signup_form.last_name') }}" />



                                    <div class="error-message" id="lastname-error"></div>
                            </div>
                        </div>
                        <div>
                            <label for="email" class="form-label">{{ __('lang.login_form.email') }}</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="{{ __('lang.login_form.email') }}" />
                        </div>
                        <div class="d-flex flex-column">
                            <label for="phone" class="form-label">{{ __('lang.login_form.phone_number') }}</label>
                            <input type="input" id="phone" class="form-control" name="phone_no" max="12" placeholder="123456789">
                        </div>
                        <div>
                            <label for="password" class="form-label">{{ __('lang.login_form.password') }}</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="********" />
                        </div>
                        <div>
                            <label for="confirmpassword" class="form-label">{{ __('lang.signup_form.confirm_password') }}</label>
                            <input type="password" class="form-control" name="password_confirmation" id="confirmpassword" placeholder="********" />
                        </div>
                        <div>
                            <button type="submit">{{ __('lang.navbar.signup') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    document.getElementById("signup-form").addEventListener("submit", function(event) {
        document.getElementById("firstname-error").textContent = "";
        document.getElementById("lastname-error").textContent = "";

        const firstName = document.getElementById("firstname").value.trim();
        const lastName = document.getElementById("lastname").value.trim();

        let isValid = true;

        if (firstName === "") {
            isValid = false;
            document.getElementById("firstname-error").textContent = "First name is required.";
            document.getElementById("firstname-error").classList.remove("d-none");

        }

        if (lastName === "") {
            isValid = false;
            document.getElementById("lastname-error").textContent = "Last name is required.";
        }
        if (!isValid) {
            event.preventDefault();
        }
    });
</script>


@endsection

