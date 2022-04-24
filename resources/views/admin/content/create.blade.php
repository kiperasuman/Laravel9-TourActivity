@extends('layouts.adminbase')

@section('title','Add Content')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"> Add Content </h4>
                <p class="card-description"> <u> Content Elements </u> </p>

                <form class="forms" action="{{route('admin.content.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Parent Content </label>
                        <select class="form-control select2" name="category_id" >
                            @foreach($data as $rs)
                                <option value="{{$rs->id}}"> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" name="title"  placeholder="Title">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Keywords</label>
                        <input type="text" class="form-control" name="keywords"  placeholder="Keywords">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input type="text" class="form-control" name="description"  placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Detail</label>
                        <textarea style="size: 15px" class="form-control" name="detail" id="detail">

                        </textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#detail' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Type</label>
                        <input type="text" class="form-control" name="type"  placeholder="Type">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">City</label>
                        <input type="text" class="form-control" name="city"  placeholder="City">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Country</label>
                        <input type="text" class="form-control" name="country"  placeholder="Country">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Location</label>
                        <input type="text" class="form-control" name="location"  placeholder="Location">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Activity Date</label>
                        <input type="date" class="form-control" name="date"  placeholder="Activity Date" value="0">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile">Image upload</label>
                        <div class="input-group col-xs-12">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input">
                                <label class="form-control custom-file-label" for="exampleInputFile"> Upload Image</label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                          <label>Status</label>
                            <select class="form-control" name="status">
                                <option>True</option>
                                <option>False</option>
                            </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
