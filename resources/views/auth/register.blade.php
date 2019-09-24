@extends('layouts.guest')

@section('content')
<div class="container" style="background-color: #636b6f;">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="imgcontainer">
            <img src="/images/img_avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="content">

            <input placeholder="enter full Name" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input placeholder="enter your email" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input placeholder="enter password" id="password" type="password" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input placeholder="confirm password" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">

            <button type="submit">{{ __('Register') }}</button>
        </div>
    </form>

    <div class="container" style="background-color:#2f3336">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw links">
            <a href="{{ route('login') }}">
                {{ __('have an account? Login') }}
            </a>
        </span>
    </div>
</div>
@endsection
