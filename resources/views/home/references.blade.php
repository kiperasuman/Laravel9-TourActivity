@extends('layouts.frontbase')

@section('title','References | '. $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>References</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>References</span>
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
            <div class="row">
                    <div class="about__text about__page__text">
                        <div class="section-title">
                            <h2>References</h2>
                        </div>
                            <p>{!! $setting->references !!} </p>
                    </div>
            </div>
        </div>
    </section>
    <!-- About Page Section End -->
@endsection
