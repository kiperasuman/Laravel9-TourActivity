@extends('layouts.frontbase')

@section('title','User Registration Page |')


@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>User Registration</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>User Registration</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->
    <!-- About Page Section Begin -->
    <section class="about-page spad">
        <div class="container">
            @include('auth.register')
        </div>
    </section>
    <!-- About Page Section End -->

@endsection
