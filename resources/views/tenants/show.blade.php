@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/tenant.css')}}">

 
<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Tenant Details</span>
    </div>
    <div class="p-3">
        <!-- {/* tenant Details */} -->
        <div class="col-lg-10 offset-lg-1  ">
            <div class="mt-5">
                <h2 class="Certificate"> Tenant Details</h2>
            </div>
            <div class="row">
                <div class=" col-6">
                    <span>
                        <label htmlFor="">First Name:</label>
                        <span class="info">&nbsp; {{$tenant->first_name}}</span>
                    </span>
                </div>
                <div class="  col-6">
                    <span>
                        <label htmlFor="">Last Name:</label>
                        <span class="info">&nbsp; {{$tenant->last_name}}</span>
                    </span>
                </div>
                <div class="mb-3  col-6">
                    <span>
                        <label htmlFor="">Contact:</label>
                        <span class="info">&nbsp; {{$tenant->mobile_no}}</span>
                    </span>
                </div>
                <div class="mb-3 col-6">
                    <span>
                        <label htmlFor="">Email:</label>
                        <span class="info">&nbsp; {{$tenant->email}}</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3">
        <!-- {/* property Details */} -->
        <div class="col-lg-10 offset-lg-1  ">
            <div class=" ">
                <h2 class="Certificate"> Properties</h2>
            </div>
            <div class="row">
                <div class=" col-12">
                    <table id="tenant_property" class="table table-striped table-bordered display text-center" style="width:100%">
                        <a class="d-none" href="{{URL('property/create')}}"><button
                                class="btn btn-success float-right btn-sm">Add
                                Property</button></a>
                        <thead class="thead-dark">
                            <tr>
                                <th>First line of address</th>
                                <th>Town</th>
                                <th>Postcode</th>
                                <th>Duration</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tenant_property as $items)
                            <tr>
                                <td> {{$items->detail->first_line_address}} </td>
                                <td>{{$items->detail->Town}}</td>
                                <td>{{$items->detail->Postcode}}</td>
                                <td> 8</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Select
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <button class="dropdown-item" type="button">Action</button>
                                            <button class="dropdown-item" type="button">Another action</button>
                                            <button class="dropdown-item" type="button">Something else here</button>
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
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


@endsection