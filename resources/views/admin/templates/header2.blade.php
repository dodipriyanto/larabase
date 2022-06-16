<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
        <a href="index.html" class="b-brand">
            <div class="b-bg">
                <i class="feather icon-trending-up"></i>
            </div>
            <span class="b-title">Datta Able</span>
        </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="#!">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li><a href="#!" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>

            <li class="nav-item">
                <div class="main-search">
                    <div class="input-group">
                        <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                        <a href="#!" class="input-group-append search-close">
                            <i class="feather icon-x input-group-text"></i>
                        </a>
                        <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">

            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">

                            <img src="{{ Auth::user()->profile_picture ? asset('storage/images/'.Auth::user()->profile_picture) : asset('datta-able/assets/images/user/avatar-4.jpg')}}" class="img-radius" alt="Profile Picture">
                            <span>{{\Illuminate\Support\Facades\Auth::user()->username}}</span>
                            <form action="{{route('logout')}}" method="POST" style="margin-bottom: -3px;">
                                @csrf
{{--                                <button type="submit" class="dropdown-item" href="{{route('logout')}}"><i--}}
{{--                                            class="ft-power"></i> Logout--}}
{{--                                </button>--}}

{{--                                <button type="submit" class="dud-logout" title="Logout" style="background: #04a9f5 !important; border: none !important;">--}}
{{--                                    <i class="feather icon-log-out"></i>--}}
{{--                                </button>--}}

                                <button class="btn btn-primary  dud-logout" type="submit" style="background: #04a9f5 !important; border: none !important;">
                                    <i class="feather icon-log-out"></i>
                                </button>

                            </form>
{{--                            <a href="{{route('logout')}}" class="dud-logout" title="Logout">--}}
{{--                                <i class="feather icon-log-out"></i>--}}
{{--                            </a>--}}
                        </div>
                        <ul class="pro-body">
{{--                            <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>--}}
                            <li><a href="{{route('dashboard_profile')}}" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
{{--                            <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>--}}
{{--                            <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>--}}
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<!-- [ Header ] end -->


