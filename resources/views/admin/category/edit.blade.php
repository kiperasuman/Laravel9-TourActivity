@extends('layouts.adminbase')

@section('title','Edit Category')

@section('content')
    <!-- partial -->
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" > Edit Category:{{$data->title}}</h4>
                <p class="card-description"><u> Category Elements </u> </p>

                <form class="forms" action="/admin/category/update/{{$data->id}}" method="post">
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
                        <label>Image upload</label>
                        <input type="file" name="image" class="file-upload-default" value="{{$data->image}}">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
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
