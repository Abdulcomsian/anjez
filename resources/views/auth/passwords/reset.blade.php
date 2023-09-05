{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
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
                            {{ __('lang.reset-password.new_password') }}
                        </span>
                    </div>
                </div>
                <div class="form-container">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div>
                            <label for="password" class="form-label">{{ __('lang.login_form.password') }}</label>
                            {{-- <input type="password" class="form-control" name="password" id="password" placeholder="********" /> --}}
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            <div class="error-message d-none" id="password-error"> </div>
                        </div>
                        <div>
                            <label for="password" class="form-label">{{ __('lang.login_form.password') }}</label>
                            {{-- <input type="password" class="form-control" name="password" id="password" placeholder="********" /> --}}
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="error-message d-none" id="password-error"> </div>
                        </div>
                        <div>
                            <label for="confirmpassword" class="form-label">{{ __('lang.signup_form.confirm_password') }}</label>
                            {{-- <input type="password" class="form-control" name="password_confirmation" id="confirmpassword" placeholder="********" /> --}}
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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