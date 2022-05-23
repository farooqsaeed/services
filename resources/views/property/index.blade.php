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
        color: white;
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
                                            <!-- <li><a tabindex="-1" href="#">Group A1</a></li> -->
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
            <table id="property" class="table table-striped table-bordered display" style="width:100%">
                <a href="{{URL('property/create')}}"><button class="btn btn-success float-right postion-relative btn-sm">Add
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <tr>
                        <td>Peshawar KP Pakistan</td>
                        <td>Mardan</td>
                        <td> 0000</td>
                        <td> 8</td>
                        <td>Active</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                </tbody>
            </table>
        </div>
    </div>
</div>

<script rel="script" src="{{URL::asset('assets/js/calender.js')}}">
</script>

<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>

@endsection