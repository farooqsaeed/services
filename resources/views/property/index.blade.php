@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">

<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">

<link rel="stylesheet" href="{{URL::asset('assets/css/plumbers.css')}}">
<style>
    .cards .card a {
        color: white;
        text-decoration: none;
    }

    .dropdown-menu {
        margin-left: -60px !important;
        border: none;
        border: 2px solid var(--unnamed-color-407c1e);
        background: transparent url('img/Rectangle 1522.png') 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 6px #00000029;
        border: 2px solid #407C1E;
        border-radius: 10px;
        opacity: 1;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #407C1E;
        color: white !important;
    }

    #dropdown .dropdown-menu {
        background: transparent 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 6px #00000029;
        border: 2px solid #407C1E;
        border-radius: 10px;
        opacity: 1;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        padding: 2%;
    }

    #dropdown .dropdown-menu ul li a:hover {
        text-decoration: none;
        border-radius: 2px;
    }

    #dropdown .dropdown-menu li a {
        text-decoration: none;
        border-radius: 2px;
        color: #407C1E !important;

    }

    #dropdown .dropdown-submenu {
        position: relative;
    }

    #dropdown .dropdown-submenu .dropdown-menu {
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

    tr {
        cursor: pointer;
    }
</style>
<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 px-0 map_view">
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
                        <span class="card-title my-0 ml-n2"><i class="fa fa-home" aria-hidden="true"></i>
                            Properties</span>
                        <div class="notification mt-3">
                            @include('../layouts/header')
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
                    <div class="d-flex  justify-content-between mt-5 mb-0 ">
                        <div class="card-text p-0 mt-0">
                            <ol class="breadcrumb bg-white ml-lg-3 collapse show">
                                <li class="breadcrumb-item">
                                    <a href="#!">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Properties
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
            <div class="menu p-3">
                <p class="active mx-3">Active Properties</p>
                <p class="mx-2">Archive</p>
                <p>View all</p>
            </div>
        </div>
        <div class="col-lg-12 example_col">
            <table id="property" class="table table-striped table-bordered text-center display" style="width:100%">
                <a class="addbtn" href="{{URL('property/create')}}"><button class="btn btn-success btn-sm">Add
                        Property</button></a>
                <thead class="thead-dark">
                    <tr>
                        <th>First line of address</th>
                        <th>Town</th>
                        <th>Postcode</th>
                        <th>Tenants</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($property as $item)
                    <tr data-url="{{url('property/'.$item->id)}}">
                        <td>{{$item->first_line_address}}</td>
                        <td>{{$item->Town}}</td>
                        <td> {{$item->Postcode}}</td>
                        <td> 8</td>
                        <td>{{$item->status}}</td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <a href="{{url('jobs/create')}}" class="dropdown-item" type="button">Add New Job</a>
                                    <a href="{{ url('property/'.$item->id) }}" class="dropdown-item"
                                        type="button">Property Details</a>
                                    <a href="{{ url('property/'.$item->id.'/edit') }}" class="dropdown-item"
                                        type="button"> Edit Property </a>
                                    <form action="{{ url('property', $item->id ) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="dropdown-item">Delete </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script rel="script" src="{{URL::asset('assets/js/calender.js')}}">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script>
    // $(function () {
    //     $('#property').on("click", "tr", function () {
    //         window.location = $(this).data("url");
    //     });
    // });

    
</script>

@endsection