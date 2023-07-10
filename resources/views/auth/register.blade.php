{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    {{ __('Register') }}
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
                        <span> Get started with <span>Anjez</span> </span>
                    </div>
                    <div class="text-line-2">
                        <span>
                            Already have an account? <a href="{{ url('/login') }}">Log in</a>
                        </span>
                    </div>
                </div>
                <div class="form-container">
                    <form>
                        <div class="nav-div">
                            <div>
                                <label for="firstname" class="form-label">First Name</label>
                                <input style="width: 100%" type="text" class="form-control" id="firstname"
                                    placeholder="First Name" />
                            </div>
                            <div>
                                <label for="lastname" class="form-label">Last Name</label>
                                <input style="width: 100%" type="text" class="form-control" id="lastname"
                                    placeholder="Last Name" />
                            </div>
                        </div>
                        <div>
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Your Email" />
                        </div>
                        <div class="d-flex flex-column">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" class="form-control" name="phone" placeholder="123456789">
                        </div>
                        <div>
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="********" />
                        </div>
                        <div>
                            <label for="confirmpassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" placeholder="********" />
                        </div>
                        <div>
                            <button type="submit">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

