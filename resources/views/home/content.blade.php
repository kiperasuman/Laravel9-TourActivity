@extends('layouts.frontbase')

@section('title',$data->title)


@section('content')

    <div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - February 10, 2014!</div>
       <br> <div class="container_12"> </br>
            <div class="grid_7">
                <div class="blog">
                    <time datetime="2014-10-01">15<span>Feb</span></time>
                    <div class="extra_wrapper">
                        <div class="text1 col1">{{$data->title}}</div>
                        {!! $data->description !!}
                    </div>
                    <div class="clear"></div>
                    <img src="{{Storage::url($data->image)}}" alt="" class="img_inner">
                    <div class="slideshow-container">
                        @foreach($images as $rs)
                              <img src="{{Storage::url($rs->image)}}" class="img_inner">
                        @endforeach
                    </div>
                    <p>{!! $data->detail !!}</p>
                    <br>
                </div>
            </div>
         </div>
    </div>

@endsection
