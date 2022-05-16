@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{URL::asset('assets/css/contractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/newjobs.css')}}">
<style>
    .cards .card-body {
        padding-bottom: 0.3rem !important;
        padding-right: 0.2rem;
    }

    .cards .card-body p {
        font-size: 15px;
    }

    #openjobs th {
        font-size: 13px;
        color: #737475;
    }

    #openjobs_length select,
    #openjobs_filter input {
        border: 1px solid green;
    }

    #openjobs tr:nth-child(even) {
        background-color: #E1AD011F;
        border: 2px solid #E1AD01 !important;
    }
</style>


<div class="container-fluid newjobs">
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  pl-0">
            <div class=" newjobHeader p-3 d-flex justify-content-start align-items-baseline">
                <i class="fa fa-chevron-left " aria-hidden="true"></i>
                <h5 class="ml-3">New Jobs</h5>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
            <div class="card  border-0  BreadCrumb_card mt-5">
                <div class="card-body ">
                    <div class="card-text  ">
                        <ol class="breadcrumb bg-white">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="newjobs">New Jobs</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                <a href="">Open Jobs</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
            <div class="cards row">
                <div class="col-md-3 col-12">
                    <div class="card card4  ">
                        <div class="card-body">
                            <div class="fa fa-home fa-2x"></div>
                            <h4 class="card-title">10,345</h4>
                            <p class="card-text">Emergency Jobs</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-12">
                    <div class="card card1 bg-success ">
                        <div class="card-body">
                            <div class="fa fa-refresh fa-2x"></div>
                            <h4 class="card-title">4103</h4>
                            <p class="card-text">Non-Emergency Jobs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 mt-2 col-sm-12 col-xs-12  ">
            <div style="width:100%; overflow-x: auto !important;">
                <table id="openjobs" class="table  table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Jobs</th>
                            <th>Job Name</th>
                            <th>Avg Response time</th>
                            <th>Avg Job Close time</th>
                            <th>Coverage Area/Group</th>
                            <th>Job Age</th>
                            <th>Issue Reported from</th>
                            <th>Service</th>
                            <th>Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Emergency</td>
                            <td>WPM</td>
                            <td>24 hours</td>
                            <td>1/3 days</td>
                            <td>Peshawar</td>
                            <td>3 days</td>
                            <td>Web</td>
                            <td>Electrician</td>
                            <td>093493085</td>
                        </tr>
                        <tr>
                            <td>Non Emergency</td>
                            <td>WPM</td>
                            <td>24 hours</td>
                            <td>1/3 days</td>
                            <td>Peshawar</td>
                            <td>3 days</td>
                            <td>Web</td>
                            <td>Electrician</td>
                            <td>093493085</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection