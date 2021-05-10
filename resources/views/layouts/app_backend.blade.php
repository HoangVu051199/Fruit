<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <base href="{{ asset('') }}">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="backend/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="backend/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="backend/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="backend/css/style.css" rel="stylesheet">
</head>
<body>
<!--*******************
   Preloader start
   ********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
        </svg>
    </div>
</div>
<!--*******************
   Preloader end
   ********************-->
<!--**********************************
   Main wrapper start
   ***********************************-->
<div id="main-wrapper">

    <!--Header start-->
    @include('backend.common.header')
    <!--Header end ti-comment-alt-->

    <!--Sidebar start-->
    @include('backend.common.sidebar')
    <!--Sidebar end-->

    <!--Content body start-->
    @yield('content')
    <!--Content body end-->

    <!--Footer start-->
    @include('backend.common.footer')
    <!--Footer end-->
</div>

<!--Main wrapper end-->

<!--**********************************
   Scripts
   ***********************************-->
<script src="backend/plugins/common/common.min.js"></script>
<script src="backend/js/custom.min.js"></script>
<script src="backend/js/settings.js"></script>
<script src="backend/js/gleek.js"></script>
<script src="backend/js/styleSwitcher.js"></script>
<!-- Chartjs -->
<script src="backend/plugins/chart.js/Chart.bundle.min.js"></script>
<!-- Circle progress -->
<script src="backend/plugins/circle-progress/circle-progress.min.js"></script>
<!-- Datamap -->
<script src="backend/plugins/d3v3/index.js"></script>
<script src="backend/plugins/topojson/topojson.min.js"></script>
<script src="backend/plugins/datamaps/datamaps.world.min.js"></script>
<!-- Morrisjs -->
<script src="backend/plugins/raphael/raphael.min.js"></script>
<script src="backend/plugins/morris/morris.min.js"></script>
<!-- Pignose Calender -->
<script src="backend/plugins/moment/moment.min.js"></script>
<script src="backend/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
<!-- ChartistJS -->
<script src="backend/plugins/chartist/js/chartist.min.js"></script>
<script src="backend/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
<script src="backend/js/dashboard/dashboard-1.js"></script>
</body>
</html>
