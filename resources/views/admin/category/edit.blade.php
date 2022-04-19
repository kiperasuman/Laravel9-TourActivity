@extends('layouts.adminbase')

@section('title','Edit Category')

@section('content')
    <!-- partial -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" > Edit Category:{{$data->title}}</h4>
                <p class="card-description"><u> Category Elements </u> </p>

                <form class="forms" action="{{route('admin.category.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$data->title}}" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Keywords</label>
                        <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input type="text" class="form-control" name="description" value="{{$data->description}}" >
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Image upload</label>
                        <div class="input-group col-xs-12">
                            <div class="custom-file">
                                <label class="form-control custom-file-label" for="exampleInputFile" > Upload Image</label>
                                <input type="file" name="image" class="custom-file-input" value="{{$data->image}}">
                            </div>
                            </div>
                    </div>

                    <div class="form-group">
                          <label>Status</label>
                            <select class="form-control" name="status">
                                <option selected>{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
