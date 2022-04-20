@extends('layouts.adminbase')

@section('title','Show Category')

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
                                     <th style="width: 100px" >Id</th>
                                     <td>{{$data->id}}</td>
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
                                    <tr>
                                        <th style="width:auto ">Image</th>

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
                <a href="{{route('admin.category.edit',['id'=>$data->id])}}"class="btn btn-outline-success btn-fw"> Edit</a>
                <a href="{{route('admin.category.destroy',['id'=>$data->id])}}"class="btn btn-outline-reddit btn-fw" onclick="return confirm('Deleting!Are you sure?')"> Delete </a>
            </div>
        </div>
    </div>
   </div>

@endsection
