@extends('layouts.frontbase')

@section('title','Complete Attend')

@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Complete Order</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>Complete Order</span>
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
                <div class="col-md-12">
                    <div class="about__text about__page__text">
                        <div class="section-title">
                            <h2>Approved Tours </h2>
                        </div>
                        @include('home.messages')
                        <span>

                        <table class="table">
                            <thead>
                                 <tr>
                                    <th scope="col">User Id</th>
                                    <th scope="col">Content Id</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Content Title</th>
                                    <th scope="col">Content Date</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Status</th>
                                 </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $rs)
                                @if($rs->status !='New')
                                <tr>
                                   <td>{{$rs->user_id}}</td>
                                   <td>{{$rs->content_id}}</td>
                                   <td>
                                     <img src="{{Storage::url($rs->content->image)}}" width="60" height="50">
                                   </td>
                                   <td>{{$rs->content->title}}</td>
                                   <td>{{$rs->content->date}}</td>
                                   <td>{{$rs->content->type}}</td>
                                    <td>{{$rs->content->city}}</td>
                                   <td>{{$rs->status}}</td>
                                </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                        </span>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- About Page Section End -->
@endsection
