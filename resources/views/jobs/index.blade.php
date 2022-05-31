@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/jobs.css')}}">

<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">

<link rel="stylesheet" href="{{URL::asset('assets/css/plumbers.css')}}">



<style>
    .cards .card a {
        color: white;
        text-decoration: none;
    }

    .addbtn {
        position: relative;
        z-index: 99;
        float: right;
    }
</style>


<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 map_view">
            <a href="/mapview">
                <div class=" Header d-none  d-sm-block">
                    <div class="row  ">
                        <div class="col-lg-3 ">
                            <h2>Map View</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12   ">
            <div class="card py-0 my-0 border-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between my-0 align-self-center">
                        <span class="card-title my-0 ml-n2"><i class="fa fa-suitcase" aria-hidden="true"></i>
                            Jobs</span>
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
                </div>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0  ">
            <div class="card py-0 my-0 border-0 BreadCrumb_card">
                <div class="card-body py-0 my-0 border-bottom mb-3">
                    <div class="d-flex  justify-content-between mt-5 mb-0 ">
                        <div class="card-text p-0   mt-0">
                            <ol class="breadcrumb bg-white collapse show">
                                <li class="breadcrumb-item">
                                    <a href="#!">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Jobs
                                </li>
                            </ol>
                        </div>
                        <div class="notification">
                            <div class=" mt-n1" id="collapseExample" role="button">
                                <i id="hideable" class="fa fa-chevron-up " aria-hidden="true"></i>
                            </div>
                            <div id="removeexampletable" class="fa fa-times ml-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 ">
            <div class="menu p-3">
                <p class="active ml-3">New Jobs</p>
                <p class="mx-2">In progress Jobs</p>
                <p class="mx-2">Auto Resolved Jobs</p>
                <p class="mx-2">Resolved Jobs</p>
                <p class="mx-2">Closed Jobs</p>
            </div>

        </div>
        <div class="col-lg-12 example_col">
            <table id="jobs" class="table text-center table-striped table-bordered display" style="width:100%">
                <div class="addbtn">
                    <a href="{{url('jobs/create')}}"><button class="btn btn-success btn-sm success">Add
                            Jobs</button></a>
                </div>
                <thead class="thead-dark">
                    <tr>
                        <th>Case Number</th>
                        <th>Property ID</th>
                        <th>Subject</th>
                        <th>Reported</th>
                        <th>Severity</th>
                        <th>Status</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td>{{$job->case_no}}</td>
                        <td>{{$job->property_id}}</td>
                        <td>{{$job->subject}}</td>
                        <td>Nill</td>
                        <td>{{$job->severity}}</td>
                        <td>
                            <div class="bg-info text-white rounded">
                                {{$job->status}}
                            </div>
                        </td>
                        <td>One Day Ago</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script rel="script" src="{{URL::asset('assets/js/calender.js')}}">
</script>



@endsection