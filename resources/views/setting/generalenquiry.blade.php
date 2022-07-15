@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">

<div class="container-fluid addcontractor autoforwarding  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp; Auto Forwarding</span>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex w-100 align-items-center justify-content-center" style="height: 40vw;">
            <h5 class="" style="color: black !important">9.6 General Enquiry Settings: <br>
                Settings defined in General enquiry should appear here</h5>

        </div>
    </div>
</div>
@endsection