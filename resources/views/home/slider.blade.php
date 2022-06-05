<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        @foreach($sliderdata as $rs)
        <div class="hero__items set-bg" data-setbg="{{Storage::url($rs->image)}}">
            <div class="hero__text">
                <h2>{{$rs->title}}</h2>
                <a href="{{route('contentdetails',['id'=>$rs->id])}}" class="primary-btn">See Project</a>
                <a href="#" class="more_btn">Discover more</a>
                <div class="hero__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="slide-num" id="snh-1"></div>
    <div class="slider__progress"><span></span></div>
</section>
<!-- Hero Section End -->
