@extends('layouts.frontbase')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))


@section('slider')
    @include('home.slider')
@endsection

@section('content')
    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>who are we</span>
                            <h2>We propose and discuss design rules</h2>
                        </div>
                        <div class="about__para__text">
                            <p>Metasurfaces are generally designed by placing scatterers in periodic or pseudo-periodic
                                grids. We propose and discuss design rules for functional metasurfaces with randomly
                                placed.</p>
                            <p>Anisotropic elements that randomly sample. Quisque sit amet nisl ante. Fusce lacinia non
                                tellus id gravida. Cras neque dolor, volutpat et hendrerit et.</p>
                        </div>
                        <a href="#" class="primary-btn normal-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="about__pic__inner">
                            <img src="{{asset('assets')}}/img/about-pic.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Project Section Begin -->
    <section class="project">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Our works</span>
                        <h2>Latest Tours</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="project__slider owl-carousel">
                    @foreach($contentdatalist as $rs)
                    <div class="col-lg-3">
                        <div class="project__slider__item set-bg" data-setbg="{{Storage::url($rs->image)}}">
                            <div class="project__slider__item__hover">
                              <a href="{{route('attend.add',['id'=>$rs->id])}}">
                                  <h5><span>{{$rs->title}}</span></h5>
                              </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Project Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial spad set-bg" data-setbg="{{asset('assets')}}/img/testimonial/testimonial-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Our Users Say</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonial__carousel">
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-9 col-lg-10">
                                    <div class="section-title">
                                        <span>Muğla </span>
                                    </div>
                                    <p>
                                        “1.If you want to get away
                                        from the tiring air of Istanbul for a moment,
                                        Muğla is the best place for you.”</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial__item">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-9 col-lg-10">
                                    <div class="section-title">
                                        <span>Yedigöller Tours</span>
                                    </div>
                                    <p>“2. It is a unique opportunity
                                        to get rid of the stress of the city
                                        by taking a small getaway
                                        to find peace with its quiet and calm nature,
                                        where you can see every shade of green, yellow,
                                        orange and even brown.”</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-7 col-sm-10 ">
                    <div class="testimonial__client">
                        <div class="testimonial__client__item add">
                            <div class="testimonial__client__pic">
                                <img src="{{asset('assets')}}/img/testimonial/ta-1.png" alt="">
                            </div>
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span>CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                            <div class="testimonial__client__pic">
                                <img src="{{asset('assets')}}/img/testimonial/ta-2.png" alt="">
                            </div>
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span>CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                            <div class="testimonial__client__pic">
                                <img src="{{asset('assets')}}/img/testimonial/ta-3.png" alt="">
                            </div>
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span>CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                            <div class="testimonial__client__pic">
                                <img src="{{asset('assets')}}/img/testimonial/ta-4.png" alt="">
                            </div>
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span>CEO Woolley</span>
                            </div>
                        </div>
                        <div class="testimonial__client__item">
                            <div class="testimonial__client__pic">
                                <img src="{{asset('assets')}}/img/testimonial/ta-5.png" alt="">
                            </div>
                            <div class="testimonial__client__text">
                                <h5>Renee Calhoun</h5>
                                <span>CEO Woolley</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Team Section Begin -->

    <!-- Team Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="{{asset('assets')}}/img/call-bg.jpg">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="callto__text">
                        <span>Why choose us?</span>
                        <h2>The experience to help enhance your itinerary - or tailor-make you an entire journey
                        </h2>
                        <a href="{{route('contact')}}" class="primary-btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Latest Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-6">

                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="latest__btn">

                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </section>
    <!-- Latest Section End -->
@endsection
