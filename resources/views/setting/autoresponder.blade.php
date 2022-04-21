@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/jobs.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">
<style>
    table {
        border-collapse: collapse;
    }

    tbody {
        text-align: center;
        color: #737475;
        font-weight: 500;
    }

    th,
    td {
        padding: auto !important;
        margin: auto;
    }

    .table1 {
        table-layout: fixed;
    }

    .card {
        border: none;
    }

    .card .card-header {
        border-radius: 10px !important;
        background-color: #333333;
        color: white;
        text-align: left;
        font-weight: bold;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0" style="margin-top: -5px;">
            <div class=" Header d-none  d-sm-block">
                <div class="row  ">
                    <div class="col-lg-3 p-3">
                        <h2>Map View</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  pl-0  ">
            <div class="card py-0 my-0 border-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between my-0 align-self-center">
                        <span class="card-title my-0"> <i class="fa fa-cog" aria-hidden="true"></i> Settings</span>
                        <div class="notification mt-3">
                            <div class="fa fa-bell mr-2 mt-1">
                                <p class="mt-1">Notification</p>
                            </div>
                            <div class="mt-1 ">
                                <div class="fa fa-sign-out" aria-hidden="true">
                                    <p class="mt-1">Logout</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text p-0 mb-0 mt-0">
                        <ol class="breadcrumb bg-white ">
                            <li class="breadcrumb-item ml-4 ">
                                <a href='/'>Home </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href='/setting'>Settings </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href='/contractorpriority'> Contractor Priority </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12   ">
            <div class="d-flex justify-content-between menu w-100">
                <p><a href="setting">Enrolment</a></p>
                <p ><a href="autoforwarding">Auto forwarding</a></p>
                <p><a href="contractorpriority">Contractor Priority</a></p>
                <p><a href="companydetails">Company Details</a></p>
                <p class="selected"><a href="autoresponder">Auto Responder</a></p>
                <p><a href="generalenquiry">General Enquiry</a></p>
                <p><a href="propertycompliance">Property Compliance</a></p>
                <p><a href="contractorcompliance">Contractor Compliance</a></p>
                <p><a href="licences">Licences</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card  pb-0">
                <div class="card-header pb-0">
                    <p class="d-flex justify-content-around "><span> Level</span>
                        <span>Description</span>
                    </p>
                </div>
                <div class="card-body p-0 mb-0 ">
                    <table class="table table1 table-bordered">
                        <tbody>
                            <tr>
                                <td>Email</td>
                                <td>Thank you for submitting case</td>
                            </tr>
                            <tr>
                                <td>App Message</td>
                                <td>Thank you. Your case has now been submitted</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection