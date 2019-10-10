<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui"/>
    <title>Admin Login</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <link href="{{asset('frontend/img/favico.ico')}}" rel="icon">
    <link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="{{ asset('backend/assets/js/jquery.min.js')}}"></script>
      <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}"/>

</head>
<body>
<!-- Background -->
<div class="account-pages"></div>
<!-- Begin page -->
<div class="wrapper-page">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center m-0">
               
            </h3>
            <div class="p-3">
                <p class="text-muted text-center">Sign in to continue Admin Portal.</p>
                <form class="form-horizontal m-t-30" action="{{ route('admin.login') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" class="form-control"  name="email" placeholder="Enter Email"/>
                    </div>
                    <div class="form-group">
                        <label for="userpassword">Password</label>
                        <input type="password" name="password" class="form-control"  placeholder="Enter password"
                        />
                    </div>
                    <div class="form-group row m-t-20">
                        <div class="col-6">
                           
                        </div>
                        <div class="col-6 text-right">
                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">
                                Log In
                            </button>
                        </div>
                    </div>
                    {{-- <div class="form-group m-t-10 mb-0 row">
                        <div class="col-12 m-t-20">
                            <a href="{{ route('admin.forget_password')}}" class="text-muted"
                            ><i class="mdi mdi-lock"></i> Forgot your password?</a
                            >
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
    
</div>

<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('backend/assets/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('backend/assets/js/waves.min.js') }}"></script>
<script src="{{ asset('backend/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/app.js')}}"></script>
  <script src="{{ asset('js/toastr.min.js') }}"></script>
  <script type="text/javascript">
    toastr.options.preventDuplicates = true;
    // toastr.success("ola");
    @if (session('error'))
    toastr.error("{{session('error')}}");
    @endif

    @if (session('success'))
    toastr.success("{{session('success')}}");
    @endif


    @if (session('info'))
    toastr.info("{{session('info')}}");
    @endif


    </script>

</body>
</html>