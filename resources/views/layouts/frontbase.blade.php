<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Staging Template">
    <meta name="keywords" content="Staging, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Asuman Kiper">
    <link rel="icon" type="image/x-icon" href="@yield('icon')">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/slick.css" type="text/css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css" type="text/css">
    @yield('head')
</head>

<body>


@include('home.header')
<!-- burası sorun çıkartıyordu yorum satırına aldım sorun:: iki kez döngüye giriyordu  burada section slider ve show vardı sildim-->

@section('sidebar')
    @include('home.sidebar')
@show

@section('slider')
@show

@yield('content')

@include('home.footer')
@yield('foot')
</body>
</html>
