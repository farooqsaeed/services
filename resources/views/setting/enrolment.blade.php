@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/jobs.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">

<div class="container-fluid">
    <div class="row bg-green">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="py-3 my-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between align-items-center my-0 align-self-center">
                        <span class="card-title my-0 ml-n2"><i class="fa fa-cogs" aria-hidden="true"></i>
                            Settings</span>
                        <div class="notification mt-3">
                            @include('../layouts/header')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-lg-5">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12   ">
            <div class="d-flex justify-content-between menu w-100">
                <p class="selected"><a href="setting">Enrolment</a></p>
                <p><a href="autoforwarding">Auto forwarding</a></p>
                <p><a href="contractorpriority">Contractor Priority</a></p>
                <p><a href="companydetails">Company Details</a></p>
                <p><a href="autoresponder">Auto Responder</a></p>
                <p><a href="generalenquiry">General Enquiry</a></p>
                <p><a href="propertycompliance">Property Compliance</a></p>
                <p><a href="contractorcompliance">Contractor Compliance</a></p>
                <p><a href="licences">Licences</a></p>
            </div>
        </div>
    </div>
    <div class="row Enrolment mt-3">
        <div class="col-lg-3 col-12 ">
            <span class=" bg-success px-lg-4 ">Welcome Message</span><i class="fa fa-chevron-right ml-3"
                aria-hidden="true"></i>
        </div>
        <div class="col-lg-9 col-12 pl-lg-0 ">
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                laboreet dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                ea rebum. Stet.
            </p>
        </div>
    </div>
    <div class="row mt-3 Enrolment">
        <div class="col-lg-3  col-12  ">
            <span class=" bg-success px-lg-3  "> Tenant Enrolment ID</span> <i class="fa fa-chevron-right ml-3"
                aria-hidden="true"></i>
        </div>
        <div class="col-lg-9 col-12  pl-lg-0">
            <p class="mb-0 ">Phone Number</p>
            <p>Enrolment Key</p>
        </div>
    </div>
    <div class="row mt-3 Enrolment">
        <div class="col-lg-3  col-12 ">
            <span class=" bg-success px-2 ">Engineer Enrolment ID</span><i class="fa fa-chevron-right ml-3"
                aria-hidden="true"></i>
        </div>
        <div class="col-lg-9 col-12  pl-lg-0">
            <p class="mb-0 ">Option to refresh</p>
            <p> Concern </p>
        </div>
    </div>
</div>


@endsection