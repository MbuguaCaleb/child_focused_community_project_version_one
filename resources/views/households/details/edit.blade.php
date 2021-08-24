@extends('layouts.master')
@section('content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Edit Child</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('dashboard')}}">Home</a>&nbsp;<i
                    class="fa fa-angle-right"></i>
            </li>
            <li><a class="parent-item"
                    href="{{route('household-details-index',[Crypt::encryptString($house_hold_child_detail->household_id)])}}">Children
                    List</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active"><a class="parent-item"
                    href="{{route('household-details-edit',[Crypt::encryptString($house_hold_child_detail->id)])}}">Edit
                    Child</a></li>
        </ol>
    </div>
</div>
<div class="row">
    <form action="{{route('household-details-update',[$house_hold_child_detail->id])}}" method="post"
        enctype="multipart/form-data">
        @csrf
        <div class="col-sm-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @include('flash::message')
            <div class="card-box">
                <div class="card-head">
                    <header>Child Details</header>
                    <button id="panel-button" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                        data-upgraded=",MaterialButton">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        data-mdl-for="panel-button">
                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                            here</li>
                    </ul>
                </div>
                <div class="card-body row">

                    <input type="hidden" name="house_id" value="{{$house_hold_child_detail->household_id}}">
                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                            <input class="mdl-textfield__input  @error('first_name') is-invalid @enderror" type="text"
                                name="first_name" id="first_name" value="{{$house_hold_child_detail->first_name}}">
                            <label class="mdl-textfield__label">First Name</label>
                        </div>
                        @error('first_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div
                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width  @error('last_name') is-invalid @enderror">
                            <input class="mdl-textfield__input" type="text" id="last_name" name="last_name"
                                value="{{$house_hold_child_detail->last_name}}">
                            <label class="mdl-textfield__label">Last Name</label>
                        </div>
                        @error('last_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                            <input class="mdl-textfield__input   @error('age') is-invalid @enderror" type="text"
                                id="age" name="age" value="{{$house_hold_child_detail->age}}">
                            <label class="mdl-textfield__label">Age</label>
                            <span class="mdl-textfield__error">Enter Valid Email Address!</span>
                        </div>
                        @error('age')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-6 p-t-20">
                        <div
                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height txt-full-width">
                            <input class="mdl-textfield__input" type="text" id="gender" name="gender"
                                value="{{$house_hold_child_detail->gender}}" readonly tabIndex="-1" @error('gender')
                                is-invalid @enderror">
                            <label for="sample2" class="pull-right margin-0">
                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                            </label>
                            <label for="gender" class="mdl-textfield__label">Gender</label>
                            <ul data-mdl-for="gender" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">

                                <li class="mdl-menu__item" data-val="DE">Male</li>
                                <li class="mdl-menu__item" data-val="BY">Female</li>
                            </ul>
                        </div>
                        @error('gender')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-full-width">
                            <input class="mdl-textfield__input   @error('dob') is-invalid @enderror" type=" text"
                                name="dob" id="date" autocomplete="off" value="{{$house_hold_child_detail->dob}}">
                            <label class="mdl-textfield__label">Date of Birth</label>
                        </div>
                        @error('dob')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <label class="control-label col-md-3">Current Photo</label>


                        <td class="user-circle-img">
                            <img src="{{ asset('uploads/'.$house_hold_child_detail->profile_picture) }}" alt="No Image"
                                width="70px" height="70px">
                        </td>
                    </div>



                    <div class="col-lg-6 p-t-20" class="form-group">
                        <label class="control-label col-md-3">Edit Photo</label>
                        <input type="file" name="profile_picture" class="form-control-file" id="profile_picture">


                    </div>
                    <div class="col-lg-12 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield txt-full-width">
                            <textarea class="mdl-textfield__input" rows="4" id="description" name="description"
                                @error('description') is-invalid @enderror
                                value="{{$house_hold_child_detail->description}}"></textarea>
                            <label class="mdl-textfield__label" for="text7">More Details</label>
                        </div>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-lg-12 p-t-20 text-center">
                        <button type="submit"
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 m-r-20 btn-pink">Submit</button>
                        <button type="button"
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect m-b-10 btn-default">Cancel</button>
                    </div>

                </div>
            </div>
        </div>
    </form>

</div>
@endsection