@extends('theme.master')
@section('title','Login')
<!--================ Hero sm banner start =================-->
@section('content')
    <main class="site-main">
<section class="mb-5px">
    <div class="container">
        <div class="hero-banner hero-banner--sm">
            <div class="hero-banner__content">
                <h1>Login</h1>
            </div>
        </div>
    </div>
</section>
<!--================ Hero sm banner end =================-->

<!-- ================ contact section start ================= -->
<section class="section-margin--small section-margin">
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                <form action="{{route('login')}}" class="form-contact contact_form" method="post" >
                    @csrf

                    <div class="form-group">
                        <input class="form-control border" name="email" value="{{old('email')}}" type="email" placeholder="Enter email address">
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                    </div>
                    <div class="form-group">
                        <input class="form-control border" name="password" id="name" type="password" placeholder="Enter your password">
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                    </div>
                    <div class="form-group text-center text-md-right mt-3">
                        <a href="{{ route('register') }}" class="mx-3">Sign up instead ?</a>
                        <button type="submit" class="button button--active button-contactForm">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- ================ contact section end ================= -->

    </main>

@endsection
