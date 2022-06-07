<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
        <a href="#"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
    </div>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__widget">
        <span>Call us for any questions</span>
        <h4>+01 123 456 789</h4>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="{{route('home')}}"><img src="{{asset('assets')}}/img/logo.png" alt=""></a>
                </div>
            </div>
           @php
               $mainCategories=\App\Http\Controllers\HomeController::maincategorylist()
           @endphp
            <div class="col-lg-6">
                <nav class="header__menu mobile-menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li>

                        </li>
                        <li><a href="#">Categories</a>
                            <ul class="dropdown">
                                @foreach($mainCategories as $rs)
                                <li><a href="{{route('content',['id'=>$rs->id])}}">{{$rs->title}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('faq')}}" method="post">FAQ</a>
                        <li><a href="{{route('references')}}">References</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__widget">
                    <span>Call us for any questions</span>
                    <h4>+01 123 456 789</h4>
                </div>
            </div>
        </div>
        <div class="canvas__open"><i class="fa fa-bars"></i></div>
    </div>
</header>
<!-- Header Section End -->
