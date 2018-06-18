@extends('customer.layouts.master')

@section('content')
<h1>Login</h1>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <label for="email">E-Mail Address</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span>
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div>
        <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
        </label>
    </div>
    
    <div>
        <button type="submit">Login</button>
    </div>

    <div>
        <h3><a href="{{ route('password.request') }}">Forgot Your Password?</a></h3>
        <h3><a href="{{ route('register') }}">Don't have an account? Click here to register.</a></h3>
    </div>
</form>

@endsection
