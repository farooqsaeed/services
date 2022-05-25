@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/jobs.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/tenant.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/plumber.css')}}">
<style>
    .cards .card a {
        color: white;
        text-decoration: none;
    }

    .dropdown-menu {
        background: transparent 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 6px #00000029;
        border: 2px solid #407C1E;
        border-radius: 10px;
        opacity: 1;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        padding: 2%;
    }

    .dropdown-menu ul li a:hover {
        text-decoration: none;
        border-radius: 2px;
    }

    .dropdown-menu li a {
        text-decoration: none;
        border-radius: 2px;
        color: #407C1E !important;

    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        background-color: white !important;
        top: 120%;
        left: 30%;
        margin-top: -1px;
    }

    .addbtn {
        position: relative;
        z-index: 99;
        float: right;
    }

    #tenant_paginate ul li {
        border: none !important;
        border-radius: 0%;
    }

    .menu p {
        font-size: 13px;
        font-weight: bold;
        color: #407c1e;
        opacity: 0.5;
        margin-left: 10px;
    }

    .menu p a {
        color: #407c1e;

    }

    .selected {
        opacity: 1 !important;
        /* border-bottom: 2px solid #407C1E; */
        text-decoration: underline;
    }

    .user {
        width: 59px;
        height: 59px;

    }

    .text-title {
        color: #737475;
        font-weight: bold;
    }

    .text-title span {
        color: #737475;
        font-size: 14px;
        font-weight: 100 !important;
    }
</style>


<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 px-0 map_view  ">
            <a href="/mapview">
                <div class=" Header d-none  d-sm-block">
                    <div class="row  ">
                        <div class="col-lg-3">
                            <h2>Map View</h2>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="card py-0 my-0 border-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between my-0 align-self-center">
                        <span class="card-title my-0 ml-n2"><i class="fa fa-cog" aria-hidden="true"></i>
                            Settings</span>
                        <div class="notification mt-3">
                            <div id="dropdown" class="dropdown mt-2 mr-2">
                                <button class="btn btn-success btn-sm success dropdown-toggle" type="button"
                                    data-toggle="dropdown">Global
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a tabindex="-1" href="#">Group A</a></li>
                                    <li><a tabindex="-1" href="#">Group B</a></li>
                                    <li class="dropdown-submenu">
                                        <a class="test" tabindex="-1" href="#">Group C <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown-submenu">
                                                <a class="test" href="#">Group A2<span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="#">Group A21</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
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
    <div class="row  ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
            <div class="card py-0 my-0 border-0 BreadCrumb_card">
                <div class="card-body py-0 my-0 mb-3">
                    <div class="d-flex justify-content-between mt-3 mb-0 ">
                        <div class="  card-text  ">
                            <ol class="breadcrumb bg-white ml-lg-3 collapse show">
                                <li class="breadcrumb-item">
                                    <a href="#!">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Settings
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    User Management
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="d-flex justify-content-start menu ">
                <p class="selected"><a href="">Profile</a></p>
                <p><a href="">User Management</a></p>
                <p><a href="">Services</a></p>
            </div>
        </div>
        <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-12 col-xs-12 pt-lg-5 p-2">
            <div class="d-flex justify-content-start  align-items-center mt-lg-n2">
                <img class="user" src="{{ URL::to('/assets/imgs/img/user.jpg') }}">
                <h3 class="p-3">User Name</h3>
            </div>
        </div>
        <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-12 col-xs-12 p-lg-5 pb-lg-0 pl-lg-1 p-2">
            <div class="d-flex  justify-content-lg-between   justify-content-around">
                <div href="user/{{$user->id}}/edit" class="btn btn-success btn-sm px-4">Edit</div>
                <a href="{{url('changepassword')}}" class="btn btn-info btn-sm" >Change Password</a>
                <form action="{{ url('user' , $user->id ) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="btn btn-sm btn-danger px-4">Delete</button>
                </form>
             </div>
        </div>
        <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-12 col-xs-12 p-2">
            <p class="text-title">Email: <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Farooq@gmail.com</span> </p>
            <p class="text-title">Sub-Group: <span> &nbsp;&nbsp; Group A-1</span> </p>
            <p class="text-title">Allowed Properties: <span>&nbsp; Property, Tenant & User</span> </p>
        </div>
        <div class="col-lg-5 offset-lg-1 col-md-5 col-sm-12 col-xs-12 p-2 pl-lg-5">
            <p class="text-title">Root Group:<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Group A</span> </p>
            <p class="text-title">Child Group:<span> &nbsp;&nbsp;Group A-1.1</span> </p>
            <p class="text-title">Roll: <span>&nbsp; Administrater</span> </p>
        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('#dropdown.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>
@endsection