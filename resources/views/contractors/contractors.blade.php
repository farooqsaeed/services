@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{URL::asset('assets/css/contractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<style>
    .DetailCards .col-lg-3 a {
        text-decoration: none;
    }
</style>

<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
            <div class=" Header d-none  d-sm-block">
                <div class="row  ">
                    <div class="col-lg-3 p-3">
                        <h2>Map View</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
            <div class="card py-0 my-0 border-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between my-0 align-self-center">
                        <span class="card-title my-0">Contractors</span>
                        <div class="notification mt-3">
                            @include('../layouts/header')
                        </div>
                    </div>
                    <div class="card-text p-0 mb-0 mt-0">
                        <ol class="breadcrumb bg-white">
                            <li class="breadcrumb-item">
                                <Link to='/'>Home </Link>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Contractors
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
            <div class="Contractor_cards d-lg-flex justify-content-lg-between align-self-center">
                <div class="card card3 mt-3  w-100">
                    <div class="card-body">
                        <div class="fa  fa-check fa-2x"></div>
                        <h4 class="card-title">10,345</h4>
                        <p class="card-text">Active</p>
                    </div>
                </div>
                <div class="card card4 mt-3  w-100">
                    <div class="card-body">
                        <div class="fa  fa-ellipsis-h fa-2x"></div>
                        <h4 class="card-title">215</h4>
                        <p class="card-text">New / Pending</p>
                    </div>
                </div>
                <div class="card card1 mt-3  w-100 ">
                    <div class="card-body">
                        <div class="fa fa-ban fa-2x"></div>
                        <h4 class="card-title">215</h4>
                        <p class="card-text">Suspended</p>
                    </div>
                </div>
                <div class="w-100 "></div>
                <div class="w-100 "></div>
            </div>
        </div>

        <!-- start -->
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
                                <span class="card-title pending">
                                    <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                                </span>
                                <span class="card-title">&nbsp;&nbsp; 0</span>
                                <span class="card-text">Pending</span>
                            </p>
                            <p>
                                <span class="card-title pending">
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
                    <a href="plumbers">
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
                    </a>
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
        <!-- end -->

    </div>
</div>


@endsection