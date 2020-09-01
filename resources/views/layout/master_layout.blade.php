
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="images/favicon.ico" type="image/ico" />
<title>Covid-19</title>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<link href="{{ url('assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ url('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">

<link href="{{ url('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

<link href="{{ url('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">

<link href="{{ url('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

<link href="{{ url('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">

<link href="{{ url('assets/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet" />

<link href="{{ url('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

<link href="{{ url('assets/build/css/custom.min.css') }}" rel="stylesheet">
</head>
<body class="nav-md">
<div class="container body">
<div class="main_container">
<div class="col-md-3 left_col">
<div class="left_col scroll-view">
<div class="navbar nav_title" style="border: 0;">
<a href="{{ url('/dashboards') }}" class="site_title"><i class="fa fa-paw"></i> <span>Covid-19</span></a>
</div>
<div class="clearfix"></div>

{{-- <div class="profile clearfix">
<div class="profile_pic">
<img src="images/img.jpg" alt="..." class="img-circle profile_img">
</div>
<div class="profile_info">
<span>Welcome,</span>
<h2>John Doe</h2>
</div>
</div> --}}

<br />

<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
<div class="menu_section">
{{-- <h3>General</h3> --}}
<ul class="nav side-menu">
<li><a><i class="fa fa-home"></i> Dashboards <span class="fa fa-chevron-down"></span></a>
<ul class="nav child_menu">
<li><a href="{{ url('/dashboards/indonesia') }}">Indonesia</a></li>
<li><a href="index3.html">Bekasi</a></li>
</ul>
</ul>
</div>
</div>


<div class="sidebar-footer hidden-small">
<a data-toggle="tooltip" data-placement="top" title="Settings">
<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="FullScreen">
<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="Lock">
<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
</a>
<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
</a>
</div>

</div>
</div>

<div class="top_nav">
<div class="nav_menu">
<div class="nav toggle">
<a id="menu_toggle"><i class="fa fa-bars"></i></a>
</div>
<nav class="nav navbar-nav">

</nav>
</div>
</div>


<div class="right_col" role="main">

{{-- Start Content --}}
@yield('content')
{{-- End Content --}}

</div>


<footer>
<div class="pull-right">
Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
</div>
<div class="clearfix"></div>
</footer>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script src="{{ url('assets/vendors/jquery/dist/jquery.min.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/fastclick/lib/fastclick.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/nprogress/nprogress.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/Chart.js/dist/Chart.min.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/gauge.js/dist/gauge.min.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/iCheck/icheck.min.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/skycons/skycons.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/Flot/jquery.flot.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>
<script src="{{ url('assets/vendors/Flot/jquery.flot.pie.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>
<script src="{{ url('assets/vendors/Flot/jquery.flot.time.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>
<script src="{{ url('assets/vendors/Flot/jquery.flot.stack.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>
<script src="{{ url('assets/vendors/Flot/jquery.flot.resize.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>
<script src="{{ url('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>
<script src="{{ url('assets/vendors/flot.curvedlines/curvedLines.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/DateJS/build/date.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/jqvmap/dist/jquery.vmap.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>
<script src="{{ url('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>
<script src="{{ url('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/vendors/moment/min/moment.min.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>
<script src="{{ url('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>

<script src="{{ url('assets/build/js/custom.min.js') }}" type="62f5048db4dc09f3a80c4f1a-text/javascript"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="62f5048db4dc09f3a80c4f1a-|49" defer=""></script></body>

<script data-cfasync="false" src="{{ url('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
<script src="{{ url('assets/vendors/jquery/dist/jquery.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>

<script src="{{ url('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>

<script src="{{ url('assets/vendors/fastclick/lib/fastclick.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>

<script src="{{ url('assets/vendors/nprogress/nprogress.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>

<script src="{{ url('assets/vendors/iCheck/icheck.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>

<script src="{{ url('assets/vendors/datatables.net/js/jquery.dataTables.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/datatables.net-buttons/js/buttons.flash.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/datatables.net-buttons/js/buttons.print.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/jszip/dist/jszip.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/pdfmake/build/pdfmake.min.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
<script src="{{ url('assets/vendors/pdfmake/build/vfs_fonts.js') }}" type="d48539c966dc4bd8a599a9b6-text/javascript"></script>
</html>
