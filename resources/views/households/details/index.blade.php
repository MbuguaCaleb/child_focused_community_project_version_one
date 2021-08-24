@extends('layouts.master')
@section('content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">House Hold Children </div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('dashboard')}}">Home</a>&nbsp;<i
                    class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item"
                    href="{{route('household-details-index',[Crypt::encryptString($house_id)])}}">HouseHold
                    Info</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active"><a class="parent-item"
                    href="{{route('household-details-create',[Crypt::encryptString($house_id)])}}">Add Child</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        @include('flash::message')
        <div class="card card-box">
            <div class="card-head">
                <header>Children Info</header>
                <div class="tools">
                    <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                    <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                    <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                </div>
            </div>
            <div class="card-body ">
                <div class="row p-b-20">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="btn-group">

                            <a href="{{route('household-details-create',[Crypt::encryptString($house_id)])}}"
                                id="addRow" class="btn btn-info">
                                Add New <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-scrollable">
                    <table class="table table-hover table-checkable order-column full-width" id="example4">
                        <thead>
                            <tr>
                                <th class="center"></th>
                                <th class="center"> First Name </th>
                                <th class="center"> Last Name </th>
                                <th class="center"> Gender </th>
                                <th class="center"> Date of Birth </th>
                                <th class="center"> Age </th>
                                <th class="center"> isSponsored </th>
                                <th class="center"> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($house_hold_details as $house_hold_child_detail)
                            <tr class="odd gradeX">
                                <td class="user-circle-img">
                                    <img src="{{ asset('uploads/'.$house_hold_child_detail->profile_picture) }}"
                                        alt="No Image" width="70px" height="70px">
                                </td>
                                <td class="center">{{$house_hold_child_detail->first_name}}</td>
                                <td class="center">{{$house_hold_child_detail->last_name}}</td>
                                <td class="center">{{$house_hold_child_detail->gender}}</td>
                                <td class="center">{{$house_hold_child_detail->dob}}</td>
                                <td class="center">{{$house_hold_child_detail->age}}</td>
                                <td class="center">
                                    @if($house_hold_child_detail->is_sponsored)
                                    <span class="label label-sm label-success">Sponsored</span>
                                    @else
                                    <span class="label label-sm label-danger">UnSponsored</span>
                                    @endif
                                </td>
                                <td class="center">
                                    <a href="{{route('household-details-edit',[Crypt::encryptString($house_hold_child_detail->id)])}}"
                                        class="btn btn-tbl-edit btn-xs">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                    <button class="btn btn-tbl-delete btn-xs">
                                        <i class="fa fa-trash-o "></i>
                                    </button>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection