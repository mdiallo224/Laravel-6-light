@extends('layouts.guest')

@section('content')
<div class="container" style="background-color:#636b6f;">
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="imgcontainer">
            <img src="/images/img_avatar.png" alt="Avatar" class="avatar">
        </div>

        <div class="">

            <input placeholder="enter email" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <input placeholder="enter password" id="password" type="password" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <button type="submit">{{ _('Login') }}</button>
            <label>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                Remember me
            </label>
        </div>
    </form>

@if (Route::has('password.request'))
    <div class="container" style="background-color:#2f3336">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw links">
            <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </span>
    </div>
@endif
</div>
@endsection
