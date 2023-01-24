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
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    @if(Request::server ("SERVER_NAME") == 'helpdesk.valdo-intl.com')--}}
{{--        <meta name="ws_url" content="{{ env('WS_URL_PROD') }}">--}}
{{--    @else--}}
{{--        <meta name="ws_url" content="{{ env('WS_URL') }}">--}}
{{--    @endif--}}
    <meta name="user_id" content="{{Auth::id() }}">

    <title>Helpdesk -
        @hasSection('title')
            @yield('title')
        @else
            Dashboard
        @endif
    </title>
    {{--    <link rel="apple-touch-icon" href="{{asset('modern-admin/app-assets/images/ico/apple-icon-120.png')}}">--}}
    {{--    <link rel="shortcut icon" type="image/x-icon" href="{{asset('modern-admin/app-assets/images/ico/favicon.ico')}}">--}}
    <link rel="apple-touch-icon" href="{{asset('front/logo.ico')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('front/logo.ico')}}">
    <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700"
            rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/vendors/css/vendors.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('modern-admin/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/fonts/meteocons/style.css')}}">
    {{--    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/vendors/css/charts/morris.css')}}">--}}
    {{--    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/vendors/css/charts/chartist.css')}}">--}}
    {{--    <link rel="stylesheet" type="text/css"--}}
    {{--          href="{{asset('modern-admin/app-assets/vendors/css/charts/chartist-plugin-tooltip.css')}}">--}}
<!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/components.css')}}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/vendors/css/extensions/sweetalert2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/core/colors/palette-tooltip.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/plugins/loaders/loaders.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/core/colors/palette-loader.css')}}">


    <link rel="stylesheet" type="text/css" href="{{asset('lib/flatpickr/css/flatpickr.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/app-assets/css/plugins/forms/validation/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-fileinput/css/fileinput.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('modern-admin/assets/css/style.css')}}">
    <!-- END: Custom CSS-->

    <link rel="stylesheet" type="text/css" href="{{asset('table/css/main.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/chat.css')}}">

    @yield('stylesheet')

    <style>
        .content-wrapper{
            padding: 1.5rem 2rem !important;
        }

        .card-header {
            padding : 1.2rem !important;
        }

        .card-body{
            padding: 1.2rem !important;
        }

        .error {
            margin: 2px;
            color: red;
            background-color: #ffffff;
        }
    </style>



</head>

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
      data-col="2-columns">


@include('admin.templates.header')

@include('admin.templates.sidebar')


<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay">

    </div>
    <div class="content-wrapper">
        <div class="content-header row">
            @yield('breadcumbs')
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('admin.templates.footer')

<!-- BEGIN: Vendor JS-->
<script src="{{asset('modern-admin/app-assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('lib/jquery-validation/js/jquery.validate.min.js')}}"></script>

<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
{{--<script src="{{asset('modern-admin/app-assets/vendors/js/charts/chartist.min.js')}}"></script>--}}
{{--<script src="{{asset('modern-admin/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js')}}"></script>--}}
{{--<script src="{{asset('modern-admin/app-assets/vendors/js/charts/raphael-min.js')}}"></script>--}}
{{--<script src="{{asset('modern-admin/app-assets/vendors/js/charts/morris.min.js')}}"></script>--}}
<script src="{{asset('modern-admin/app-assets/vendors/js/timeline/horizontal-timeline.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/extensions/sweetalert2.all.min.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/extensions/polyfill.min.js')}}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('modern-admin/app-assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/js/core/app.js')}}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
{{--<script src="{{asset('modern-admin/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script>--}}

<script src="{{asset('modern-admin/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/js/scripts/extensions/ex-component-sweet-alerts.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/js/scripts/tooltip/tooltip.js')}}"></script>

{{--CORE JS--}}
<script src="{{asset('js/core.js')}}"></script>
<script src="{{asset('table/js/main.js')}}"></script>

{{--SOCKET JS--}}
{{--<script src="{{ asset('lib/socket/vue.js') }}"></script>--}}
{{--<script src="{{ asset('lib/socket/socket.io.js') }}"></script>--}}
{{--<script src="{{ asset('lib/socket/moment.min.js') }}"></script>--}}
{{--<script src="{{ asset('lib/socket/chat.js') }}"></script>--}}

<script src="{{asset('lib/flatpickr/js/flatpickr.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>
<script src="{{asset('lib/sweetalert2/sweetalert2.js')}}"></script>

<script src="{{asset('modern-admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/forms/icheck/icheck.min.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/vendors/js/forms/toggle/switchery.min.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/js/scripts/forms/form-login-register.js')}}"></script>
<script src="{{asset('modern-admin/app-assets/js/scripts/forms/validation/form-validation.js')}}"></script>

<script src="{{asset('lib/bootstrap-fileinput/js/fileinput.js')}}"></script>
<script src="{{asset('lib/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('lib/fa-theme/theme.js')}}"></script>


<!-- END: Page JS-->

@yield('script')
</body>

</html>
