@extends('layouts.adminbase')

@section('title','Settings')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Settings</h3>
                        </div>
                    </div>
                </div>
            </div>
            <form role="form" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                <section class="content">
                    @csrf
                    <div class="row">
                        <div class="card card-primary card-tabs col-12">
                            <div class="card-header p-0 pt-1" style="background-color: white">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" data-toggle="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-general-tab" data-toggle="pill"
                                           href="#custom-tabs-one-general-tab" role="tab"
                                           aria-controls="custom-tabs-one-home" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-smtp-tab" data-toggle="pill"
                                           href="#custom-tabs-one-smtp" role="tab" aria-controls="custom-tabs-one-smtp"
                                           aria-selected="false">Smpt Email</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-social-tab" data-toggle="pill"
                                           href="#custom-tabs-one-social" role="tab"
                                           aria-controls="custom-tabs-one-social" aria-selected="false">Social Media</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-about-tab" data-toggle="pill"
                                           href="#custom-tabs-one-about" role="tab"
                                           aria-controls="custom-tabs-one-about" aria-selected="false">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-contac-tab" data-toggle="pill"
                                           href="#custom-tabs-one-contact" role="tab"
                                           aria-controls="custom-tabs-one-contact" aria-selected="false">Contact
                                            Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-references-tab" data-toggle="pill"
                                           href="#custom-tabs-one-references" role="tab"
                                           aria-controls="custom-tabs-one-references"
                                           aria-selected="false">References</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active " id="custom-tabs-one-general" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-general-tab">
                                        <input type="hidden" id="id" name="id" value="{{$data->id}}"
                                               class="form-control">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" id="title" name="title" value="{{$data->title}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Keywords</label>
                                            <input type="text" id="keywords" name="keywords" value="{{$data->keywords}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" id="description" name="description"
                                                   value="{{$data->description}}" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Company</label>
                                            <input type="text" id="company" name="company" value="{{$data->company}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" id="address" name="address" value="{{$data->address}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" id="phone" name="phone" value="{{$data->phone}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" id="email" name="email" value="{{$data->email}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control select2" name="status">
                                                <option selected="selected">{{$data->status}}</option>
                                                <option>True</option>
                                                <option>False</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Icon</label>
                                            <div class="input-group col-xs-12">
                                                <div class="custom-file">
                                                    <label class="form-control custom-file-label"
                                                           for="exampleInputFile"> Choose Icon</label>
                                                    <input type="file" name="icon" class="custom-file-input"
                                                           value="{{$data->image}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Setting</button>
                                    <div class="tab-pane fade" id="custom-tabs-one-smtp" role="tabpanel"
                                         aria-labelledby="custom-tabs-one-general-tab">
                                        <div class="form-group">
                                            <label>Smtp Server</label>
                                            <input type="text" name="smtpserver" value="{{$data->smtpserver}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Smtp Email</label>
                                            <input type="text" name="smtpemail" value="{{$data->smtpemail}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Smtppassword</label>
                                            <input type="password" name="smtppassword" value="{{$data->smtppassword}}"
                                                   class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Smtpport</label>
                                            <input type="number" name="smtpport" value="{{$data->smtpport}}"
                                                   class="form-control">
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-one-social" role="tabpanel"
                                             aria-labelledby="custom-tabs-one-general-tab">
                                            <div class="form-group">
                                                <label>Fax</label>
                                                <input type="text" name="fax" value="{{$data->fax}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" name="facebook" value="{{$data->facebook}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Instagram</label>
                                                <input type="text" name="instagram" value="{{$data->instagram}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="text" name="twitter" value="{{$data->twitter}}"
                                                       class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Youtube</label>
                                                <input type="text" name="youtube" value="{{$data->youtube}}"
                                                       class="form-control">
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-about" role="tabpanel"
                                                 aria-labelledby="custom-tabs-one-general-tab">
                                                <div class="form-group">
                                                    <label>About Us</label>
                                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-contact" role="tabpanel"
                                                 aria-labelledby="custom-tabs-one-general-tab">
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-references" role="tabpanel"
                                                 aria-labelledby="custom-tabs-one-general-tab">
                                                <div class="form-group">
                                                    <label>References</label>
                                                    <textarea id="references"
                                                              name="references">{{$data->references}}
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </form>
        </div>
        @endsection
        @section('foot')
            <script>
                ClassicEditor
                    .create(document.querySelector('#detail'))
                    .then(editor => {
                        console.log(editor);
                    })
                    .catch(error => {
                        console.error(error);
                    });
            </script>

@endsection
