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

    #deleteallselected {
        display: none;
    }

    .clickable {
        cursor: pointer;
    }

    .btn-suc {
        background-color: #38BF67;
        color: white;
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
                        <div class="notification align-self-center">
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
            <table id="contractor" class="table border  display" style="width:100%">
                <div class="addbtn">
                    <a href="{{URL('contractors/create')}}"><button class="btn btn-suc  btn-sm">Add
                            Contractor</button></a>
                    <button id="deleteallselected" type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="chkcheckall" />
                        </th>
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
                        <td><input class="checkboxclass" type="checkbox" name="ids" id="ids"
                                value=" {{$contractor->id}} ">
                        </td>
                        <td data-url="{{url('contractors/'.$contractor->id)}}" class="clickable text-capitalize">
                            {{$contractor->status}}</td>
                        <td data-url="{{url('contractors/'.$contractor->id)}}" class="clickable text-capitalize">
                            {{$contractor->business_name}}</td>
                        <td data-url="{{url('contractors/'.$contractor->id)}}" class="clickable text-capitalize">
                            {{$contractor->first_name}}</td>
                        <td data-url="{{url('contractors/'.$contractor->id)}}" class="clickable text-capitalize">
                            {{$contractor->area_of_coverage}}</td>
                        <td data-url="{{url('contractors/'.$contractor->id)}}" class="clickable text-capitalize">
                            @if($contractor->mobile_no==1)
                            App user
                            @else
                            Non App user
                            @endif</td>
                        <td data-url="{{url('contractors/'.$contractor->id)}}" class="clickable text-capitalize">
                            {{$contractor->mobile_no}}
                        </td>
                        <td>
                            <div class="dropdown open">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="triggerId"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select
                                </button>
                                <div class="dropdown-menu ml-n5" aria-labelledby="triggerId">

                                    <form action="{{URL('contractors/'. $contractor->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="dropdown-item" type="submit">Delete</button>
                                    </form>
                                    <a class="dropdown-item" href="contractors/{{$contractor->id}}/edit">Edit </a>
                                    <button type="button" data-toggle="modal" data-target="#modelId"
                                        class="dropdown-item status_update" value="{{$contractor->id}}">Update Status
                                    </button>
                                    <a href="{{URL('assign-job/'.$contractor->id)}}">
                                        <button class="dropdown-item">Assign
                                            Job</button>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-12">
            <!-- Button trigger modal -->
            <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Change Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="statusform" action="" method="post">
                            @csrf
                            @method('PUT')
                            <div class="modal-body">
                                <select name="status" id="" class="form-control">
                                    <option>select</option>
                                    <option value="active">Active</option>
                                    <option value="pending">Pending</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn success text-white">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- end table -->
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    var nn = 'contractor';
    $(".status_update").click(function () {
        nn = $(".status_update").val();
        $('#statusform').attr('action', 'update-status/' + nn);
        var m = $('#statusform').attr('action');
    });
</script>

<!-- clickable row -->
<script>
    $(function () {
        $('#contractor').on("click", ".clickable", function () {
            window.location = $(this).data("url");
        });
    });
</script>

<!-- multiple selection for delete -->
<script>
    $(function (e) {
        $("#chkcheckall").click(function () {
            $(".checkboxclass").prop('checked', $(this).prop('checked'));
        });

        $('.checkboxclass').change(function () {
            $('#deleteallselected').toggle($('.checkboxclass:checked').length > 0);
        });

        $('#chkcheckall').change(function () {
            $('#deleteallselected').toggle($('.checkboxclass:checked').length > 0);
        });

        $("#deleteallselected").click(function (e) {
            e.preventDefault();
            var allids = [];
            $("input:checkbox[name=ids]:checked").each(function () {
                $('#deleteallselected').show();
                allids.push($(this).val());
            });

            $.ajax({
                url: "{{ url('delete-contractors') }}",
                type: "DELETE",
                data: {
                    _token: $("input[name=_token]").val(),
                    ids: allids
                },
                error: function (request, status, error) {
                    alert(request.responseText);
                },
                success: function (response) {
                    $.each(allids, function (key, val) {
                        $("#sid" + val).remove;
                    })
                    location.reload();
                }
            })
        });
    })

</script>
@endsection