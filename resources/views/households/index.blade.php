@extends('layouts.master')
@section('content')
<div class="page-bar">
    <div class="page-title-breadcrumb">

        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('dashboard')}}">Home</a>&nbsp;<i
                    class="fa fa-angle-right"></i>
            </li>
            <li class="active"><a class="parent-item" href="{{route('household-create')}}">Create HouseHold</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">

        @include('flash::message')

        <div class="row">
            <div class="col-sm-12">
                <div class="card card-topline-green">
                    <div class="card-head">
                        <header>HouseHolds</header>
                        <div class="tools">
                            <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                            <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                            <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="table-scrollable">
                            <table class="table display full-width" id="example1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Head</th>
                                        <th>Country</th>
                                        <th>No of Children</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($details as $detail)
                                    <tr>
                                        <td>{{$detail->id}}</td>
                                        <td>{{$detail->custodian_name}}</td>
                                        <td>{{$detail->country}}</td>
                                        <td>{{$detail->no_of_children}}</td>
                                        <th><button type="button" class="btn btn-success"><i
                                                    class="fa fa-address-book"></i>
                                                More Details
                                            </button></th>

                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
<script src="">
    $(document).ready( function () {
    $('#example1').DataTable();
} );
</script>

@endsection