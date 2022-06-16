<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
          content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Login with Background Color - Modern Admin - Clean Bootstrap 4 Dashboard HTML Template + Bitcoin
        Dashboard</title>
    <link rel="apple-touch-icon" href="{{asset('modern-admin/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('modern-admin/app-assets/images/ico/favicon.ico')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('modern-admin/app-assets/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('modern-admin/app-assets/vendors/css/forms/icheck/custom.css')}}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('modern-admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('modern-admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/pages/login-register.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('modern-admin/app-assets/css/plugins/forms/validation/form-validation.css')}}">


    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('modern-admin/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 1-column  bg-cyan bg-lighten-2 blank-page" data-open="click"
      data-menu="vertical-menu" data-col="1-column">
<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="row flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 m-0">
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <div class="p-1"><img
                                            src="{{asset('modern-admin/app-assets/images/logo/logo-dark.png')}}"
                                            alt="branding logo"></div>
                                </div>
                            </div>
                            <div class="card-content">

                                <div class="card-body pt-0">
                                    <form class="form-horizontal" action="{{route('register')}}" method="POST"
                                          novalidate>

                                        @csrf
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="full-name">Full Name</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" id="fullname" name="fullname"
                                                       placeholder="User Name" required
                                                       data-validation-required-message="This field is required">
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-name">User Name</label>
                                            <div class="controls">
                                                <input type="text" class="form-control" id="username" name="username"
                                                       placeholder="User Name" required
                                                       data-validation-required-message="This field is required">
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-name">Your Email</label>
                                            <div class="controls">
                                                <input type="email" name="email" class="form-control" required
                                                       data-validation-required-message="This field is required"
                                                       placeholder="Your Email">
                                            </div>
                                        </fieldset>

                                        <fieldset class="form-group floating-label-form-group mb-1">
                                            <label for="user-password">Enter Password</label>
                                            <div class="controls">
                                                <input type="password" name="password" id="password"
                                                       class="form-control" required
                                                       data-validation-required-message="This field is required"
                                                       placeholder="Enter Password">
                                            </div>
                                        </fieldset>
                                        <fieldset class="form-group floating-label-form-group mb-1">
                                            <label for="user-password">Confirm Password</label>
                                            <div class="controls">
                                                <input type="password"
                                                       data-validation-match-match="password" class="form-control mb-1"
                                                       placeholder="Re type password" required>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                                    <label for="remember-me"> Remember Me</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a
                                                    href="recover-password.html" class="card-link">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-outline-info btn-block"><i
                                                class="la la-user"></i> Register
                                        </button>
                                    </form>
                                </div>
                                <div class="card-body pt-0">
                                    <a href="{{route('login')}}" class="btn btn-outline-danger btn-block"><i
                                            class="ft-unlock"></i> Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Vendor JS-->
<script src="{{asset('modern-admin/app-assets/vendors/js/vendors.min.js')}}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('modern-admin/app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/forms/toggle/switchery.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('modern-admin/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('modern-admin/app-assets/js/scripts/forms/form-login-register.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/js/scripts/forms/validation/form-validation.js')}}"></script>

<!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
