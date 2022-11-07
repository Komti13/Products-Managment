<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
{{--    <link rel="icon" href="{{asset('/images/favicon.png')}}" >--}}
    <!--Page title-->
    <title>resources/admin Space</title>
    <!--bootstrap-->
{{--    @vite([--}}
{{--                'resources/admin/css/bootstrap.min.css',--}}
{{--                'resources/admin/css/all.css',--}}
{{--                'resources/admin/css/style.css',--}}
{{--                'resources/admin/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css',--}}
{{--                'resources/admin/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css',--}}
{{--                'resources/admin/plugins/chartjs-bar-chart/chart.css',--}}

{{--        ])--}}
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!--font awesome-->
    <link rel="stylesheet" href="{{asset('admin/css/all.min.css')}}">
    <!-- metis menu -->
    <link rel="stylesheet" href="{{asset('admin/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css')}}">
    <!-- chart -->

    <link rel="stylesheet" href="{{asset('admin/plugins/chartjs-bar-chart/chart.css')}}">
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">

</head>
<body id="page-top">
<!-- preloader -->
<div class="preloader">
    <img src="{{asset('/images/preloader.gif')}}" alt="">
</div>
<!-- wrapper -->
<div class="wrapper">
    @include('admin.index')
</div><!--/ wrapper -->



<!-- jquery -->
{{--@vite([--}}

{{--                'resources/admin/js/all.min.js',--}}
{{--                'resources/admin/js/bootstrap.min.js',--}}
{{--                'resources/admin/js/jquery.min.js',--}}
{{--                'resources/admin/js/jquery.slimscroll.min.js',--}}
{{--                'resources/admin/js/main.js',--}}
{{--                'resources/admin/js/popper.min.js',--}}
{{--                'resources/admin/plugins/metismenu-3.0.4/assets/js/metismenu.js',--}}
{{--                'resources/admin/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js',--}}
{{--                'resources/admin/plugins/scrollbar/jquery.nicescroll.min.js',--}}
{{--                'resources/admin/plugins/scrollbar/scroll.active.js',--}}
{{--                'resources/admin/plugins/counter/js/counter.js',--}}
{{--                'resources/admin/plugins/chartjs-bar-chart/Chart.min.js',--}}
{{--                'resources/admin/plugins/chartjs-bar-chart/chart.js',--}}
{{--                'resources/admin/plugins/pie_chart/chart.loader.js',--}}
{{--                'resources/admin/plugins/pie_chart/pie.active.js',--}}

{{--    ])--}}
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<!-- popper Min Js -->
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<!-- Bootstrap Min Js -->
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<!-- Fontawesome-->
<script src="{{asset('admin/js/all.min.js')}}"></script>
<!-- metis menu -->
<script src="{{asset('admin/plugins/metismenu-3.0.4/assets/js/metismenu.js')}}"></script>
<script src="{{asset('admin/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js')}}"></script>
<!-- nice scroll bar -->
<script src="{{asset('admin/plugins/scrollbar/jquery.nicescroll.min.js')}}"></script>
<script src="{{asset('admin/plugins/scrollbar/scroll.active.js')}}"></script>
<!-- counter -->
<script src="{{asset('admin/plugins/counter/js/counter.js')}}"></script>
<!-- chart -->
<script src="{{asset('admin/plugins/chartjs-bar-chart/Chart.min.js')}}"></script>

<script src="{{asset('admin/plugins/chartjs-bar-chart/chart.js')}}"></script>
<!-- pie chart -->
<script src="{{asset('admin/plugins/pie_chart/chart.loader.js')}}"></script>
<script src="{{asset('admin/plugins/pie_chart/pie.active.js')}}"></script>


<!-- Main js -->
<script src="{{asset('admin/js/main.js')}}"></script>





</body>
</html>
