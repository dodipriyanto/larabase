<!DOCTYPE html>
<html lang="en">

<head>
    <title{{($setting['app_name'] ? $setting['app_name'] : 'APP NAME' )}}</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content="CodedThemes" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('datta-able/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset('datta-able/assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('datta-able/assets/plugins/animation/css/animate.min.css')}}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('datta-able/assets/css/style.css')}}">

</head>

<body>
<div class="auth-wrapper">
    <div class="auth-content">
        <div class="auth-bg">
            <span class="r"></span>
            <span class="r s"></span>
            <span class="r s"></span>
            <span class="r"></span>
        </div>
        <div class="card">
            <div class="card-body text-center">

                <form class="form-horizontal" method="POST" action="{{route('login')}}" novalidate>
                    @csrf
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>


                    </div>
                    <h3 class="mb-4">Login</h3>
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" id="checkbox-fill-a1" checked="">
                            <label for="checkbox-fill-a1" class="cr"> Save credentials</label>
                        </div>
                    </div>
                    <button class="btn btn-primary shadow-2 mb-4" type="submit">Login</button>
                </form>

               {{-- <p class="mb-2 text-muted">Forgot password? <a href="auth-reset-password.html">Reset</a></p>
                <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html">Signup</a></p>--}}
            </div>
        </div>
    </div>
</div>

<!-- Required Js -->
<script src="{{asset('datta-able/assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('datta-able/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>


<script src="{{asset('datta-able/assets/plugins/sweetalert/js/sweetalert.min.js')}}"></script>
<script src="{{asset('datta-able/assets/js/pages/ac-alert.js')}}"></script>

@if($message)
    <script>
        setTimeout(function () {
            swal("Login Failed !", "Kombinasi username dan password tidak sesuai", "error");
        }, 1000);
    </script>
@endif

</body>
</html>
