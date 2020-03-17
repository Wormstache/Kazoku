@extends('layouts.user')

@section('content')
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img src="images/kazoku-logo.png" alt="CoolAdmin">
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p>
                            {{ $errors->first('email') }}
                            {{ $errors->first('password') }}
                        </p>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <input type="checkbox" name="remember">Remember Me
                            </label>
                            <label>
                                <a href="{{ route('password.request') }}">Forgotten Password?</a>
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                <button class="au-btn au-btn--block au-btn--blue m-b-20"><a href="redirect/facebook" style="color: inherit;">sign in with facebook</a></button>
                                <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                            </div>
                        </div>
                    </form>
                    <div class="register-link">
                        <p>
                            Don't you have account?
                            <a href="{{route('register')}}">Sign Up Here</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
