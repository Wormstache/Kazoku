@extends('layouts.user')

@section('content')
<div class="page-content--bge5">
    <div class="container">
        <div class="login-wrap">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">
                        <img src="{{ asset('images/kazoku-logo.png') }}" alt="Kazoku">
                    </a>
                </div>
                <div class="login-form">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label>First name</label>
                            <input class="au-input au-input--full" type="text" name="first_name" placeholder="First name" required>
                        </div>
                        <div class="form-group">
                            <label>Last name</label>
                            <input class="au-input au-input--full" type="text" name="last_name" placeholder="Last name" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Confirm Password" required>
                        </div>
                        <div class="login-checkbox">
                            <label>
                                <input type="checkbox" name="aggree">Agree the terms and policy
                            </label>
                        </div>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">register</button>
                        <div class="social-login-content">
                            <div class="social-button">
                                <a href="redirect/facebook"><button class="au-btn au-btn--block au-btn--blue m-b-20">register with facebook</button></a>
                                <button class="au-btn au-btn--block au-btn--blue2">register with twitter</button>
                            </div>
                        </div>
                    </form>
                    <div class="register-link">
                        <p>
                            Already have account?
                            <a href="{{ route('login') }}">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection