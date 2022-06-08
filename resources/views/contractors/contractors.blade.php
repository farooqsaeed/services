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

    #contractor_paginate ul li {
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
                        <span class="card-title my-0 ml-n2"><i class="fa fa-user" aria-hidden="true"></i>
                            Contractors</span>
                        <div class="notification mt-3">
                            @include('../layouts/header')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0   ">
            <div class="card py-0 my-0 border-0 border BreadCrumb_card">
                <div class="card-body py-0 my-0 border-bottom mb-3">
                    <div class="d-flex justify-content-between mt-5 mb-0 ">
                        <div class="card-text ">
                            <ol class="breadcrumb bg-white ml-lg-3 collapse show">
                                <li class="breadcrumb-item">
                                    <a href="#!">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Contractors
                                </li>
                            </ol>
                        </div>
                        <div class="notification">
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
            <table id="contractor" class="table table-striped table-bordered display" style="width:100%">
                <div class="addbtn">
                    <a href="{{URL('contractors/create')}}"><button class="btn btn-success   success btn-sm">Add
                            Contractor</button></a>
                </div>
                <thead class="thead-dark">
                    <tr>
                        <th>Status</th>
                        <th>Business Name</th>
                        <th>Contractor Name</th>
                        <th>Coverage Area/Group</th>
                        <th>Service</th>
                        <th>Contact</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contractors as $contractor)
                    <tr>
                        <td>{{$contractor->status}}</td>
                        <td>{{$contractor->business_name}}</td>
                        <td>{{$contractor->first_name}}</td>
                        <td>{{$contractor->area_of_coverage}}</td>
                        <td>@if($contractor->mobile_no==1)
                            App user
                            @else
                            Non App user
                            @endif</td>
                        <td>
                            {{$contractor->mobile_no}}
                        </td>
                        <td>
                            <div class="dropdown open">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="triggerId"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select
                                </button>
                                <div class="dropdown-menu ml-n5" aria-labelledby="triggerId">

                                    <form action="{{URL('contractors/'.$contractor->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" type="submit">Delete</button>
                                    </form>
                                    <button class="dropdown-item disabled" href="#">Disabled action</button>
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
 
@endsection