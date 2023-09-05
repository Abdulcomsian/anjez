@extends('frontend.layouts.main')
<link rel="stylesheet" href="{{ asset('assets/style/login.css') }}" />
@section('content')
<div class="login-main">
    <div class="left-login-side">
        <div>
            <img src="{{ url('assets/images/Frame.png') }}" alt="logo" />
        </div>
    </div>
    <div class="right-login-side">
        <div class="logo-section">
            <div>
                <a href="{{ url('/') }}"><img src="{{ url('assets/images/Group 6.png') }}" alt="logo" /></a>
            </div>
        </div>
        <div class="form-section">
            <div>
                <div class="text-container">
                    <!-- <div class="text-line-1">
                        <span> {{ __('lang.login_form.welcome_to') }} <span>{{ __('lang.login_form.angez') }}</span> </span>
                    </div> -->
                    <div class="text-line-2">
                        <span>
                            <!-- {{ __('lang.login_form.dont_have_any_account') }} <a href="{{ url('/signup') }}">{{ __('lang.navbar.signup') }}</a> -->
                            {{ __('lang.reset-password.new_password') }}
                        </span>
                    </div>
                </div>
                <div class="form-container">
                    <form action="" method="POST">
                        @csrf
                        <div>
                            <label for="password" class="form-label">{{ __('lang.login_form.password') }}</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="********" />
                            <div class="error-message d-none" id="password-error"> </div>
                        </div>
                        <div>
                            <label for="confirmpassword" class="form-label">{{ __('lang.signup_form.confirm_password') }}</label>
                            <input type="password" class="form-control" name="password_confirmation" id="confirmpassword" placeholder="********" />
                            <div class="error-message d-none" id="confirmpassword-error"> </div>
                        </div>

                        <div>
                            <button type="submit">{{ __('lang.navbar.submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>