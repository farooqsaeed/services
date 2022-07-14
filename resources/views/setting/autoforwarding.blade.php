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
    <div class="row bg-green">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="  py-3 my-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between align-items-center my-0 align-self-center">
                        <span class="card-title my-0 ml-n2"><i class="fa fa-forward" aria-hidden="true"></i>
                            Auto forwarding</span>
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
                <p><a href="setting">Enrolment</a></p>
                <p class="selected"><a href="autoforwarding">Auto forwarding</a></p>
                <p><a href="contractorpriority">Contractor Priority</a></p>
                <p><a href="companydetails">Company Details</a></p>
                <p><a href="autoresponder">Auto Responder</a></p>
                <p><a href="generalenquiry">General Enquiry</a></p>
                <p><a href="propertycompliance">Property Compliance</a></p>
                <p><a href="contractorcompliance">Contractor Compliance</a></p>
                <p ><a href="licences">Licences</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card  pb-0">
                <div class="card-header ">
                    Landlord Approvals
                </div>
                <div class="card-body p-0 mb-0 ">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>No#</td>
                                <td>Target Group</td>
                                <td>Action</td>
                                <td>Recipient</td>
                                <td>Delivery Method</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>All</td>
                                <td>All Reported issue</td>
                                <td>All</td>
                                <td>Email</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Branch2, Branch3</td>
                                <td>All Reported issue <br> All Completed jobs</td>
                                <td>Primary Contact</td>
                                <td>Text Message</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- row 2 -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
            <div class="card  pb-0">
                <div class="card-header ">
                    Forward to Contractor
                </div>
                <div class="card-body p-0 mb-0 ">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td rowspan="2">No#</td>
                                <td rowspan="2">Target Group</td>
                                <td rowspan="2">Job Type</td>
                                <td rowspan="2">Action <br> <small>Forward Jobs to <br> (Select Contractor)</small></td>
                                <td colspan="2">Select Day/Time
                                </td>
                            </tr>
                            <tr>
                                <td>Day</td>
                                <td>Time</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>All</td>
                                <td>All </td>
                                <td>App Notification</td>
                                <td>All day</td>
                                <td>24/7</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Branch3</td>
                                <td>Boiler</td>
                                <td>Email </td>
                                <td>Every Monday</td>
                                <td>8-6pm</td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Branch2</td>
                                <td>Electrical</td>
                                <td>Text Message </td>
                                <td>Date Range</td>
                                <td>8-6pm</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    @endsection