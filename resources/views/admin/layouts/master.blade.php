<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{URL::to('/')}}/images/favicon.png">
    <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon.png">

    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/normalize.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/pe-icon-7-filled.css">

    <link href="{{URL::to('/')}}/assets/weather/css/weather-icons.css" rel="stylesheet"/>
    <link href="{{URL::to('/')}}/assets/calendar/fullcalendar.css" rel="stylesheet"/>

    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/style.css">
    <link href="{{URL::to('/')}}/assets/css/charts/chartist.min.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/lib/chosen/chosen.min.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ route('admin') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                </li>
                <li class="menu-title">Mainmenu</li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-rocket"></i>Post</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-bars"></i><a href="{{ route('admin.all') }}">Semua Post</a></li>
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('admin.post') }}">Tambah Post</a></li>
                        <li><i class="fa fa-video-camera"></i><a href="{{ route('admin.vlog') }}">Video Blog</a></li>
                        <li><i class="fa fa-tag"></i><a href="{{ route('admin.kategori') }}">Kategori</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</aside>

<div id="right-panel" class="right-panel">

    <header id="header" class="header">
        <div class="top-left">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ route('admin') }}"><img src="{{URL::to('/')}}/images/icon.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="{{ route('admin') }}"><img src="{{URL::to('/')}}/images/favicon.png" alt="Logo"></a>
                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
            </div>
        </div>
        <div class="top-right">
            <div class="header-menu">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="{{URL::to('/')}}/images/admin.jpg" alt="User Avatar">
                    </a>
                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>
                        <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>
                        <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                    </div>
                    <header id="header" class="header">
                        <div class="top-left">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="{{ route('admin') }}"><img src="{{URL::to('/')}}/images/icon.png" alt="Logo"></a>
                                <a class="navbar-brand hidden" href="{{ route('admin') }}"><img src="{{URL::to('/')}}/images/favicon.png" alt="Logo"></a>
                                <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                            </div>
                        </div>
                        <div class="top-right">
                            <div class="header-menu">
                                <div class="user-area dropdown float-right">
                                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        <img class="user-avatar rounded-circle" src="{{URL::to('/')}}/images/admin.jpg" alt="User Avatar">
                                    </a>
                                    <div class="user-menu dropdown-menu">
                                        <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>
                                        <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>
                                    <!-- <a class="nav-link" href="#"><i class="fa fa-cog"></i>Status Login : {{Session::get('login')}}</a> -->
                                        <a class="nav-link" href="{{ route('doLogout') }}"><i class="fa fa-power-off"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </header>
                </div>
            </div>
        </div>
    </header>

    @yield('content')

    <div class="clearfix"></div>

    <footer class="site-footer">
        <div class="footer-inner bg-white">
            <div class="row">
                <div class="col-sm-6">
                    Copyright &copy;
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                    All rights reserved.
                </div>
            </div>
        </div>
    </footer>

</div>

<script src="{{URL::to('/')}}/assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/popper.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/plugins.js"></script>
<script src="{{URL::to('/')}}/assets/js/main.js"></script>

<script src="{{URL::to('/')}}/assets/js/lib/chart-js/Chart.bundle.js"></script>
<!--Chartist Chart-->
<script src="{{URL::to('/')}}/assets/js/lib/chartist/chartist.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/chartist/chartist-plugin-legend.js"></script>

<script src="{{URL::to('/')}}/assets/js/lib/flot-chart/jquery.flot.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/flot-chart/jquery.flot.pie.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/flot-chart/jquery.flot.spline.js"></script>

<script src="{{URL::to('/')}}/assets/weather/js/jquery.simpleWeather.min.js"></script>
<script src="{{URL::to('/')}}/assets/weather/js/weather-init.js"></script>

<script src="{{URL::to('/')}}/assets/js/lib/moment/moment.js"></script>
<script src="{{URL::to('/')}}/assets/calendar/fullcalendar.min.js"></script>
<script src="{{URL::to('/')}}/assets/calendar/fullcalendar-init.js"></script>

<script src="{{URL::to('/')}}/assets/js/lib/data-table/datatables.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/data-table/jszip.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/lib/data-table/datatables-init.js"></script>

<script src="{{URL::to('/')}}/assets/js/lib/chosen/chosen.jquery.min.js"></script>

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>

@yield('js-editor')

<script>
    jQuery(document).ready(function () {
        jQuery(".standardSelect").chosen({
            disable_search_threshold: 10,
            no_results_text: "Oops, nothing found!",
            width: "100%"
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
    });
</script>

<div id="container">

</div>

</body>
</html>
