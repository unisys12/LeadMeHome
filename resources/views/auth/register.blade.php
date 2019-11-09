@extends('layouts.kennel')

@section('content')

<div class="card">
    <div class="card-header">
        <h1>{{ __('Register') }}</h1>
    </div>


    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row">
                <label for="name" class="">{{ __('Name') }}</label>

                <div class="">
                    <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="email" class="">{{ __('E-Mail Address') }}</label>

                <div class="">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="password" class="">{{ __('Password') }}</label>

                <div class="">
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                <div class="">
                    <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="row mb-0">
                <div class="offset-md-4">
                    <button type="submit" class="btn btn-login">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
