@extends('welcome')

@section('title', 'Login')

@section('content')
<div class="page-content">
    <section class="login text-center">
        <div class="content">
            <div class="login-block">
                <div class="login-content">
                    <h1 class="color-white mb-32">Login</h1>
                    <a href="#" class="google hide-link mb-24"><img src="/media/icons/google.png" alt=""> Continue with Google</a>
                    <a href="#" class="facebook hide-link mb-24"><img src="/media/icons/facebook-2.png" alt=""> Continue with Facebook</a>
                    <button id="continue-email" class="mail hide-link mb-32"><img src="/media/icons/mail.png" alt=""> Continue with email</button>
                    <div class="login-sec hide-form" style="display: none;">
                        <form action="{{url('/login')}}">
                            <div class="mb-32">
                                <input type="email" name="email" class="form-control mb-32" placeholder="Your email">
                            </div>
                            <div class="mb-32">
                                <input type="password" name="password" class="form-control mb-32" placeholder="Enter password">
                            </div>
                            <div class="text-center mb-32">
                                <button class="cus-btn primary mb-32 ">Login</button>
                            </div>
                        </form>
                        <h6 id="backtologin" class="color-primary mb-16">Go back</h6>
                    </div>
                    <div class="text-center">
                        <h6>Create an account? <a href="{{url('/signup')}}" class="color-primary">Sign up</a> </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection