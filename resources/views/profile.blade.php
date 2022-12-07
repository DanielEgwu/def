@extends('layouts.dashboard')
@section('page-title','Profile')
@section('content')

<div class="row">
    <div class="col-4">
        <div class="card-box ">
            <div class="d-flex flex-column justify-content-center align-items-center">

                <img src="{{asset('backend/assets/images/gallery/1.jpg')}}" class="img-round">
                <div class="mt-3 text-center">
                    <h6> Petrong</h6>
                    <p class="text-muted mb-1">petrong@gmail.com</p>
                </div>
            </div>
        </div>

    </div>

    <div class="col-8">
        <div class="card-box">

            <div class="d-flex flex-column">

                <h6>Phone Number</h6>
                <p class="border-bottom pb-1">+2349070766265</p>
                <hr>
            </div>

            <div class="d-flex flex-column">

                <h6>State / Province</h6>
                <p class="border-bottom pb-1">Lagos</p>
                <hr>
            </div>

            <div class="d-flex flex-column">

                <h6>Country</h6>
                <p class="border-bottom pb-1"> Nigeria</p>
                <hr>
            </div>

            <a href="" class="btn btn-primary px-4 waves-effect waves-light">Edit</a>

        </div>
    </div>
</div>
<!-- end row -->


@endsection