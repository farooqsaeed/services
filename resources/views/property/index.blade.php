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
        background: transparent url('img/Rectangle 1522.png') 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 6px #00000029;
        border: 2px solid #737475 !important;
        border-radius: 10px;
        opacity: 1;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #38BF67;
        color: white !important;
    }

    .addbtn {
        position: relative;
        z-index: 99;
        float: right;
    }

    tr {
        cursor: pointer;
    }

    #deleteallselected {
        display: none;
    }

    #property th {
        border: none;
    }
</style>
<div class="container-fluid">
    <div class="row bg-green">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="  py-3 my-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between align-items-center my-0 align-self-center">
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
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
            <div class="card py-0 my-0 border-0 border BreadCrumb_card">
                <div class="card-body py-0 my-0 border-bottom mb-3">
                    <div class="d-flex justify-content-between align-items-baseline mt-5 mb-0 ">
                        <div class="card-text p-0 ">
                            <ol class="breadcrumb bg-white ml-lg-2 collapse show">
                                <li class="breadcrumb-item">
                                    <a href="#!">Home</a>
                                </li>
                                <li class="breadcrumb-item" aria-current="page">Properties
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
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
            <div class="menu p-3">
                <p class="active mx-3">Active Properties</p>
                <p class="mx-2">Archive</p>
                <p>View all</p>
            </div>
        </div>
        <div class="col-lg-12 example_col">
            <table id="property" class="table border text-center display" style="width:100%">
                <div class="addbtn">
                    <a href="{{route('property.create')}}" class="btn btn-suc btn-sm"> Add Property </a>
                    <button id="deleteallselected" type="submit" class="btn btn-danger btn-sm">Delete</button>
                </div>
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" id="chkcheckall" />
                        </th>
                        <th style="display: none;"></th>
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
                    <tr>
                        <td><input class="checkboxclass" type="checkbox" name="ids" id="ids" value=" {{$item->id}} ">
                        </td>
                        <td style="display: none;"> {{ $item->id }}</td>
                        <td class="clickable" data-url="{{url('property/'.$item->id)}}">{{$item->first_line_address}}
                        </td>
                        <td class="clickable" data-url="{{url('property/'.$item->id)}}">{{$item->Town}}</td>
                        <td class="clickable" data-url="{{url('property/'.$item->id)}}"> {{$item->Postcode}}</td>
                        <td class="clickable" data-url="{{url('property/'.$item->id)}}"> 8</td>
                        <td class="clickable" data-url="{{url('property/'.$item->id)}}">
                            <div class="badge text-capitalize badge-primary">
                                {{$item->status}}
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Select
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <a href="{{url('job')}}/property" class="dropdown-item" type="button">Add New
                                        Job</a>
                                    <a href="{{ url('property/'.$item->id) }}" class="dropdown-item"
                                        type="button">Property Details</a>
                                    <a href="{{ url('property/'.$item->id.'/edit') }}" class="dropdown-item"
                                        type="button"> Edit Property </a>

                                    <button type="button" data-toggle="modal" data-target="#modelId"
                                        data-id1="{{$item->id}}" class="dropdown-item status_update"
                                        value="{{$item->id}}">Update Status
                                    </button>

                                    <!-- <form action="{{ url('property', $item->id ) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="dropdown-item">Delete </button>
                                    </form> -->

                                    <a href="#" data-id="{{$item->id}}" class="dropdown-item  delete"
                                        data-toggle="modal" data-target="#deleteModal">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-lg-12">
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
                                    <option value="suspended">Suspended</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn success text-white">update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <!-- Delete Warning Modal -->
            <div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Delete Property</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="deleteproperty" action="{{ url('property', 'id') }}" method="post">
                                @csrf
                                @method('DELETE')
                                <h5 class="text-center">Are you sure to delete this Property?</h5>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger text-white">Delete</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script rel="script" src="{{URL::asset('assets/js/calender.js')}}">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script>
    $(function () {
        $('#property').on("click", ".clickable", function () {
            window.location = $(this).data("url");
        });
    });


</script>
<!-- status -->
<script>
    $(document).on('click', '.status_update', function () {
        let id = $(this).attr('data-id1');
        $('#statusform').attr('action', 'property-status/' + id);
    });
</script>

<script>
    $(document).on('click', '.delete', function () {
        let id = $(this).attr('data-id');
        $('#deleteproperty').attr('action', 'property/' + id);
    });
</script>

<!-- delete multiple -->
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
                url: "{{ url('delete-properties') }}",
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