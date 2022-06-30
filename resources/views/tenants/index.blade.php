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

    #deleteallselected {
        display: none;
    }
    .clickable{
        cursor: pointer;
    }

    .btn-suc{
        background-color: rgba(56, 191, 103, 1);
        color: white;
    }
    #tenant th{
        border: none;
    }
    #tenant_paginate .page-item.active .page-link {
        background-color: white;
        color: #407C1E;
        border: 1px solid #407C1E;
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
                            Tenant</span>
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
                    <div class="d-flex justify-content-between mt-5 mb-0 ">
                        <div class="  card-text  ">
                            <ol class="breadcrumb bg-white ml-lg-3 collapse show">
                                <li class="breadcrumb-item">
                                    <a href="#!">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">
                                    Tenants
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
            <table id="tenant" class="table  border  display text-lg-center" style="width:100%">
                <div class="addbtn">
                    <a href="tenant/create" class="btn btn-suc  btn-sm"> Add
                        Tenant </a>
                    <button id="deleteallselected" type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="chkcheckall" />
                        </th>
                        <th class="d-none"></th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tenants as $tenant)
                    <tr>
                        <td><input class="checkboxclass" type="checkbox" name="ids" id="ids" value=" {{$tenant->id}} ">
                        </td>
                        <td class="d-none">{{$tenant->id}}</td>
                        <td class="clickable" data-url="{{url('tenant/'.$tenant->id)}}">{{$tenant->first_name}}</td>
                        <td class="clickable" data-url="{{url('tenant/'.$tenant->id)}}">{{$tenant->last_name}}</td>
                        <td class="clickable" data-url="{{url('tenant/'.$tenant->id)}}">{{$tenant->mobile_no}}</td>
                        <td class="clickable" data-url="{{url('tenant/'.$tenant->id)}}">{{$tenant->email}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <a href="{{ URL::to('tenant/' . $tenant->id) }}" class="dropdown-item"
                                        type="button">
                                        Tenant Details
                                    </a>
                                    <a href="{{ URL::to('add-tproperty/' . $tenant->id) }}
                                    " class="dropdown-item" type="button">Assign Property </a>
                                    <a href="tenant/{{$tenant->id}}/edit" class="dropdown-item" type="button">Edit
                                        Tenant </a>
                                    <form action="{{ url('tenant' , $tenant->id ) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="dropdown-item">Delete Tenant</button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- clickable row -->
<script>
    $(function () {
        $('#tenant').on("click", ".clickable", function () {
            window.location = $(this).data("url");
        });
    });
</script>

<script>
    // multiple selection for delete
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
                url: "{{ url('delete-tenants') }}",
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