@php
    $activeMenu = $menu['breadcrumbs'];
@endphp

<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar">
    <div class="navbar-wrapper">
        <div class="navbar-brand header-logo">
            <a href="index.html" class="b-brand">
                <img class="" alt="modern admin logo" style="width: 45px !important; margin-left: -5px !important;margin-top: -5px"
                     src="{{(!empty($setting['logo_icon']) ? asset('upload/'.$setting['logo_icon']) : asset('datta-able/assets/images/logo-thumb.png'))}}">
                <span class="b-title">{{($setting['app_name_short'] ? $setting['app_name_short'] : '')}}</span>
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item pcoded-menu-caption">
                    <label>Navigation</label>
                </li>
                @foreach($menu['parentMenu'] as $item => $value)

                    @if($value->is_showed)

{{--                        @dump($value->route_name)--}}

                        @if($value->route_name == '#')
                            <li class="nav-item pcoded-menu-caption">
                                <label>Setting</label>
                            </li>
                        @endif



                        @foreach($value->access as $val)
                            @if ($val->id == \Illuminate\Support\Facades\Auth::user()->group_id)

                                @if($val->pivot->is_viewable == true)

                                    @if($value->childs->isEmpty())
                                        <li data-username="{{$value->name}}" class="nav-item {{($value->name == $activeMenu->name ? 'active' : '')}}">
                                            <a href="{{route("$value->route_name")}}" class="nav-link">
                                                <span class="pcoded-micon">
                                                    <i class="{{$value->icon}}"></i>
                                                </span>
                                                <span class="pcoded-mtext">{{$value->name}}</span>
                                            </a>
                                        </li>

                                    @else
                                        <li data-username="Vertical Horizontal Box Layout RTL fixed static collapse menu color icon dark"
                                            class="nav-item pcoded-hasmenu {{($activeMenu->parent ? $activeMenu->parent->name == $value->name ? 'active pcoded-trigger' : '' : '')}}">
                                            <a href="#" class="nav-link"><span class="pcoded-micon"><i class="{{$value->icon}}"></i></span><span class="pcoded-mtext">{{$value->name}}</span></a>
                                            <ul class="pcoded-submenu">
                                                @foreach($value->childs as $key => $sub)
                                                    @foreach($sub->access as $key => $subaccess)
                                                        @if($subaccess->count() > 0)
                                                            @if($subaccess->id == \Illuminate\Support\Facades\Auth::user()->group_id && $subaccess->pivot->is_viewable == true)
                                                                <li class="{{($sub->name == $activeMenu->name ? 'active' : '')}}"><a href="{{route("$sub->route_name")}}" class="" >{{$sub->name}}</a></li>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif
                                @endif
                            @endif
                        @endforeach
                    @endif
                @endforeach

            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->