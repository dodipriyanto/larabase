@extends('admin.layouts.main')

@section('title', 'Dashboard')

@section('breadcumbs')
    @include('admin.templates.breadcrumbs2')
@endsection

@section('content')
    <div class="row">
        <!-- [Register-user section] start -->
        <div class="col-md-12 col-xl-4">
            <div class="card user-card">
                <div class="card-block">
                    <h5 class="m-b-15">Register User</h5>
                    <h4 class="f-w-300 mb-3">1205</h4>
                    <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400">20%</label>Monthly Increase</span>
                </div>
            </div>
        </div>
        <!-- [Register-user section] end -->

        <!-- [Daily-user section] start -->
        <div class="col-md-6 col-xl-4">
            <div class="card user-card">
                <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Daily User</h5>
                    <h4 class="f-w-300 mb-3">467</h4>
                    <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400">10%</label>Weekly Increase</span>
                </div>
            </div>
        </div>
        <!-- [Daily-user section] end -->

        <!-- [Premium-user section] start -->
        <div class="col-md-6 col-xl-4">
            <div class="card user-card">
                <div class="card-block">
                    <h5 class="f-w-400 m-b-15">Premium User</h5>
                    <h4 class="f-w-300 mb-3">346</h4>
                    <span class="text-muted"><label class="label theme-bg text-white f-12 f-w-400">50%</label>Yearly Increase</span>
                </div>
            </div>
        </div>
        <!-- [Premium-user section] end -->
    </div>

@endsection

@section('script')

@endsection

