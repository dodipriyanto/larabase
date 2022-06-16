@section('breadcumbs')
    @php
        $breadrumbs = $menu['breadcrumbs'];
    @endphp

    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">{{$breadrumbs->name}}</h3>
        <h3 class="content-header-title"></h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    @if(!empty($breadrumbs->parent))
                        <li class="breadcrumb-item">
                            <a href="#">{{ucfirst($breadrumbs->parent->name)}}</a>
                            <span class="" aria-hidden="true"></span>
                        </li>
                    @endif

                    <li class="breadcrumb-item active">
                        <a href="{{route("$breadrumbs->route_name")}}">{{ucfirst($breadrumbs->name)}}</a>
                    </li>

                </ol>
            </div>
        </div>
    </div>
@endsection
