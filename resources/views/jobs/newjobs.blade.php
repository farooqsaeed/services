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
</style>


<div class="container-fluid newjobs">
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  pl-0">
            <div class=" newjobHeader p-3 d-flex justify-content-start align-items-baseline">
                <i class="fa fa-chevron-left " aria-hidden="true"></i>
                <h5 class="ml-3">New Jobs</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
        <div class="card  border-0  BreadCrumb_card mt-5">
            <div class="card-body ">
                <div class="card-text  ">
                    <ol class="breadcrumb bg-white">
                        <li class="breadcrumb-item">
                            <a href="">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">
                            <a href="">New Jobs</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-0">
        <div class="cards d-lg-flex justify-content-lg-around align-self-center">
            <div class="card card1 w-100">
                <div class="card-body">
                    <div class="fa fa-suitcase fa-2x"></div>
                    <h4 class="card-title">10,345</h4>
                    <p class="card-text">Open Jobs </p>
                </div>
            </div>
            <div class="card card2 w-100">
                <div class="card-body">
                    <div class="fa fa-refresh fa-2x"></div>
                    <h4 class="card-title">4103</h4>
                    <p class="card-text">Auto Resolved Jobs </p>
                </div>
            </div>
            <div class="card card4 w-100">
                <div class="card-body">
                    <div class="fa fa-check-square fa-2x"></div>
                    <h4 class="card-title">2215</h4>
                    <p class="card-text">Resolved Jobs</p>
                </div>
            </div>
            <div class="card card5 w-100">
                <div class="card-body">
                    <div class="fa fa-times-circle fa-2x"></div>
                    <h4 class="card-title">2215</h4>
                    <p class="card-text">Closed Jobs </p>

                </div>
            </div>
            <div class="w-100"></div>
        </div>
    </div>


    <div class="col-lg-12 col-md-12 mt-2 col-sm-12 col-xs-12  ">
        <div class="DetailCards d-lg-flex justify-content-lg-between ">
            <div class="col-lg-3 my-2 p-1">
                <div class="card1 card shadow">
                    <div class="card-header pb-1">
                        <img class="" src="{{URL::asset('assets/imgs/icons/powerplug.svg')}}" alt="" srcSet="" />
                        Electrician
                    </div>
                    <div class="card-body pb-0 mb-0">
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                            </span>
                            <span class="card-title"> 0</span>
                            <span class="card-text">Active</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp; 0</span>
                            <span class="card-text">Pending</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                            <span class="card-text">Suspended</span>
                        </p>
                        <hr class="card_hr my-0" />
                        <div class="footer text-center pb-0 my-1">
                            <span class="TotalJobs">Total Jobs </span>
                            <span class="Total"> 40,886</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2 p-1">
                <div class="card1 card shadow">
                    <div class="card-header ">
                        <img src="{{URL::asset('assets/imgs/icons/Plumber.svg')}}" alt="" srcSet="" /> Plumber
                    </div>
                    <div class="card-body pb-0 mb-0">
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                            </span>
                            <span class="card-title"> 0</span>
                            <span class="card-text">Active</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp; 0</span>
                            <span class="card-text">Pending</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                            <span class="card-text">Suspended</span>
                        </p>
                        <hr class="card_hr my-0" />
                        <div class="footer text-center pb-0 my-1">
                            <span class="TotalJobs">Total Jobs </span>
                            <span class="Total"> 40,886</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2 p-1">
                <div class="card1 card shadow">
                    <div class="card-header">
                        <img src="{{URL::asset('assets/imgs/icons/Lock.svg')}}" alt="" srcSet="" /> Electrician
                    </div>
                    <div class="card-body pb-0 mb-0">
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                            </span>
                            <span class="card-title"> 0</span>
                            <span class="card-text">Active</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp; 0</span>
                            <span class="card-text">Pending</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                            <span class="card-text">Suspended</span>
                        </p>
                        <hr class="card_hr my-0" />
                        <div class="footer text-center pb-0 my-1">
                            <span class="TotalJobs">Total Jobs </span>
                            <span class="Total"> 40,886</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2 p-1">
                <div class="card1 card shadow">
                    <div class="card-header">
                        <img src="{{URL::asset('assets/imgs/icons/tools.svg')}}" alt="" srcSet="" /> Handyman
                    </div>
                    <div class="card-body pb-0 mb-0">
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                            </span>
                            <span class="card-title"> 0</span>
                            <span class="card-text">Active</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp; 0</span>
                            <span class="card-text">Pending</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                            <span class="card-text">Suspended</span>
                        </p>
                        <hr class="card_hr my-0" />
                        <div class="footer text-center pb-0 my-1">
                            <span class="TotalJobs">Total Jobs </span>
                            <span class="Total"> 40,886</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="DetailCards my-3 d-lg-flex justify-content-lg-between ">
            <div class="col-lg-3 my-2 p-1">
                <div class="card1 card shadow">
                    <div class="card-header">
                        <img class="" src="{{URL::asset('assets/imgs/icons/Gas.svg')}}" alt="" srcSet="" /> Gas &
                        Heating
                    </div>
                    <div class="card-body pb-0 mb-0">
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                            </span>
                            <span class="card-title"> 0</span>
                            <span class="card-text">Active</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp; 0</span>
                            <span class="card-text">Pending</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                            <span class="card-text">Suspended</span>
                        </p>
                        <hr class="card_hr my-0" />
                        <div class="footer text-center pb-0 my-1">
                            <span class="TotalJobs">Total Jobs </span>
                            <span class="Total"> 40,886</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2 p-1">
                <div class="card1 card shadow">
                    <div class="card-header pb-2">
                        <img src="{{URL::asset('assets/imgs/icons/Drain.svg')}}" alt="" srcSet="" /> Drainage
                    </div>
                    <div class="card-body pb-0 mb-0">
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                            </span>
                            <span class="card-title"> 0</span>
                            <span class="card-text">Active</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp; 0</span>
                            <span class="card-text">Pending</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                            <span class="card-text">Suspended</span>
                        </p>
                        <hr class="card_hr my-0" />
                        <div class="footer text-center pb-0 my-1">
                            <span class="TotalJobs">Total Jobs </span>
                            <span class="Total"> 40,886</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2 p-1">
                <div class="card1 card shadow">
                    <div class="card-header">
                        <img src="{{URL::asset('assets/imgs/icons/Pest.svg')}}" alt="" srcSet="" /> Pest control
                    </div>
                    <div class="card-body pb-0 mb-0">
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                            </span>
                            <span class="card-title"> 0</span>
                            <span class="card-text">Active</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp; 0</span>
                            <span class="card-text">Pending</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                            <span class="card-text">Suspended</span>
                        </p>
                        <hr class="card_hr my-0" />
                        <div class="footer text-center pb-0 my-1">
                            <span class="TotalJobs">Total Jobs </span>
                            <span class="Total"> 40,886</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2 p-1">
                <div class="card1 card shadow">
                    <div class="card-header">
                        <img src="{{URL::asset('assets/imgs/icons/garden.svg')}}" alt="" srcSet="" /> Gardner
                    </div>
                    <div class="card-body pb-0 mb-0">
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                            </span>
                            <span class="card-title"> 0</span>
                            <span class="card-text">Active</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp; 0</span>
                            <span class="card-text">Pending</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                            <span class="card-text">Suspended</span>
                        </p>
                        <hr class="card_hr my-0" />
                        <div class="footer text-center pb-0 my-1">
                            <span class="TotalJobs">Total Jobs </span>
                            <span class="Total"> 40,886</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="DetailCards my-3 d-lg-flex justify-content-lg-start ">
            <div class="col-lg-3 my-2 p-1">
                <div class="card1 card shadow">
                    <div class="card-header">
                        <img class="" src="{{URL::asset('assets/imgs/icons/key.svg')}}" alt="" srcSet="" /> Key
                        Holder
                    </div>
                    <div class="card-body pb-0 mb-0">
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                            </span>
                            <span class="card-title"> 0</span>
                            <span class="card-text">Active</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp; 0</span>
                            <span class="card-text">Pending</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                            <span class="card-text">Suspended</span>
                        </p>
                        <hr class="card_hr my-0" />
                        <div class="footer text-center pb-0 my-1">
                            <span class="TotalJobs">Total Jobs </span>
                            <span class="Total"> 40,886</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2 p-1">
                <div class="card1 card shadow">
                    <div class="card-header">
                        <img src="{{URL::asset('assets/imgs/icons/other.svg')}}" alt="" srcSet="" /> Others
                    </div>
                    <div class="card-body pb-0 mb-0">
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                            </span>
                            <span class="card-title"> 0</span>
                            <span class="card-text">Active</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp; 0</span>
                            <span class="card-text">Pending</span>
                        </p>
                        <p>
                            <span class="card-title">
                                <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                            </span>
                            <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                            <span class="card-text">Suspended</span>
                        </p>
                        <hr class="card_hr my-0" />
                        <div class="footer text-center pb-0 my-1">
                            <span class="TotalJobs">Total Jobs </span>
                            <span class="Total"> 40,886</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection