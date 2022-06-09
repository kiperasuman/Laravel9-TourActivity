@extends('layouts.frontbase')

@section('title','User Panel')


@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>User</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>User Panel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>User Menu</h2>
                        </div>
                        <span>
                            @include('home.user.usermenu')
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="contact__text">
                            <div class="section-title">
                                <h2>User Profile</h2>
                                <span>
                             @include('profile.show')
                           </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
