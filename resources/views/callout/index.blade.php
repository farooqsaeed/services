@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/jobs.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<style>
    .addbtn {
        position: relative;
        z-index: 99;
        float: right;
    }
</style>

<div class="container-fluid">
    <div class="row bg-green">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="py-3 my-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between align-items-center my-0 align-self-center">
                        <span class="card-title my-0 ml-n2"><i class="fa fa-comment" aria-hidden="true"></i>
                            Callouts</span>
                        <div class="notification mt-3">
                            @include('../layouts/header')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row  ">
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
                                    Callouts
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
    </div>
    <div class="row">
        <!-- table -->
        <div class="col-lg-12 example_col">
            <table id="callout" class="table border  display text-lg-center" style="width:100%">
                <div class="addbtn">
                    <a href="callout/create" class=" btn btn-suc btn-sm"> Add Callout </a>
                </div>
                <thead>
                    <tr>
                        <th> Name</th>
                        <th> Email</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Property id</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gaurds as $gaurd)
                    <tr>
                        <td>{{$gaurd->Guard_Name}} </td>
                        <td> {{$gaurd->Guard_Email}} </td>
                        <td> {{$gaurd->Guard_Contact}}</td>
                        <td> {{$gaurd->status}}</td>
                        <td> {{$gaurd->property_id}} </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    @if($gaurd->property_id ==null)
                                    <a href="{{ URL::to('assign-property/'.$gaurd->id) }}" class="dropdown-item"
                                        type="button">Assign Property </a>
                                    @endif
                                    <a href="callout/{{$gaurd->id}}/edit" class="dropdown-item" type="button">Edit
                                        Callout </a>
                                    <form action="{{ url('callout' , $gaurd->id ) }} " method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="dropdown-item">Delete Callout</button>
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


@endsection