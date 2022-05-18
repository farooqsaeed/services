@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{URL::asset('assets/css/plumbers.css')}}">


<style>

</style>
<div class="container-fluid">
    <div class="row Contractor_header p-0">
        <div class="col-lg-12 p-0">
            <div class="add  mt-0 p-3">
                <span>
                    <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
                </span>
                <span>Contractor</span>
            </div>
        </div>
    </div>
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
            <div class="card py-0 my-0 border-0 BreadCrumb_card">
                <div class="card-body py-0 my-0 border-bottom mb-3">
                    <p class="d-flex  justify-content-between mt-5 mb-0 ">
                    <div class="card-text p-0   mt-0">
                        <ol class="breadcrumb bg-white collapse show">
                            <li class="breadcrumb-item">
                                <a href="#!">Home</a>
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Contractors
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Plumber
                            </li>
                        </ol>
                    </div>
                    <div class="notification">
                        <div class=" mt-n1" id="collapseExample" role="button">
                            <i id="hideable" class="fa fa-chevron-up " aria-hidden="true"></i>
                        </div>
                        <div id="removeexampletable" class="fa fa-times ml-3"></div>
                    </div>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-12 example_col">
            <table id="plumber" class="table table-striped table-bordered display" style="width:100%">
                <a href="{{URL('contractors/create')}}"><button class="btn btn-success float-right success btn-sm">Add  Contractor</button></a>
                <thead>
                    <tr>
                        <th>Status</th>
                        <th>Business Name</th>
                        <th>Contractor Name</th>
                        <th>Coverage Area/Group</th>
                        <th>Working Hours</th>
                        <th>User</th>
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
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                        <td>2011/04/25</td>
                        <td>{{$contractor->mobile_no}}</td>
                        <td>
                            <div class="dropdown open">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="triggerId"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select
                                </button>
                                <div class="dropdown-menu ml-n5" aria-labelledby="triggerId">
                                    <button class="dropdown-item" href="#">Action</button>
                                    <button class="dropdown-item disabled" href="#">Disabled action</button>
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

@endsection