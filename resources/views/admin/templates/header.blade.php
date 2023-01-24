<!-- BEGIN: Header-->
<nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item"><a class="navbar-brand" href="#">

                        <img class="" alt="modern admin logo"
                             style="width: 45px !important; margin-left: -5px !important;"
                             src="{{(!empty($setting['logo_icon']) ? asset('upload/'.$setting['logo_icon']) : asset('modern-admin/app-assets/images/logo/logo.png'))}}">
                        {{--                        <span style="color: #6cb2eb; font-weight: bold">{{($setting['app_name'] ? $setting['app_name'] : '')}}</strong></span>--}}
                        {{--                        <h4 class="">{{($setting['app_name'] ? $setting['app_name'] : '')}}</strong></h4>--}}
                        <h3 class="brand-text"
                            style="color: #6cb2eb; font-weight: bold">{{($setting['app_name'] ? $setting['app_name'] : '')}}</h3>
                    </a></li>
                <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse"
                                                  data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                                              href="#"><i class="ft-menu"></i></a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>


                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                                                                   href="#" data-toggle="dropdown"><span
                                    class="mr-1 user-name text-bold-700">{{\Illuminate\Support\Facades\Auth::user()->username}} | ({{\Illuminate\Support\Facades\Auth::user()->group->name}})</span><span
                                    class="avatar avatar-online">
                                <img
                                        {{--                                        src="{{asset('storage/images/'.Auth::user()->profile_picture)}}"--}}
                                        src="{{(Auth::user()->profile_picture ? asset('storage/images/'.Auth::user()->profile_picture) : asset('no_image.png'))}}"
                                        alt="avatar"><i></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item"
                               href="{{route('dashboard_profile')}}"><i
                                        class="ft-user"></i> Edit Profile</a>
                            <div class="dropdown-divider"></div>
                            <form action="{{route('logout')}}" method="POST" style="margin-bottom: -3px">
                                @csrf
                                <button type="submit" class="dropdown-item" href="{{route('logout')}}"><i
                                            class="ft-power"></i> Logout
                                </button>

                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->


{{--<ul class="dropdown-menu dropdown-menu-media dropdown-menu-right show">
    <li class="dropdown-menu-header">
        <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span
                class="notification-tag badge badge-danger float-right m-0">5 New</span>
    </li>
    <li class="scrollable-container media-list w-100 ps"><a href="javascript:void(0)">
            <div class="media">
                <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan mr-0"></i>
                </div>
                <div class="media-body">
                    <h6 class="media-heading">You have new order!</h6>
                    <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer
                        elit.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                    </small>
                </div>
            </div>
        </a><a href="javascript:void(0)">
            <div class="media">
                <div class="media-left align-self-center"><i
                            class="ft-download-cloud icon-bg-circle bg-red bg-darken-1 mr-0"></i></div>
                <div class="media-body">
                    <h6 class="media-heading red darken-1">99% Server load</h6>
                    <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time>
                    </small>
                </div>
            </div>
        </a><a href="javascript:void(0)">
            <div class="media">
                <div class="media-left align-self-center"><i
                            class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3 mr-0"></i></div>
                <div class="media-body">
                    <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                    <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                    </small>
                </div>
            </div>
        </a><a href="javascript:void(0)">
            <div class="media">
                <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan mr-0"></i>
                </div>
                <div class="media-body">
                    <h6 class="media-heading">Complete the task</h6><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time>
                    </small>
                </div>
            </div>
        </a><a href="javascript:void(0)">
            <div class="media">
                <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal mr-0"></i></div>
                <div class="media-body">
                    <h6 class="media-heading">Generate monthly report</h6><small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time>
                    </small>
                </div>
            </div>
        </a>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </li>
</ul>--}}
