@extends('layouts.master')

@section('content')

    <!-- Start Banner Area -->
    {{ Breadcrumbs::render('login') }}
    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="img/login.jpg" alt="">
                        <div class="hover">
                            <h4>New to our website?</h4>
                            <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                            <a class="primary-btn" href="{{route('register')}}">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Log in to enter</h3>
                        <form class="row login_form"  method="POST" action="{{ route('login') }}" id="contactForm" novalidate="novalidate">
                            {{csrf_field()}}

                                <!--email -->
                            <div class="col-md-12 form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>

                                <!--password -->
                            <div class="col-md-12 form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Your Password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>

                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Log In</button>
                                <a href="{{route('password.request')}}">Forgot Password?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->

@endsection