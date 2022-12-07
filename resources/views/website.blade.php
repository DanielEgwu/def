@extends('layouts.dashboard')
@section('page-title','Website')
@section('content')
<div class="content">

    <div class="card-box">

        <div class="table-responsive">
            <table id="demo-foo-filtering" class="table table-striped table-bordered toggle-circle m-b-0" data-page-size="7">
                <thead>
                    <tr>
                        <th>Installation Name</th>
                        <th>URL</th>
                        <th>Action</th>
                        <th>Status</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Blog Product 1</td>
                        <td> blogproduct1.comfnirnfirifnrifjrij</td>
                        <td>
                            <a class=" text-success mx-md-2 mx-1" title="Go to web" href="{{route('manage.template')}}"><i class="ti ti-world"></i></a>
                            <a class=" text-primary" title="Manage" href="{{route('manage.subscribe')}}"><i class="ti ti-list"></i></a>
                        </td>
                        <td>Processing</td>
                    </tr>


            </table>
        </div>
    </div>
</div>
@endsection