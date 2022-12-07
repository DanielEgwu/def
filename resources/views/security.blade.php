@extends('layouts.dashboard')
@section('page-title','Security')
@section('content')
<div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-6">
        <div class="card-box">

            <h4 class="header-title py-2">Change Password</h4>
            <form class="" action="#">

                <div class="form-group">
                    <label>Old password</label>
                    <div>
                        <input type="email" class="form-control" required="" parsley-type="email" placeholder="Enter your old password">
                    </div>
                </div>

                <div class="form-group">
                    <label>New password</label>
                    <div>
                        <input type="email" class="form-control" required="" parsley-type="email" placeholder="Enter new password">
                    </div>
                </div>

                <div class="form-group">
                    <label>Confirm password</label>
                    <div>
                        <input type="email" class="form-control" required="" parsley-type="email" placeholder="Repeat new password">
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                           Update
                        </button>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection