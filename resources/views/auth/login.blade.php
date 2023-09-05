{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
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

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
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
                    <div class="text-line-1">
                        <span> {{ __('lang.login_form.welcome_to') }} <span>{{ __('lang.login_form.angez') }}</span> </span>
                    </div>
                    <div class="text-line-2">
                        <span>
                            {{ __('lang.login_form.dont_have_any_account') }} <a href="{{ url('/signup') }}">{{ __('lang.navbar.signup') }}</a>
                        </span>
                    </div>
                </div>
                <div class="row d-flex justify-content-start mt-5">
                    <div class="col-2 show" id="mail" onclick="showEmail()" style="cursor: pointer;"> {{ __('lang.login_form.email') }} </div>
                    <div class="col-8" id="no" onclick="showNumber()" style="cursor: pointer;"> {{ __('lang.login_form.phone_number') }}</div>
                </div>
                <div class="form-container">
                    <form action="{{ route('login-user') }}" method="POST">
                        @csrf
                        <div id="emails">
                            <label for="email" class="form-label">{{ __('lang.login_form.email') }}</label>
                            <input
                                name="email"
                                type="text"
                                class="form-control"
                                id="email"
                                placeholder="{{ __('lang.login_form.your_email') }}"
                            />
                        </div>

                        <div id="numd" class="mb-3 d-flex flex-column" style="display: none !important;">
                            <label for="phone" class="form-label">{{ __('lang.login_form.phone_number') }}</label>
                            <input type="tel" id="phone-input" max="12" name="phone_no" class="form-control">
                            <input
                                name="is_phone"
                                type="hidden"
                                class="form-control"
                                id="is_phone"
                                value="0"
                            />
                        </div>
                        <div>
                            <label for="password" class="form-label">{{ __('lang.login_form.password') }}</label>
                            <input
                                name="password"
                                type="password"
                                class="form-control"
                                id="password"
                                placeholder="********"
                            />
                        </div>
                        <div>
                            <button type="submit">{{ __('lang.navbar.login') }}</button>
                        </div>
                    </form>
                    <div class="text-line-2">
                        <span>
                            {{ __('lang.forget_password.forget_password2') }} <a href="{{ route('password.request') }}">{{ __('lang.forget_password.forget_password_link') }}</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function showNumber(){
        document.getElementById("emails").style.display="none";
        document.getElementById("numd").style.display="block";
        document.getElementById("mail").classList.remove("show");
        document.getElementById("no").classList.add("show");
        document.getElementById("is_phone").value = 1;
    }

    function showEmail(){
        document.getElementById("emails").style.display="block";
        document.getElementById("numd").style.setProperty("display", "none", "important");
        document.getElementById("mail").classList.add("show");
        document.getElementById("no").classList.remove("show");
        document.getElementById("is_phone").value = null;
}
</script>
@endsection







