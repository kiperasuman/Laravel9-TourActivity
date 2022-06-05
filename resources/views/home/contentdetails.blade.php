@extends('layouts.frontbase')

@section('title',$data->title)

@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Our Projects</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Project Page Section Begin -->
    <section class="project-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            @foreach($images as $rs)
                                <img src="{{Storage::url($rs->image)}}" height="300">
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="project__sidebar">
                        <div class="project__sidebar__about">
                            <h2>{{$data->title}}</h2>
                            <p>{!! $data->detail !!}</p>
                        </div>
                        <div class="product__details__widget">
                            <div class="product__details__widget__item">
                                <span>Location:</span>
                                <p>{{$data->city}}</p>
                            </div>
                            <div class="product__details__widget__item">
                                <span>Activity Date:</span>
                                <p>{{$data->date}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Page Section End -->
@endsection
