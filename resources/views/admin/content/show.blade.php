@extends('layouts.adminbase')

@section('title','Show Content')

@section('content')
    <!-- partial -->
<div class="main-panel">
   <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title" >{{$data->title}}</h1>
                <div class="col-lg-12 grid-margin stretch-card" >
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive pt-3">
                                <table class="table table-striped">
                                    <tr>
                                     <th style="width: 200px" >Id</th>
                                     <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th> Category</th>
                                        <td>
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}

                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 100px">Title</th>
                                        <td>{{$data->title}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 100px">Keyword</th>
                                        <td>{{$data->keywords}}</td>
                                    </tr>

                                    <tr> <th style="width: 100px">Description</th>
                                        <td>{{$data->description}}</td>
                                    </tr>
                                    <tr> <th style="width: 100px">Detail Information</th>
                                        <td>{{$data->detail}}</td>
                                    </tr>
                                    <tr> <th style="width: 100px">Type</th>
                                        <td>{{$data->type}}</td>
                                    </tr>
                                    <tr> <th style="width: 100px">City</th>
                                        <td>{{$data->city}}</td>
                                    </tr>
                                    <tr> <th style="width: 100px">Country</th>
                                        <td>{{$data->country}}</td>
                                    </tr>
                                    <tr> <th style="width: 100px">Location</th>
                                        <td>{{$data->location}}</td>
                                    </tr>
                                    <tr> <th style="width: 100px">Activity Date</th>
                                        <td>{{$data->date}}</td>
                                    </tr>

                                    <tr>
                                        <th>Image</th>
                                       <td>
                                           @if($data->image)
                                               <img src="{{Storage::url($data->image)}}" style="size: 100px">
                                           @endif
                                       </td>
                                    </tr>
                                    <tr>
                                        <th style="width: 100px">Status</th>
                                        <td>{{$data->status}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 100px">Created Date</th>
                                        <td>{{$data->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 100px">Updated Time</th>
                                        <td>{{$data->updated_at}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('admin.content.edit',['id'=>$data->id])}}"class="btn btn-outline-success btn-fw"> Edit</a>
                <a href="{{route('admin.content.destroy',['id'=>$data->id])}}"class="btn btn-outline-reddit btn-fw" onclick="return confirm('Deleting!Are you sure?')"> Delete </a>
            </div>
        </div>
    </div>
   </div>

@endsection
