@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/jobs.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/compliance.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<style>
    td {
        border-top: none !important;
    }

    a {
        text-decoration: none !important;
        color: white;
    }
</style>
<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
            <div class=" Header d-none  d-sm-block">
                <div class="row  ">
                    <div class="col-lg-3  ">
                        <h2>Map View</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mt-4">
            <div class="card py-0 my-0 border-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between my-0 align-self-center">
                        <span class="card-title my-0 ml-n4"><i class="fa fa-align-left fa-1x   p-1"
                                aria-hidden="true"></i>
                            Events</span>
                        <div class="notification mt-0">
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
                    <div class="card-text p-0 mb-0 mt-3 ml-3">
                        <ol class="breadcrumb bg-white">
                            <li class="breadcrumb-item ml-lg-n3">
                                <a href='/'>Home</a>
                            </li>
                            <li class="breadcrumb-item  ">
                                <a href='/eventsreports'>Events </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-1 pt-0">
            <div class="cards d-lg-flex justify-content-lg-around align-self-center">
                <div class="card card1 w-100">
                    <div class="card-body">
                        <div class="fa fa-suitcase fa-2x"></div>
                        <h4 class="card-title">10,345</h4>
                        <p class="card-text">Reports</p>
                    </div>
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
                    <a href="events">
                        <div class="card-body">
                            <div class="fa fa-align-left fa-2x bg-light text-success"></div>
                            <h4 class="card-title">215</h4>
                            <p class="card-text"> events</p>
                        </div>
                    </a>
                </div>
                <div class="w-100">
                </div>
                <div class="w-100">
                </div>
            </div>
        </div>
        <div class=" col-lg-12 my-2 p-1 jobs">
            <div class="card1 card shadow">
                <div class="card-header">Reports</div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tbody>
                            <tr>
                                <td>
                                    <p>Total Properties</p>
                                </td>
                                <td>
                                    <h5 class="text-success ">159</h5>
                                </td>
                                <td>
                                    <span class="p-1 badge badge-danger">Subscribe</span>
                                </td>
                                <td><span class="text-danger">PDF</span>/<i class="fa fa-file-excel-o text-success"
                                        aria-hidden="true"></i>
                                </td>
                                <td>
                                    <p>Daily</p>
                                </td>
                                <td>
                                    <p>example@gmail.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p>Total Contractors</p>
                                </td>
                                <td>
                                    <h5 class="text-success ">159</h5>
                                </td>
                                <td>
                                    <span class="p-1 badge badge-danger">Subscribe</span>
                                </td>
                                <td><span class="text-danger">PDF</span>/<i class="fa fa-file-excel-o text-success"
                                        aria-hidden="true"></i>
                                </td>
                                <td>
                                    <p>Weekly</p>
                                </td>
                                <td>
                                    <p>example@gmail.com</p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Total Jobs</p>
                                </td>
                                <td>
                                    <h5 class="text-success ">159</h5>
                                </td>
                                <td>
                                    <span class="p-1 badge badge-danger">Subscribe</span>
                                </td>
                                <td><span class="text-danger">PDF</span>/<i class="fa fa-file-excel-o text-success"
                                        aria-hidden="true"></i>
                                </td>
                                <td>
                                    <p>Weekly</p>
                                </td>
                                <td>
                                    <p>example@gmail.com</p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p> Number of jobs reported per property</p>
                                </td>
                                <td>
                                    <h5 class="text-success ">159</h5>
                                </td>
                                <td>
                                    <span class="p-1 badge badge-danger">Subscribe</span>
                                </td>
                                <td><span class="text-danger">PDF</span>/<i class="fa fa-file-excel-o text-success"
                                        aria-hidden="true"></i>
                                </td>
                                <td>
                                    <p>Every Monday</p>
                                </td>
                                <td>
                                    <p>example@gmail.com</p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p> Number of jobs reported via app</p>
                                </td>
                                <td>
                                    <h5 class="text-success ">159</h5>
                                </td>
                                <td>
                                    <span class="p-1 badge badge-danger">Subscribe</span>
                                </td>
                                <td><span class="text-danger">PDF</span>/<i class="fa fa-file-excel-o text-success"
                                        aria-hidden="true"></i>
                                </td>
                                <td>
                                    <p>Daily</p>
                                </td>
                                <td>
                                    <p>example@gmail.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p> Number of Jobs reported via phone/email</p>
                                </td>
                                <td>
                                    <h5 class="text-success ">159</h5>
                                </td>
                                <td>
                                    <span class="p-1 badge badge-danger">Subscribe</span>
                                </td>
                                <td><span class="text-danger">PDF</span>/<i class="fa fa-file-excel-o text-success"
                                        aria-hidden="true"></i>
                                </td>
                                <td>
                                    <p>Daily</p>
                                </td>
                                <td>
                                    <p>example@gmail.com</p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Number of jobs completed</p>
                                </td>
                                <td>
                                    <h5 class="text-success ">159</h5>
                                </td>
                                <td>
                                    <span class="p-1 badge badge-danger">Subscribe</span>
                                </td>
                                <td><span class="text-danger">PDF</span>/<i class="fa fa-file-excel-o text-success"
                                        aria-hidden="true"></i>
                                </td>
                                <td>
                                    <p>Daily</p>
                                </td>
                                <td>
                                    <p>example@gmail.com</p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p> Number of Jobs in pending</p>
                                </td>
                                <td>
                                    <h5 class="text-success ">159</h5>
                                </td>
                                <td>
                                    <span class="p-1 badge badge-danger">Subscribe</span>
                                </td>
                                <td><span class="text-danger">PDF</span>/<i class="fa fa-file-excel-o text-success"
                                        aria-hidden="true"></i>
                                </td>
                                <td>
                                    <p>Daily</p>
                                </td>
                                <td>
                                    <p>example@gmail.com</p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p> Number of properties</p>
                                </td>
                                <td>
                                    <h5 class="text-success ">159</h5>
                                </td>
                                <td>
                                    <span class="p-1 badge badge-danger">Subscribe</span>
                                </td>
                                <td><span class="text-danger">PDF</span>/<i class="fa fa-file-excel-o text-success"
                                        aria-hidden="true"></i>
                                </td>
                                <td>
                                    <p>Daily</p>
                                </td>
                                <td>
                                    <p>example@gmail.com</p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Number of engineer by category/All</p>
                                </td>
                                <td>
                                    <h5 class="text-success ">159</h5>
                                </td>
                                <td>
                                    <span class="p-1 badge badge-danger">Subscribe</span>
                                </td>
                                <td><span class="text-danger">PDF</span>/<i class="fa fa-file-excel-o text-success"
                                        aria-hidden="true"></i>
                                </td>
                                <td>
                                    <p>Weekly</p>
                                </td>
                                <td>
                                    <p>example@gmail.com</p>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p>Total Text message sent</p>
                                </td>
                                <td>
                                    <h5 class="text-success ">159</h5>
                                </td>
                                <td>
                                    <span class="p-1 badge badge-danger">Subscribe</span>
                                </td>
                                <td><span class="text-danger">PDF</span>/<i class="fa fa-file-excel-o text-success"
                                        aria-hidden="true"></i>
                                </td>
                                <td>
                                    <p>Weekly</p>
                                </td>
                                <td>
                                    <p>example@gmail.com</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection