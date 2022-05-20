@extends('layouts.frontbase')

@section('title',$category->title.' Contents')

@section('content')

    <section class="project-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    @foreach($contents as $rs)
                        <div class="project__item">
                            <img src={{Storage::url($data->image)}} alt="">
                            <h4><a href="{{route('content',['id'=>$rs->id])}}">{{$rs->title}}</a></h4>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection

