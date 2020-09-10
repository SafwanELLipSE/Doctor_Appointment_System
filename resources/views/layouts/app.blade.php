<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard v.1.0 | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/adminpro-custon-icon.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ asset('css/data-table/bootstrap-editable.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/c3.min.css') }}">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/form/all-type-forms.css') }}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body class="darklayout">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header top area start-->
    <div class="wrapper-pro">

            <!-- Siderbar Starts -->
            @include('backend.sidebar')
            <!-- Siderbar Ends -->

        <div class="content-inner-all">
            <!-- Navbar Starts -->
            @include('backend.navbar')
            <!-- Naverbar ends -->

            <!-- Header top area end-->
            @yield('content')
            <!-- Home Starts -->
            <!-- Home Ends -->
        </div>
    </div>
    <!-- Footer Start-->
    @include('backend.footer')
    <!-- Footer End-->


    <!-- jquery
		============================================ -->
    <script src="{{ asset('js/vendor/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ asset('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ asset('js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/counterup/counterup-active.js') }}"></script>
    <!-- peity JS
		============================================ -->
    <script src="{{ asset('js/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('js/peity/peity-active.js') }}"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/sparkline/sparkline-active.js') }}"></script>
    <!-- flot JS
		============================================ -->
    <script src="{{ asset('js/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('js/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('js/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('js/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('js/flot/Chart.min.js') }}"></script>
    <script src="{{ asset('js/flot/flot-active.js') }}"></script>
    <!-- map JS
		============================================ -->
    <script src="{{ asset('js/map/raphael.min.js') }}"></script>
    <script src="{{ asset('js/map/jquery.mapael.js') }}"></script>
    <script src="{{ asset('js/map/france_departments.js') }}"></script>
    <script src="{{ asset('js/map/world_countries.js') }}"></script>
    <script src="{{ asset('js/map/usa_states.js') }}"></script>
    <script src="{{ asset('js/map/map-active.js') }}"></script>
    <!-- data table JS
		============================================ -->
    <script src="{{ asset('js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ asset('js/data-table/tableExport.js') }}"></script>
    <script src="{{ asset('js/data-table/data-table-active.js') }}"></script>
    <script src="{{ asset('js/data-table/bootstrap-table-editable.js') }}"></script>
    <script src="{{ asset('js/data-table/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('js/data-table/bootstrap-table-resizable.js') }}"></script>
    <script src="{{ asset('js/data-table/colResizable-1.5.source.js') }}"></script>
    <script src="{{ asset('js/data-table/bootstrap-table-export.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ asset('js/main.js') }}"></script>
    	@include('sweetalert::alert')
</body>

</html>
