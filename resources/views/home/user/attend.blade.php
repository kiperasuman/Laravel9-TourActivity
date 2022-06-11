@extends('layouts.frontbase')

@section('title','User Attend Page')


@section('content')

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('assets')}}/img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Attend</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}">Home</a>
                            <span>User Attend</span>
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
                <div class="col-md-12">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>User Attend</h2>
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
                                <h2> Tour & Activity Information </h2>
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
                                    <th scope="col">Delete</th>
                                 </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $rs)
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
                                    <td class="btn btn-inverse-danger btn-fw">
                                    <a href="{{route('attend.destroy',['id'=>$rs->id])}}"
                                       class="btn btn-inverse-danger btn-fw"
                                       onclick="return confirm('Deleting!Are you sure?')">  [X]</a>
                                    </td>
                                   </tr>
                            @endforeach
                            </tbody>
                        </table>
                            </span>
                            </div>
                            <br>
                            <button class="btn btn-light">Total Tour: {{\App\Http\Controllers\AttendController::countattend()}}</button>
                            <form action="{{route("attend.completeattend")}}" method="post"> </br>
                                @csrf
                                <button class="btn btn-light">Attend Tour</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
