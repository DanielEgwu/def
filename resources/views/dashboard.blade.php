@extends('layouts.dashboard')
@section('page-title','Dashboard')
@section('content')
<!-- Start content -->
<div class="d-flex justify-content-between">
    <h5 class="pb-0">Welcome Daniel!</h5>
    <a href="{{route('website')}}" class="btn btn-primary"><i class="ti ti-world"></i>&nbsp; Visit Website</a>
</div>
<hr class="mt-0">

<div class="d-flex pb-3 ">
    <a href="" class="btn btn-success "><i class="mdi mdi-arrow-up-bold-box"></i>&nbsp; Upgrade</a>
    <a href="" class="btn btn-outline-secondary mx-2"><i class="ti ti-settings"></i>&nbsp; Change Template</a>
</div>

<div class="row">
    <div class="col-12 col-md-4">
        <div class="widget-bg-color-icon card-box">
            <div class="bg-icon bg-icon-success pull-left">
                <i class="ti-world text-success"></i>
            </div>
            <div class="text-right">
                <h3 class="text-dark m-t-10"><b class="counter">64,570</b></h3>
                <p class="text-muted mb-0">No of websites</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="widget-bg-color-icon card-box fadeInDown animated">
            <div class="bg-icon bg-icon-primary pull-left">
                <i class=" ti-book text-info"></i>
            </div>
            <div class="text-right">
                <h3 class="text-dark m-t-10"><b class="counter">31,570</b></h3>
                <p class="text-muted mb-0">No of post </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>


</div>


@endsection