<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
  <title> Admin Dashboard</title>
  <meta content="Admin Dashboard" name="description">
  <meta content="Themesbrand" name="author">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('frontend/img/favico.ico')}}" rel="icon">
    <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <link  href="{{ asset('backend/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('backend/assets/js/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
  @yield('css')

</head>

<body>
  <!-- Begin page -->
  <div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
      <!-- LOGO -->
      
      @include('admin.nav')
    </div><!-- Top Bar End -->
    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.side')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    @yield('content')
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
  </div><!-- END wrapper -->
  <!-- jQuery  -->
  <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/metisMenu.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/jquery.slimscroll.js') }}"></script>
  <script src="{{ asset('backend/assets/js/waves.min.js') }}"></script>
  <script src="{{ asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('backend/assets/js/app.js')}}"></script>

  @yield('script')
  <script src="{{ asset('js/toastr.min.js') }}"></script>
  <script type="text/javascript">
    toastr.options.preventDuplicates = true;
    @if (session('success'))
    toastr.success("{{session('success')}}");
    @endif

    @if (session('error'))
    toastr.error("{{session('error')}}");
    @endif

    @if (session('info'))
    toastr.info("{{session('info')}}");
    @endif

   
  </script>

</body>

</html>