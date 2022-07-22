@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/jobs.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">


<div class="container-fluid setting">
    <div class="row bg-green">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="  py-3 my-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between align-items-center my-0 align-self-center">
                        <span class="card-title my-0 ml-n2"><i class="fa fa-cog" aria-hidden="true"></i>
                            Settings</span>
                        <div class="notification mt-3">
                            @include('../layouts/header')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card-deck my-5 px-lg-4">
                <div class="card text-center">
                    <a href="{{route('setting.licences')}}">
                        <div class="card-body">
                            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                            <p class="card-text mt-lg-2 ">Enrolment</p>
                        </div>
                    </a>
                </div>
                <div class="card text-center">
                    <a href="{{route('setting.autoforwarding')}}">
                        <div class="card-body">
                              <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                            <p class="card-text mt-lg-2">
                                Auto Forwarding
                            </p>  
                        </div>
                    </a>
                </div>
                <div class="card text-center">
                    <a href="{{route('setting.contractorpriority')}}">
                        <div class="card-body">
                            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                            <p class="card-text mt-lg-2">
                                Contractor Priority
                            </p>
                        </div>
                    </a>
                </div>
                <div class="card text-center">
                    <a href="{{route('setting.companydetails')}}">
                        <div class="card-body">
                            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                            <p class="card-text mt-lg-2">Company Details</p>
                        </div>
                    </a>
                </div>
                <div class="card text-center">
                    <a href="{{route('setting.licences')}}">
                        <div class="card-body">
                            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                            <p class="card-text mt-lg-2">
                                License
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            <div class="card-deck px-lg-4">
                <div class="card text-center">
                    <a href="{{route('setting.autoresponder')}}">
                        <div class="card-body">
                            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                            <p class="card-text mt-lg-2 ">
                                Auto Responder
                            </p>
                        </div>
                    </a>
                </div>
                <div class="card text-center">
                    <a href="{{route('setting.generalenquiry')}}">
                        <div class="card-body">
                            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                            <p class="card-text mt-lg-2">
                                General Enquiry
                            </p>
                        </div>
                    </a>
                </div>
                <div class="card text-center">
                    <a href="{{route('setting.contractorcompliance')}}">
                        <div class="card-body">
                            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                            <p class="card-text mt-lg-2">
                                Contractor Compliance
                            </p>
                        </div>
                    </a>
                </div>
                <div class="card text-center">
                    <a href="{{route('setting.propertycompliance')}}">
                        <div class="card-body">
                            <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                            <p class="card-text mt-lg-2">
                                Property Compliance
                            </p>
                        </div>
                    </a>
                </div>
                <div class="card" style="visibility: hidden;">
                </div>
            </div>
        </div>
    </div>
    @endsection