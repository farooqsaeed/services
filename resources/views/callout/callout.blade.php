@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/jobs.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">



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
                        <span class="card-title my-0">Callouts</span>
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
                        <ol class="breadcrumb bg-white">
                            <li class="breadcrumb-item ml-n3">
                                <a href='/'>Home </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href='/callout'>Callouts </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row cards">
        <div class="col-lg-3  col-md-3 col-sm-12 col-xs-12   pt-0">
            <div class="card card1 w-100">
                <a href="newjobs">
                    <div class="card-body">
                        <div class="fa fa-suitcase fa-2x"></div>
                        <h4 class="card-title">10,345</h4>
                        <p class="card-text ">Jobs</p>
                    </div>
                </a>
            </div>
        </div>  

        <div class="col-lg-3  col-md-3 col-sm-12 col-xs-12   pt-0">
            <div class="card card2 w-100">
                <a href="contractors">
                    <div class="card-body">
                        <div class="fa fa-user-o fa-2x"></div>
                        <h4 class="card-title">1045</h4>
                        <p class="card-text ">Contractors</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-3  col-md-3 col-sm-12 col-xs-12   pt-0">
            <div class="card card3 w-100">
                <a href="newjobs">
                    <div class="card-body">
                        <div class="fa fa-suitcase fa-2x"></div>
                        <h4 class="card-title">3445</h4>
                        <p class="card-text ">Property</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>

@endsection