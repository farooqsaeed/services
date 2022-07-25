@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/assignengineer.css')}}">



<style>
    #engineer_response tr td img {
        width: 20px;
    }
</style>

<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp;&nbsp;Engineer Response</span>
    </div>
    <div class="p-3">
        <form id="engineer_response" action="{{route('store.get.quote')}}" method="post" class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-12 px-lg-5 p-4">
                <div class="row shadow rounded p-4">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Contractor name</th>
                                <th>Date time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{URL::asset('assets/imgs/icons/mobileon.png')}}" alt=""></td>
                                <td scope="row">
                                    <small class="bg-success text-white">P1</small> &nbsp;&nbsp;
                                    Muneer Ahmad
                                </td>
                                <td>02 Sep 2022 02:30</td>
                                <td>
                                    <span class="badge badge-info ">Requested</span>

                                </td>
                            </tr>

                            <tr>
                                <td><img src="{{URL::asset('assets/imgs/icons/mobileoff.png')}}" alt=""></td>
                                <td scope="row">

                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    Muneer Ahmad</td>
                                <td>02 Sep 2022 02:30</td>
                                <td>
                                    <span class="badge badge-primary"> Received </span>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{URL::asset('assets/imgs/icons/mobileon.png')}}" alt=""></td>
                                <td scope="row">

                                    &nbsp;&nbsp;&nbsp;&nbsp;Muneer Ahmad</td>
                                <td>02 Sep 2022 02:30</td>
                                <td>
                                    <span class="badge badge-danger">Decline</span>
                                </td>
                            </tr>
                            <tr>
                                <td><img src="{{URL::asset('assets/imgs/icons/mobileoff.png')}}" alt=""></td>
                                <td scope="row">
                                    <small class="bg-success text-white">P1</small> &nbsp;&nbsp;Muneer Ahmad
                                </td>
                                <td>02 Sep 2022 02:30</td>
                                <td>
                                    <span class="badge badge-success">Accepted</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- 2nd column -->
            <div class="col-lg-10 offset-lg-1">
                <div class=" ">
                    <div class="card-body">
                        <h5 class="card-title" style="color: gray;">Response:</h5>
                        <div class="px-3">
                            <div class="card-text">
                                <h6 class="d-inline-block">Contractor name:</h6>
                                &nbsp;&nbsp;&nbsp; <p class="d-inline-block">Akbar</p>
                                <p class="d-inline-block">P1</p>
                            </div>

                            <div class="card-text">
                                <h6 class="d-inline-block">Date time:</h6>
                                &nbsp;&nbsp;&nbsp;<p class="d-inline-block">02 Sep 2022</p>
                                <p class="d-inline-block">02:30</p>
                            </div>

                            <div class="card-text">
                                <h6 class="d-inline-block">Status:</h6>
                                &nbsp;&nbsp;&nbsp;<p class="badge badge-success d-inline-block">Accepted</p>
                            </div>

                            <div class="card-text">
                                <h6 class="  d-inline-block">Description:</h6> <br>
                                <article class="d-inline-block">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Mollitia veniam, doloribus repudiandae neque consequuntur sed! Labore nostrum
                                    dolores
                                    tenetur consequuntur quas dicta, aliquid iusto ipsa officiis. Explicabo nihil
                                    dolorem
                                    debitis.</article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- buttons -->
            <div class="col-lg-10 offset-lg-1">
                <div class="d-flex justify-content-around">
                    <div class="btn btn-outline-danger w-25">Decline</div>
                    <div class="btn btn-outline-secondary w-25">Cancel</div>
                    <div class="btn btn-suc w-25">Assign</div>
                </div>
            </div>
        </form>
    </div>

</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


@endsection