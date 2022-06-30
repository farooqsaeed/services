@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/jobs.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/compliance.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/events.css')}}">


<div class="container-fluid events">
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
            <div class=" Header d-none  d-sm-block">
                <div class="row  ">
                    <div class="col-lg-3">
                        <h2>Map View</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mt-4">
            <div class="card py-0 my-0 border-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between  my-0 align-self-center">
                        <span class="card-title my-0  ml-2"><i class="fa fa-align-left fa-1x   p-1"
                                aria-hidden="true"></i>
                            Events</span>
                        <div class="notification mt-0">
                            @include('../layouts/header')
                        </div>
                    </div>
                    <div class="card-text p-0 mb-0 mt-3 ml-4">
                        <ol class="breadcrumb bg-white">
                            <li class="breadcrumb-item ml-lg-n3">
                                <a href='/'>Home</a>
                            </li>
                            <li class="breadcrumb-item  ">
                                <a href='/events'>Events </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-1 pt-0">
            <div class="cards d-lg-flex justify-content-lg-between align-self-center">
                <div class="card card1 w-100">
                    <a href="eventsreports">
                        <div class="card-body">
                            <div class="fa fa-suitcase fa-2x"></div>
                            <h4 class="card-title">10,345</h4>
                            <p class="card-text">Reports</p>
                        </div>
                    </a>
                </div>
                <div class="card card2 w-100">
                    <a href="events_complience">
                        <div class="card-body">
                            <div class="fa fa-exclamation-triangle fa-2x"></div>
                            <h4 class="card-title">103</h4>
                            <p class="card-text">Compliance</p>
                        </div>
                    </a>
                </div>
                <div class="card card3 w-100">
                    <div class="card-body">
                        <div class="fa fa-align-left fa-2x bg-light text-success"></div>
                        <h4 class="card-title">215</h4>
                        <p class="card-text"> events</p>
                    </div>
                </div>
                <div class=" w-100">
                </div>
                <div class=" w-75">
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-6 col-xs-6 pl-2 pr-lg-4 pt-0 jobs mt-4">
            <div class="card1 card shadow">
                <div class="card-header">Events</div>
                <div class="card-body p-5 pt-0">
                    <div class="eventsuser row p-0 my-3">
                        <div class="eventuserimage col-2 p-0">
                            <img class="w-100" src="{{URL::asset('assets/imgs/img/user/pic.png')}}" alt="">
                        </div>
                        <div class=" col-10 eventtext ml-0   my-auto">
                            <h5>user name</h5>
                            <p class="mb-0">User A deleted Group</p>
                            <p class=" ">
                                <span>April 26, 11:00 AM</span>
                                <span>13 minutes ago</span>
                            </p>
                        </div>
                    </div>

                    <div class="eventsuser row p-0 my-3">
                        <div class="eventuserimage col-2 p-0">
                            <img class="w-100" src="{{URL::asset('assets/imgs/img/user/pic.png')}}" alt="">
                        </div>
                        <div class=" col-10 eventtext ml-0   my-auto">
                            <h5>user name</h5>
                            <p class="mb-0">User A deleted Group</p>
                            <p class=" ">
                                <span>April 26, 11:00 AM</span>
                                <span>13 minutes ago</span>
                            </p>
                        </div>
                    </div>

                    <div class="eventsuser row p-0 my-3">
                        <div class="eventuserimage col-2 p-0">
                            <img class="w-100" src="{{URL::asset('assets/imgs/img/user/pic.png')}}" alt="">
                        </div>
                        <div class=" col-10 eventtext ml-0   my-auto">
                            <h5>user name</h5>
                            <p class="mb-0">User A deleted Group</p>
                            <p class=" ">
                                <span>April 26, 11:00 AM</span>
                                <span>13 minutes ago</span>
                            </p>
                        </div>
                    </div>
                    
                    <div class="eventsuser row p-0 my-3">
                        <div class="eventuserimage col-2 p-0">
                            <img class="w-100" src="{{URL::asset('assets/imgs/img/user/pic.png')}}" alt="">
                        </div>
                        <div class=" col-10 eventtext ml-0   my-auto">
                            <h5>user name</h5>
                            <p class="mb-0">User A deleted Group</p>
                            <p class=" ">
                                <span>April 26, 11:00 AM</span>
                                <span>13 minutes ago</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection