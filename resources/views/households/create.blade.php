@extends('layouts.master')
@section('content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Create House Hold</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item" href="{{route('dashboard')}}">Home</a>&nbsp;<i
                    class="fa fa-angle-right"></i>
            </li>
            <li class="active">View Existing HouseHolds</li>
        </ol>
    </div>
</div>
<div class="row">
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

        <div class="card-box">
            <div class="card-head">
                <header>Details</header>
            </div>
            <div class="card-body row">
                <form class="col-lg-12 validate-form" action="{{route('household-store')}}" method="POST">
                    @csrf()
                    <div class="col-lg-6 p-t-20">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-width">
                            <input class="mdl-textfield__input @error('no_of_children') is-invalid @enderror"
                                type="text" id="no_of_children" name="no_of_children"
                                value="{{ old('no_of_children') }}">
                            <label class=" mdl-textfield__label" for="no_of_children">No of Children
                            </label>
                            @error('no_of_children')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-lg-6 p-t-20">
                        <div
                            class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height select-width @error('country') is-invalid @enderror">
                            <input class="mdl-textfield__input" type="text" id="country" name="country" tabIndex="-1">
                            <label for="country" class="pull-right margin-0">
                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                            </label>
                            <label for="country" class="mdl-textfield__label">Country</label>
                            <ul data-mdl-for="country" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                <li class="mdl-menu__item" data-val="DE">Kenya</li>
                                <li class="mdl-menu__item" data-val="BY">Uganda</li>
                                <li class="mdl-menu__item" data-val="RU">Tanzania</li>
                                <li class="mdl-menu__item" data-val="RU">Other</li>

                            </ul>
                            @error('country')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="col-lg-12 p-t-20">
                        <button
                            class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Add
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection