@extends('layouts.frontbase')

@section('title','User Comments')


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
                            <span>User Comments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Contact Section Begin -->
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
                    <div class="col-md-12">
                        <div class="contact__text">
                            <div class="section-title">
                               <h2>User Comment & Reviews </h2>
                              <span>
                               <div class="card">
                                <table class="table table-bordered" >
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">Id</th>
                                        <th style="width:50px">User</th>
                                        <th style="width:50px">Content Title</th>
                                        <th style="width:50px">Subject</th>
                                        <th style="width:50px">Comment</th>
                                        <th style="width:50px">Rate</th>
                                        <th style="width: 25px">Status</th>
                                        <th style="width: 1px">Delete</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($comments as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->user->name}}</td>
                                        <td>
                                            <a href="{{route('content',['id'=>$rs->content_id])}}">{{$rs->content->title}}</a>
                                        </td>
                                        <td>{{$rs->subject}}</td>
                                        <td>{{$rs->comment}}</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                         <td>
                                             <a href="{{route('userpanel.commentdestroy',['id'=>$rs->id])}}"
                                                class="btn btn-inverse-danger btn-fw"
                                                onclick="return confirm('Deleting!Are you sure?')">Delete</a>
                                         </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                    </div>
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
