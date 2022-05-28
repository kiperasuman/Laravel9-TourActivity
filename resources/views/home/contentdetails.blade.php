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
                            <a href="./index.html">Home</a>
                            <span>Projects</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Project Page Section Begin -->
    <section class="project-page spad">
        <div class="container">
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6">
                      <div class="project__item">
                         <h4><a href="#">{{$data->title}}</a></h4>
                           @foreach($images as $rs)
                             <div class="col-lg-6 col-md-6 col-sm-6">
                                 <img src="{{Storage::url($rs->image)}}" alt="" style="height: 250px;width:300px">
                             </div>
                           @endforeach
                      </div>
                  </div>
            </div>
        </div>
    </section>
    <!-- Project Page Section End -->
@endsection
