@extends('layouts.master')
@section('content')
<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
            <div class="page-title">Create House Hold</div>
        </div>
        <ol class="breadcrumb page-breadcrumb pull-right">
            <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                    href="{{route('dashboard')}}">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>
            <li class="active">View Existing HouseHolds</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="card-box">
            <div class="card-head">
                <header>Details</header>
            </div>
            <div class="card-body row">
               
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label txt-width">
                        <input class="mdl-textfield__input" type="text" id="text4">
                        <label class="mdl-textfield__label" for="text4">No of Children
                          </label>
                    </div>
                </div>
               
                <div class="col-lg-6 p-t-20">
                    <div
                        class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select getmdl-select__fix-height select-width">
                        <input class="mdl-textfield__input" type="text" id="sample2" value="India"
                            readonly tabIndex="-1">
                        <label for="sample2" class="pull-right margin-0">
                            <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                        </label>
                        <label for="sample2" class="mdl-textfield__label">Country</label>
                        <ul data-mdl-for="sample2"
                            class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                            <li class="mdl-menu__item" data-val="DE">Shrilanka</li>
                            <li class="mdl-menu__item" data-val="BY">India</li>
                            <li class="mdl-menu__item" data-val="RU">Germany</li>
                        </ul>
                    </div>
                </div>

               
                <div class="col-lg-12 p-t-20">
                    <button
                        class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                        Add
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection