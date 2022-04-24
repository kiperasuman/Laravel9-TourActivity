@extends('layouts.adminbase')

@section('title','Edit Content: '.$data->title)

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection

@section('content')
    <!-- partial -->
<div class="main-panel">
   <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title" > Edit Content:{{$data->title}}</h4>
                <p class="card-description"><u> Content Elements </u> </p>

                <form class="forms" action="{{route('admin.content.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Parent Category </label>
                        <select class="form-control select2" name="category_id" >
                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}" @if($rs->id == $data->category_id) selected="selected" @endif>
                                    {{App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                </option>
                            @endforeach
                        </select>
                    </div>
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
                        <label for="exampleInputName1">Detail Information</label>
                        <textarea style="size: 15px" class="form-control" name="detail" id="detail">
                           {{$data->detail}}
                        </textarea>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Type</label>
                        <input type="text" class="form-control" name="type"  placeholder="Type" value="{{$data->type}}">
                    </div>
                     <div class="form-group">
                        <label for="exampleInputName1">City</label>
                        <input type="text" class="form-control" name="city"  placeholder="City" value="{{$data->city}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Country</label>
                        <input type="text" class="form-control" name="country"  placeholder="Country" value="{{$data->country}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Location</label>
                        <input type="text" class="form-control" name="location"  placeholder="Location" value="{{$data->location}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Activity Date</label>
                        <input type="date" class="form-control" name="date"  placeholder="Activity Date" value="{{$data->date}}">
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
 </div>
@endsection
@section('foot')
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
        <script>
    $(function () {
        $('.textarea').summernote()
    })
</script>
@endsection
