<!DOCTYPE html>

<html lang="en">

<head>

    <title> {{env('APP_NAME') }}
        @hasSection('title')
           - @yield('title')
        @else
           -
        @endif
    </title>
    <!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 11]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description"
          content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs."/>
    <meta name="keywords"
          content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template">
    <meta name="author" content="Codedthemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('datta-able/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset('datta-able/assets/fonts/fontawesome/css/fontawesome-all.min.css')}}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('datta-able/assets/plugins/animation/css/animate.min.css')}}">

    <!-- data tables css -->
    <link rel="stylesheet" href="{{asset('datta-able/assets/plugins/data-tables/css/datatables.min.css')}}">
    <!-- modal-window-effects css -->
    <link rel="stylesheet" href="{{asset('datta-able/assets/plugins/modal-window-effects/css/md-modal.css')}}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('datta-able/assets/css/style.css')}}">


    <!-- select2 css -->
    <link rel="stylesheet" href="{{asset('datta-able/assets/plugins/select2/css/select2.min.css')}}">
    <!-- multi-select css -->
    <link rel="stylesheet" href="{{asset('datta-able/assets/plugins/multi-select/css/multi-select.css')}}">


    <style>
        .hidden{
            display: none;
        }

        .select2-container--open {
            z-index: 9999999
        }

        .error {
            margin: 2px;
            color: red;
            background-color: #ffffff;
        }

        .dud-logout:hover{
            background-color: yellow;

        }

    </style>

    @yield('stylesheet')


</head>
<body>
<!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
<!-- [ Pre-loader ] End -->

<!-- [ navigation menu ] start -->
@include('admin.templates.sidebar2')

<!-- [ navigation menu ] end -->

<!-- [ Header ] start -->
@include('admin.templates.header2')
<!-- [ Header ] end -->

<!-- [ chat user list ] start -->
<section class="header-user-list">

    <div class="h-list-body">
        <a href="#!" class="h-close-text"><i class="feather icon-chevrons-right"></i></a>
        <div class="main-friend-cont scroll-div">
        </div>
    </div>
</section>
<!-- [ chat user list ] end -->

<!-- [ chat message ] start -->
<section class="header-chat">
    <div class="h-list-header">
        <h6>Josephin Doe</h6>
        <a href="#!" class="h-back-user-list"><i class="feather icon-chevron-left"></i></a>
    </div>
    <div class="h-list-body">
        <div class="main-chat-cont scroll-div">
        </div>
    </div>

</section>
<!-- [ chat message ] end -->

<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">

            <div class="page-header">
                <div class="page-block">
                    <!-- [ breadcrumb ] start -->
                @yield('breadcumbs')
                <!-- [ breadcrumb ] end -->
                </div>
            </div>

            <div class="main-body">
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                @yield('content')
                <!-- [ Main Content ] end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ Main Content ] end -->


<!-- Warning Section Ends -->

<!-- Required Js -->
<script src="{{asset('datta-able/assets/js/vendor-all.min.js')}}"></script>
<script src="{{asset('datta-able/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('datta-able/assets/js/pcoded.min.js')}}"></script>

<!-- sweetalert Js -->
<script src="{{asset('datta-able/assets/plugins/sweetalert/js/sweetalert.min.js')}}"></script>
<script src="{{asset('datta-able/assets/js/pages/ac-alert.js')}}"></script>

<!-- datatable Js -->
<script src="{{asset('datta-able/assets/plugins/data-tables/js/datatables.min.js')}}"></script>
<script src="{{asset('datta-able/assets/js/pages/tbl-datatable-custom.js')}}"></script>

<!-- modal-window-effects Js -->
<script src="{{asset('datta-able/assets/plugins/modal-window-effects/js/classie.js')}}"></script>
<script src="{{asset('datta-able/assets/plugins/modal-window-effects/js/modalEffects.js')}}"></script>

<!-- select2 Js -->
<script src="{{asset('datta-able/assets/plugins/select2/js/select2.full.min.js')}}"></script>

<!-- multi-select Js -->
<script src="{{asset('datta-able/assets/plugins/multi-select/js/jquery.quicksearch.js')}}"></script>
<script src="{{asset('datta-able/assets/plugins/multi-select/js/jquery.multi-select.js')}}"></script>

<!-- form-select-custom Js -->
<script src="{{asset('datta-able/assets/js/pages/form-select-custom.js')}}"></script>

<!-- core function Js -->
<script src="{{asset('js/core.js')}}"></script>


<!-- jquery-validation Js -->
<script src="{{asset('datta-able/assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
<!-- form-picker-custom Js -->
<script src="{{asset('datta-able/assets/js/pages/form-validation.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function () {

        $(document).on('click', '.md-close', function (e){
            modalHide('myModal','View Data');

        });

    });


</script>

@yield('script')
</body>


</html>