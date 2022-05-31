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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
            <div class="card py-0 my-0 border-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between my-0 align-self-center">
                        <span class="card-title my-0 ml-n2"><i class="fa fa-th-large" aria-hidden="true"></i>
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0   ">
            <div class="card py-0 my-0 border-0 border BreadCrumb_card">
                <div class="card-body py-0 my-0 border-bottom mb-3">
                    <div class="d-flex justify-content-between mt-5 mb-0 ">
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
                        <div class="  notification">
                            <div class="mt-n1 " id="collapseExample" role="button">
                                <i id="hideable" class="fa fa-chevron-up " aria-hidden="true"></i>
                            </div>
                            <div id="removeexampletable" class="fa fa-times ml-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- table -->
        <div class="col-lg-12 example_col">
            <table id="tenant" class="table table-striped table-bordered display text-center" style="width:100%">
                <div class="addbtn">
                    <a href="{{URL('user/create')}}" class="  btn btn-success btn-sm success  "> Add
                        User </a>
                </div>
                <thead class="thead-dark">
                    <tr>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Role</th>
                         <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->user_type}}</td>
                         <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <a href="{{ URL::to('user/' . $user->id) }}" class="dropdown-item"
                                        type="button">
                                        User Details
                                    </a>
                                    <a href="user/{{$user->id}}/edit" class="dropdown-item" type="button">Edit
                                        User </a>
                                    <form action="{{ url('user' , $user->id ) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="dropdown-item">Delete User</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- end table -->
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