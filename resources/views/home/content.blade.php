@extends('layouts.frontbase')

@section('title',$data->title)

@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Projects Details</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <a href="./project.html">Project</a>
                            <span>{{$data->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Project Details Section Begin -->
    <section class="project-details spad">
        <div class="container">
            <div class="row">

                @foreach($categoryList as $test)
                    <div class="col-md-4">
                        <a href="{{route('contentdetails',['id'=>$test->id])}}">
                            <h4 class="text-center">{{$test->title}}</h4>
                            <img src="{{Storage::url($test->image)}}" height="300">
                        </a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Project Details Section End -->
@endsection
