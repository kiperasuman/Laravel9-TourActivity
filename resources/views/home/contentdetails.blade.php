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
                            <div class="product__details__widget__item">
                                <form action="{{route('attend.store')}}" method="post">
                                    @csrf
                                    <input class="input" name="status" type="hidden" value="{{$data->status}}">
                                    <input class="input" name="id" type="hidden" value="{{$data->id}}">
                                    <button type="submit" class="site-btn">Attend Tour </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $average=$data->comment->average('rate')
            @endphp
            <a href="#">{{number_format($average,1)}}/{{$data->comment->count('id')}} Comment(s)</a>
            <div class="col-lg-4">
                <div class="project__sidebar">
                    <div class="row">
                        <div class="col-lg-12">
                        @foreach($comments as $rs)
                        <div class="card">
                            <div class="card-body">
                            <h6 class="card-title">Date: {{$rs->created_at}}</h6>
                            <h6 class="card-title">User : {{$rs->user->name}}</h6>
                            <h6 class="card-title"> Rate:{{$rs->rate}}</h6>
                            <h6 class="card-title"> Subject: {{$rs->subject}}</h6>
                            <h6 class="card-title"> Comment: {{$rs->comment}} </h6>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4">
                <div class="project__sidebar">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact__form__text">
                                <div class="section-title">
                                    <span>Form</span>
                                    <h2>Get in touch</h2>
                                </div>
                                <p>Your email address will not be published.</p>
                                @include('home.messages')
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact__form">
                                <form action="{{route('storecomment')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="content_id" value="{{$data->id}}"/>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <input type="text" placeholder="Subject" name="subject"/>
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea placeholder="Comment" name="comment"></textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <input type="number" placeholder="Rate:1-5" name="rate"/>
                                        </div>
                                    </div>
                                    @auth()
                                        <button type="submit" class="site-btn">Send Message</button>
                                    @else
                                        <a href="/login" class="site-btn"> For Submit Your Review,Please
                                            Login</a>
                                    @endauth
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Project Page Section End -->
@endsection
