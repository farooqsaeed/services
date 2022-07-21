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
        color: #38BF67;
    }

    tr {
        cursor: pointer;
    }

    .menu a {
        text-decoration: none !important;
        color: inherit !important;
    }

    .table {
        border-collapse: separate;

    }

    .table th {
        border: none;
    }

    .bg-info {
        background-color: #5869C1 !important;
        border-radius: 15px !important;
    }

    img {
        width: 25px;
    }
</style>


<div class="container-fluid">
    <div class="row bg-green">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="py-3 my-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between align-items-center my-0 align-self-center">
                        <span class="card-title my-0 ml-n2"><i class="fa fa-suitcase" aria-hidden="true"></i>
                            Jobs</span>
                        <div class="notification mt-3">
                            <div class="fa fa-bell mx-4 mt-1">
                                <p class="mt-1">Notification</p>
                            </div>

                            <div class="position-relative">
                                <i class="fa fa-ellipsis-v mt-2" id="dots3" aria-hidden="true">
                                </i>
                            </div>

                            <div class="logoutdiv ">
                                <form action="{{ URL::to('signout') }}" method="post">
                                    @csrf
                                    <button class="btn btn-block" type="submit"><br>
                                        <p>Logout</p>
                                    </button>
                                </form>
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
                    <div class="d-flex  justify-content-between align-items-baseline mt-5 mb-0 ">
                        <div class="card-text p-0 ">
                            <ol class="breadcrumb bg-white   ml-lg-2 collapse show">
                                <li class="breadcrumb-item">
                                    <a href="#!">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Jobs
                                </li>
                            </ol>
                        </div>
                        <div class="notification ">
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
                <div class="btn btn-outline-secondary btn-sm ml-3 pr-lg-4">
                    <a href="{{url('jobs')}}"> New Jobs&nbsp;&nbsp;&nbsp;
                        @if($jobcount !==null)
                        <sup class="badge badge-danger">
                            <small>0{{ $jobcount}}</small>
                        </sup>
                        @endif
                    </a>
                </div>

                <div class="btn btn-outline-secondary btn-sm mx-3 pr-lg-4">
                    <a href="{{url('inprogress-job')}}"> In progress Jobs&nbsp;&nbsp;
                        <sup class="badge badge-danger">
                            <small>05</small>
                        </sup>
                    </a>
                </div>

                <div class="btn btn-outline-secondary btn-sm pr-lg-4">
                    <a href="{{url('closed-job')}}">Closed Jobs </a>
                </div>
            </div>

        </div>
        <div class="col-lg-12 example_col">
            <table id="jobs" class="table text-lg-center border display" style="width:100%">
                <div class="addbtn">
                    <a href="{{url('job')}}/job">
                        <button class="btn btn-success btn-sm ">Add Jobs</button>
                    </a>
                </div>
                <thead class="border-0">
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
                    <tr data-url="{{url('jobs/'.$job->id)}}">
                        <td>
                           {{-- <!-- #{{ Helper::getCustomerID( $job->case_no)}} --> --}}

                            {{$job->case_no}}</td>
                        <td>{{$job->property_id}}</td>
                        <td>{{$job->subject}}</td>
                        <td>Nill</td>
                        <td>
                            @if($job->severity !=='Non-Emergency')
                            <img src="{{URL::asset('assets/imgs/icons/lighton.png')}}" alt="">
                            @else
                            <img src="{{URL::asset('assets/imgs/icons/lightoff.png')}}" alt="">
                            @endif
                        </td>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
    $(function () {
        $('#jobs').on("click", "tr", function () {
            window.location = $(this).data("url");
        });
    });
</script>


<!-- logout -->
<script>
    $("#dots3").click(function () {
        $(".logoutdiv").toggle();
    });
</script>
@endsection