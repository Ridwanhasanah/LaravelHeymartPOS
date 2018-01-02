<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- ==== Admin LTE Start ====--}}
    <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="{{asset('adminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="{{asset('adminLTE/bower_components/font-awesome/css/font-awesome.min.css')}}">
      <!-- Ionicons -->
      <link rel="stylesheet" href="{{asset('adminLTE/bower_components/Ionicons/css/ionicons.min.css')}}">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset('adminLTE/dist/css/AdminLTE.min.css')}}">
      <!-- iCheck -->
      <link rel="stylesheet" href="{{asset('adminLTE/plugins/iCheck/square/blue.css')}}">
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
      <link rel="stylesheet" href="{{asset('adminLTE/dist/css/skins/skin-blue.min.css')}}">

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- Google Font -->
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    {{-- ===== Admin LTE End =====--}}
 
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- ===== Main Header Start =====-->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>HM</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Hey</b>Mart</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown_user messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('public/image/'.Auth::user()->foto) }}" class="user-image" alt="User Image">
              <span class="hidden-xs">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="{{asset('public/image'.Auth::user()->foto)}}" class="img-circle" alt="User Image">
                <p>
                  {{Auth::user()->name}}
                </p>
              </li>
              <li class="user-footer">
                <!-- inner menu: contains the messages -->
                <div class="pull-left">
                  <a class="btn btn-default btn-flat" href="{{-- {{route('user.profil')}} --}}">Edit Profil</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-flat btn-default" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

                  <form method="post" style="display:none" id="logout-form" action="{{route('logout')}}">
                    {{csrf_field()}}
                  </form>
                </div>
              </li>
            </ul>
          </li>
        
        </ul>
      </div>
    </nav>
  </header>
  <!-- ===== Main Header End =====-->

  {{-- =====Sidebar Start ===== --}}
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Navigasi</li>
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
        @if (Auth::user()->level == 1)
          <li><a href="{{-- {{route('kategori.index')}} --}}"><i class="fa fa-cube"></i><span>Kategori</span></a></li>
          <li><a href="{{-- {{route('produk.index')}} --}}"><i class="fa fa-cubes"></i><span>Produk</span></a></li>
          <li><a href="{{-- {{route('member.index')}} --}}"><i class="fa fa-credit-card"></i><span>Member</span></a></li>
          <li><a href="{{-- {{route('supplier.index')}} --}}"><i class="fa fa-truck"></i><span>Supplier</span></a></li>
          <li><a href="{{-- {{route('pengeluaran.index')}} --}}"><i class="fa fa-money"></i><span>Pengeluaran</span></a></li>
          <li><a href="{{-- {{route('user.index')}} --}}"><i class="fa fa-user"></i><span>User</span></a></li>
          <li><a href="{{-- {{route('penjualan.index')}} --}}"><i class="fa fa-upload"></i><span>Penjualan</span></a></li>
          <li><a href="{{-- {{route('pembelian.index')}} --}}"><i class="fa fa-download"></i><span>Pembelian</span></a></li>
          <li><a href="{{-- {{route('laporan.index')}} --}}"><i class="fa fa-file-pdf-o"></i><span>Laporan</span></a></li>
          <li><a href="{{-- {{route('setting.index')}} --}}"><i class="fa fa-gears"></i><span>Setting</span></a></li>
        @else
          <li><a href="{{-- {{route('transaksi.index')}} --}}"><i class="fa fa-shopping-cart"></i><span>Transaksi</span></a></li>
          <li><a href="{{-- {{route('transaksi.new')}} --}}"><i class="fa fa-cart-plus"></i><span>Transaksi Baru</span></a></li>
        @endif
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  {{-- =====Sidebar End ===== --}}

  <!-- ===== Content Start===== -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('title')
      </h1>
      <ol class="breadcrumb">
        @section('breadcrumb')
        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
        @show
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
   <!-- ===== Content End ===== -->

  <!-- Main Footer Start -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Aplikasi POS Pondok Programmer
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2018 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
  <!-- Main Footer End -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- ===== AdminLTE Script Start =====--}}
    <script src="{{asset('adminLTE/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('adminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('adminLTE/plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('adminLTE/dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('adminLTE/plugins/jQueryUI/jquery-ui.min.js')}}"></script>

    <script src="{{asset('adminLTE/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <script src="{{asset('adminLTE/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminLTE/dist/js/app.min.js')}}"></script>
    <script src="{{asset('adminLTE/plugins/chartjs/Chart.min.js')}}"></script>
    <script src="{{asset('adminLTE/plugins/datatables/jquery.datatables.min.js')}}"></script>
    <script src="{{asset('adminLTE/plugins/datatables/datatables/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminLTE/plugins/datepicker/booststrap.datepicker.js')}}"></script>
    <script src="{{asset('public/js/validator.min.js')}}"></script>

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
    {{-- ===== AdminLTE Script End =====--}}
@yield('script')
</body>
</html>