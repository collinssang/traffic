<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <!-- CSS Files -->
        <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="{{url('/')}}/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{url('/')}}/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="{{url('/')}}/css/animate.css" rel="stylesheet" media="screen">
        <link href="{{url('/')}}/css/owl.theme.css" rel="stylesheet">
        <link href="{{url('/')}}/css/owl.carousel.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{url('/')}}/css/custom.css">
        <!-- Colors -->
        <link href="{{url('/')}}/css/css-index.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="{{url(('/'))}}/font-awesome/css/font-awesome.css"  />
        <!-- <link href="css/css-index-green.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-purple.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-red.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-orange.css" rel="stylesheet" media="screen"> -->
        <!-- <link href="css/css-index-yellow.css" rel="stylesheet" media="screen"> -->

        <!-- Google Fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic" />
  <script src="{{url('/')}}/js/jquery.js"></script>
  <?php $url = url('/setCookie'); ?>
</head>
<body data-spy="scroll" data-target="#navbar-scroll" onload="return set_cookie();">
  <!-- /.preloader -->
        <div id="preloader"></div>
        <div id="top"></div>
        @yield('content')
    <!-- Scripts -->
     <!-- /.javascript files -->
        <script src="{{url('/')}}/js/jquery.js"></script>
        <script src="{{url('/')}}/js/bootstrap.min.js"></script>
        <script src="{{url('/')}}/js/custom.js"></script>
        <script src="{{url('/')}}/js/jquery.sticky.js"></script>
        <script src="{{url('/')}}/js/wow.min.js"></script>
        <script src="{{url('/')}}/js/owl.carousel.min.js"></script>
        <script src="{{url('/')}}/js/custom2.js"></script>
        <script src="{{url('/')}}/js/ajax.js"></script>
    <!-- <script src="{{url('/')}}/plugins/jquery-1.10.2.js"></script> -->
    <!-- <script src="{{url('/')}}/plugins/bootstrap/bootstrap.min.js"></script> -->
        <script src="{{url('/')}}/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="{{url('/')}}/plugins/pace/pace.js"></script>
        <script src="{{url('/')}}/scripts/siminta.js"></script>
        <!-- Page-Level Plugin Scripts-->
        <script src="{{url('/')}}/plugins/morris/raphael-2.1.0.min.js"></script>
        <script src="{{url('/')}}/plugins/morris/morris.js"></script>
        <script src="{{url('/')}}/scripts/dashboard-demo.js"></script>
        <script src="{{url('/')}}/js/cookie.js"></script>

        <script>
                                    new WOW().init();
        </script>

<script src="{{url('/')}}/js/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{url('/')}}/js/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('.example22').DataTable()
    $('#data-tables').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>
