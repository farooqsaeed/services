@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/jobs.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/group.css')}}">


<style>
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

    .btn-outline-success {
        border: none;
        color: #407C1E;
        border: 1px solid #407C1E;
    }

    .btn-outline-success:hover {
        background-color: #407C1E;
    }
</style>

<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0">
            <div class=" Header d-none  d-sm-block">
                <div class="row  ">
                    <div class="col-lg-3  ">
                        <h2>Map View</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
            <div class="card py-0 my-0 border-0  BreadCrumb_card">
                <div class="card-body py-0 my-0">
                    <div class="d-flex justify-content-between my-0 align-self-center">
                        <span class="card-title my-0">Groups</span>
                        <div class="notification mt-3">
                            @include('../layouts/header')
                        </div>
                    </div>
                    <div class="card-text p-0 mb-0 mt-0">
                        <ol class="breadcrumb bg-white">
                            <li class="breadcrumb-item ml-n3">
                                <a href='/'>Home </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href='/groups'>Groups </a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11  text-right">
            <a href="{{URL('groups/create')}}"><button class="btn btn-outline-success btn-sm"> Add Group</button></a>
        </div>
    </div>
    <div class="row mt-4">
        @if(!$Groups->isEmpty())
        @foreach($Groups as $key => $Group )
        <div class="col-lg-10 col-md-10 col-sm-12 my-4 col-xs-12 offset-lg-1 offset-md-1 offset-sm-1 pl-1 pt-0">
            <div id="gp{{$key}}" class="cards d-flex justify-content-between align-self-center ">
                <div>
                    <h5 class="mb-0 pb-0">&nbsp;&nbsp;{{$Group->Group_Name}}</h5>
                </div>
                <div class="d-flex justify-content-between align-self-center">
                    <a href="add-subgroups/{{$Group->id}}">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                    <a href="groups/{{$Group->id}}/edit">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                    <form action="{{ url('groups' , $Group->id ) }}" class="text-center" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="p-0 m-0 text-center">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
            @if($Group->subgroup !=null)
            @if($Group->Group_ID===$Group->subgroup->group_id)
            <div class="row mt-3 mygroup">
                <div class="col-10 offset-2">
                    <div class="subgroup d-flex justify-content-between align-self-center ">
                        <div>
                            <h5 class="mb-0 pb-0">&nbsp;&nbsp;{{$Group->subgroup->Sub_Group_Name}}</h5>
                        </div>
                        <div class="d-flex justify-content-between align-self-center">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-10 offset-2">
                            <div class="subgroup d-flex justify-content-between align-self-center ">
                                <div>
                                    <h5 class="mb-0 pb-0">&nbsp;&nbsp; Group A-1.1</h5>
                                </div>
                                <div class="d-flex justify-content-between align-self-center">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endif
            @endif
        </div>
        @endforeach
        @else
        <div class="col-lg-10 col-md-10 col-sm-12 my-4 col-xs-12 offset-lg-1 offset-md-1 offset-sm-1 p-4 text-center">
            <h3>Sorry no group avalible Please add the groups</h3>
        </div>
        @endif
    </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>


<script>
    $(document).ready(function () {
        $('#gp0').on("click", function (e) {
            $('.mygroup').toggle();
        });
    });
</script>

@endsection