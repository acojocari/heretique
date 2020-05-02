@extends('layouts.master')

@section('content')

    <!-- Start Banner Area -->
    {{ Breadcrumbs::render('forgotPassword') }}
    <!-- End Banner Area -->

    <!--================Login Box Area =================-->
    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="{{asset('img/login.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Reset Password</h3>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="row login_form"  method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <!--email -->
                            <div class="col-md-12 form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-12 form-group">
                                <button type="submit" value="submit" class="primary-btn">Send Password Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Login Box Area =================-->

@endsection
