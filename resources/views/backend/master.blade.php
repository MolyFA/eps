<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title>Employee Payroll System Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="{{url('/css/style.css')}}" rel="stylesheet">

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




   @include('backend.fixed.header')
       
        
  



    @include('backend.fixed.sidebar')
    



    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">


         @yield('content')






            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        


     </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{url('plugins/common/common.min.js')}}"></script>
    <script src="{{url('js/custom.min.js')}}"></script>
    <script src="{{url('js/settings.js')}}"></script>
    <script src="{{url('js/gleek.js')}}"></script>
    <script src="{{url('js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{url('/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{url('/plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{url('/plugins/d3v3/index.js')}}"></script>
    <script src="{{url('/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{url('/plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{url('/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{url('/plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{url('/plugins/moment/moment.min.js')}}"></script>
    <script src="{{url('/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{url('/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{url('/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



    <script src="{{url('/js/dashboard/dashboard-1.js')}}"></script>

</body>

</html>
