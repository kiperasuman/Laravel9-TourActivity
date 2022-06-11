<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        @foreach($sliderdata as $rs)
        <div class="hero__items set-bg" data-setbg="{{Storage::url($rs->image)}}">
            <div class="hero__text">
                <h2>{{$rs->title}}</h2>
                <a href="{{route('contentdetails',['id'=>$rs->category->id])}}" class="primary-btn">See Project</a>
                <a href="{{route('contentdetails',['id'=>$rs->category->id])}}" class="more_btn">Discover more</a>
                <div class="hero__social">
                    <a href="https://m.facebook.com/102230685838556/"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/bubbletourr?t=67oo5A4fAF2WpzW5sKze6w&s=09"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/bubbletourr/"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="slide-num" id="snh-1"></div>
    <div class="slider__progress"><span></span></div>
</section>
<!-- Hero Section End -->
