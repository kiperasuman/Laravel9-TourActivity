@extends('layouts.adminbase')

@section('title','Content List')

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Content List</h3>
                            <a href="{{route('admin.content.create')}}" class="btn btn-inverse-success btn-fw" >Add Content </a>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12 grid-margin stretch-card">

                    <div class="card">
                        <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th style="width: 10px">Id</th>
                                        <th style="width:50px">Category</th>
                                        <th style="width:50px">Title</th>
                                        <th style="width:50px">Type</th>
                                        <th style="width:50px">Location</th>
                                        <th style="width:50px">Activity Date</th>
                                        <th style="width:50px">Image</th>
                                        <th style="width:50px">Image Gallery </th>
                                        <th style="width: 25px">Status</th>
                                        <th style="width: 1px">Edit</th>
                                        <th style="width: 1px">Delete</th>
                                        <th style="width: 1px">Show</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($data as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                        <td>{{$rs->title}}</td>
                                        <td>{{$rs->type}}</td>
                                        <td>{{$rs->location}}</td>
                                        <td>{{$rs->date}}</td>
                                        <td>
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height:available">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('admin.image.index',['cid'=>$rs->id])}}"
                                            onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700' )">
                                            <img src="{{asset('assetss')}}/admin/images/galleryy.png" style="height:available">
                                            </a>
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin.content.edit',['id'=>$rs->id])}}" class="btn btn-inverse-success btn-fw">Edit</a></td>
                                        <td><a href="{{route('admin.content.destroy',['id'=>$rs->id])}}" class="btn btn-inverse-danger btn-fw" onclick="return confirm('Deleting!Are you sure?')">Delete</a></td>
                                        <td><a href="{{route('admin.content.show',['id'=>$rs->id])}}" class="btn btn-inverse-info btn-fw">Show</a></td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
           </div>

<!-- buradan iki div silindi üstteki footer kısmını çekmek için -->
@endsection
