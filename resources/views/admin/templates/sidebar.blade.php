<!-- BEGIN: Main Menu-->
@php
    $activeMenu = $menu['breadcrumbs'];
@endphp

<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            @foreach($menu['parentMenu'] as $item => $value)
                @if($value->is_showed)
                    @foreach($value->access as $val)
                        @if ($val->id == \Illuminate\Support\Facades\Auth::user()->group_id)

                            @if($val->pivot->is_viewable == true)

                                @if($value->childs->isEmpty())
                                    <li class="nav-item {{($value->name == $activeMenu->name ? 'active' : '')}}">
                                        <a href="{{($value->route_name ? route("$value->route_name") : '#')}}"><i class="{{$value->icon}}"></i><span
                                                    class="menu-title" data-i18n="{{$value->name}}">{{$value->name}}</span></a>
                                    </li>
                                @else
                                    <li class="nav-item {{($activeMenu->parent ? $activeMenu->parent->name == $value->name ? 'menu-collapsed-open open' : '' : '')}}">
                                        <a href="#">
                                            <i class="{{$value->icon}}"></i><span class="menu-title"
                                                                                  data-i18n="{{$value->name}}">{{$value->name}}</span>
                                        </a>
                                        @foreach($value->childs as $key => $sub)
                                            @foreach($sub->access as $key => $subaccess)
                                                @if($subaccess->count() > 0)
                                                    @if($subaccess->id == \Illuminate\Support\Facades\Auth::user()->group_id && $subaccess->pivot->is_viewable == true)
                                                        <ul class="menu-content">
                                                            <li class="{{($sub->name == $activeMenu->name ? 'active' : '')}}" ><a class="menu-item" href="{{route("$sub->route_name")}}"><i></i><span
                                                                            class="menu-title" data-i18n="{{$value->name}}">{{$sub->name}}</span></a></li>
                                                        </ul>
                                                    @endif
                                                @endif

                                            @endforeach


                                        @endforeach
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

<!-- END: Main Menu-->
