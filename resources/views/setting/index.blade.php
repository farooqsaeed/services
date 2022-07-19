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
                    <div class="card-body">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                        <p class="card-text mt-lg-2 ">
                            <a href="enrolment">Enrolment</a>
                        </p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                        <p class="card-text mt-lg-2">
                            <a href="autoforwarding">Auto Forwarding</a>
                        </p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                        <p class="card-text mt-lg-2">
                            <a href="contractorpriority">Contractor Priority</a>
                        </p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                        <p class="card-text mt-lg-2"><a href="companydetails">Company Details</a></p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                        <p class="card-text mt-lg-2">
                            <a href="licences">License</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-deck px-lg-4">
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                        <p class="card-text mt-lg-2 ">
                            <a href="autoforwarding ">Auto Responder</a>
                        </p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                        <p class="card-text mt-lg-2">
                            <a href="generalenquiry">General Enquiry</a>
                        </p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                        <p class="card-text mt-lg-2">
                            <a href="contractorcompliance">Contractor Compliance</a>
                        </p>
                    </div>
                </div>
                <div class="card text-center">
                    <div class="card-body">
                        <i class="fa fa-file-text-o fa-3x" aria-hidden="true"></i>
                        <p class="card-text mt-lg-2">
                            <a href="propertycompliance">Property Compliance</a>
                        </p>
                    </div>
                </div>
                <div class="card" style="visibility: hidden;">

                </div>
            </div>
        </div>
    </div>
    @endsection