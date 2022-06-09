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
            <div class="blog__item">
                @php
                $average=$data->comment->average('rate')
                @endphp
                <a href="#">{{number_format($average,1)}}/{{$data->comment->count('id')}} Comment(s)</a>
                @foreach($comments as $rs)
                <ul>
                    <li>{{$rs->created_at}}</li>
                    <li>{{$rs->user->name}}</li>
                    <li>{{$rs->rate}}</li>
                </ul>
                <h2>{{$rs->subject}}</h2>
                <div class="blog__item__text">
                    <p>{{$rs->comment}} </p>
                </div>
                @endforeach
            </div>
            <div class="col-lg-4">
                <div class="project__sidebar">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="contact__form__text">
                                <div class="section-title">
                                    <span>Form</span>
                                    <h2>Share Your Views With Us</h2>
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
