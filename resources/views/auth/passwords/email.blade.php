{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
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

                            {{ __('lang.forget_password.enter_email') }}
                        </span>
                    </div>
                </div>
                <div class="form-container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div id="emails">
                            <label for="email" class="form-label">{{ __('lang.login_form.email') }}</label>
                            <input name="email" type="text" class="form-control @error('email') is-invalid @enderror" id="email"   placeholder="{{ __('lang.login_form.your_email') }}" value="{{ old('email') }}" required autocomplete="email" autofocus >

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div id="numd" class="mb-3 d-flex flex-column" style="display: none !important;">
                            <label for="phone" class="form-label">{{ __('lang.login_form.phone_number') }}</label>
                            <input type="tel" id="phone-input" max="12" name="phone_no" class="form-control">
                            <input name="is_phone" type="hidden" class="form-control" id="is_phone" value="0" />
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