@extends('frontend.layouts.main')

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
                    <form method="POST" action="{{ route('user.signup') }}">
                        @csrf
                        <div class="nav-div">
                            <div>
                                <label for="firstname" class="form-label">{{ __('lang.signup_form.first_name') }}</label>
                                <input style="width: 100%" type="text" class="form-control" name="first_name" id="firstname"
                                    placeholder="{{ __('lang.signup_form.first_name') }}" />
                            </div>
                            <div>
                                <label for="lastname" class="form-label">{{ __('lang.signup_form.last_name') }}</label>
                                <input style="width: 100%" type="text" class="form-control" name="last_name" id="lastname"
                                    placeholder="{{ __('lang.signup_form.last_name') }}" />
                            </div>
                        </div>
                        <div>
                            <label for="email" class="form-label">{{ __('lang.login_form.email') }}</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="{{ __('lang.login_form.email') }}" />
                        </div>
                        <div class="d-flex flex-column">
                            <label for="phone" class="form-label">{{ __('lang.login_form.phone_number') }}</label>
                            <input type="tel" id="phone" class="form-control" name="phone_no" placeholder="123456789">
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
@endsection

