<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/lightbox.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/jquery.rateyo.css"/>
    <!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/inner-page-style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
    @yield('head')
</head>
<body>
<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
@include('home.header')
<!-- burası sorun çıkartıyordu yorum satırına aldım sorun:: iki kez döngüye giriyordu  burada section slider ve show vardı sildim-->
@section('slider')
    @include('home.slider')
@show


@section('sidebar')
    @include('home.sidebar')
@show

@yield('content')


@include('home.footer')
@yield('foot')
</body>
</html>
