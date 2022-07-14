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
        padding: 25px !important;

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

    td small {
        font-weight: 500;
    }
</style>

<div class="container-fluid">
    <div class="row bg-green">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="py-3 my-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between align-items-center my-0 align-self-center">
                        <span class="card-title my-0 ml-n2"><i class="fa fa-cogs" aria-hidden="true"></i>
                            Property Compliance  </span>
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
                <p><a href="autoforwarding">Auto forwarding</a></p>
                <p><a href="contractorpriority">Contractor Priority</a></p>
                <p><a href="companydetails">Company Details</a></p>
                <p><a href="autoresponder">Auto Responder</a></p>
                <p><a href="generalenquiry">General Enquiry</a></p>
                <p class="selected"><a href="propertycompliance">Property Compliance</a></p>
                <p><a href="contractorcompliance">Contractor Compliance</a></p>
                <p><a href="licences">Licences</a></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card  pb-0">
                <div class="card-header ">
                    Property Compliance
                </div>
                <div class="card-body p-0 mb-0 ">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Electrical Safety Check</td>
                                <td></td>
                                <td><small class="text-warning">2 certs about to expire</small></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Gas Safety Check</td>
                                <td><small class="text-success">Data not available</small></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Energy Performance Check</td>
                                <td></td>
                                <td></td>
                                <td><small class="text-danger">Not Compliant (2 certs expired)</small></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Inspection Report</td>
                                <td></td>
                                <td><small class="text-warning">2 certs about to expire</small></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Fire safety risk assessment</td>
                                <td><small class="text-success">Data not available</small></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td> Other</td>
                                <td></td>
                                <td></td>
                                <td><small class="text-danger">Not Compliant (2 certs expired)</small></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
    @endsection