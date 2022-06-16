@php
    $breadrumbs = $menu['breadcrumbs'];
@endphp


<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h5 class="m-b-10">Dashboard</h5>
                </div>
                <ul class="breadcrumb">

                    @if(!empty($breadrumbs->parent))
                        <li class="breadcrumb-item">
                            <a href="#">{{ucfirst($breadrumbs->parent->name)}}</a>
                            <span class="" aria-hidden="true"></span>
                        </li>
                    @endif
                        <li class="breadcrumb-item active">
                            <a href="{{route("$breadrumbs->route_name")}}">{{ucfirst($breadrumbs->name)}}</a>
                        </li>

                </ul>
            </div>
        </div>
    </div>
</div>
