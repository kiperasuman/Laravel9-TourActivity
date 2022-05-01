<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> @yield("title")</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assetss')}}/admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{asset('assetss')}}/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assetss')}}/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assetss')}}/admin/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="{{asset('assetss')}}/admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assetss')}}/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('assetss')}}/admin/images/favicon.png" />
    @yield("head")
</head>
<body>
@include('admin.header')

@section('sidebar')
    @include('admin.sidebar')
@show

@yield('content')

@include('admin.footer')
@yield('foot')

</body>
</html>

