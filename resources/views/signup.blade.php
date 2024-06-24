@extends('welcome')

@section('title', 'SignUp')

@section('content')
<div class="page-content">
    <section class="signup text-center">
        <div class="container-fluid">
            <div class="signup-block">
                <h1 class="color-white mb-32">Sign Up</h1>
                <form action="{{url('/login')}}">
                    <div class="mb-32">
                        <input type="email" name="email" class="form-control mb-32" placeholder="Your email">
                    </div>
                    <div class="mb-32">
                        <input type="password" name="password" class="form-control mb-32" placeholder="Enter password">
                    </div>
                    <div class="mb-32">
                        <input type="password" name="c_password" class="form-control mb-32" placeholder="Confirm password">
                    </div>
                    <div class="text-center">
                        <button class="cus-btn primary mb-32">Sign up</button>
                    </div>
                </form>
                <div class="text-center">
                    <p class="sec color-gray mb-32">
                        By continuing, you agree to VIVID Terms of Use and Privacy Policy.
                    </p>
                    <h6>Already have an account? <a href="{{url('/login')}}" class="color-primary">Log in</a></h6>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection