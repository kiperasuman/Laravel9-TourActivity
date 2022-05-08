<div class="slider_wrapper">
    <div id="camera_wrap" class="">
        @foreach($sliderdata as $rs)
            <div data-src="{{Storage::url($rs->image)}}" style="width: 1600px; height:774px">
                <div class="caption fadeIn">
                    <h2>{{$rs->title}}</h2>
                    <div class="price">
                        FROM
                        <span>$1000</span>
                    </div>
                    <a href="{{route('content',['id'=>$rs->id])}}">LEARN MORE</a>
                </div>
            </div>
        @endforeach
    </div>
</div>

