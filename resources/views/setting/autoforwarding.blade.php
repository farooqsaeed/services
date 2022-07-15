@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">


<div class="container-fluid addcontractor autoforwarding  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp; Auto Forwarding</span>
    </div>
    <div class="row p-4">
        <div class="col-lg-12">
            <div class="card-deck">
                <div class="card customshadow">
                    <div class="card-body px-5">
                        <h4 class="card-title d-inline-block">Landlord Approvals</h4>
                        <span class="d-inline-block float-right">
                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </span>
                        <br> <br>
                        <form>
                            <select name="" id="" class="form-control my-3">
                                <option value="">Target Group</option>
                                <option value="">Target Group</option>
                                <option value="">Target Group</option>
                            </select>
                            <select name="" id="" class="form-control my-2">
                                <option>Forward</option>
                                <option value="">Target Group</option>
                                <option value="">Target Group</option>
                            </select>
                            <select name="" id="" class="form-control my-3">
                                <option>Recipient</option>
                                <option value="">Target Group</option>
                                <option value="">Target Group</option>
                            </select>
                            <select name="" id="" class="form-control my-3">
                                <option>Delivery Method</option>
                                <option value="">Target Group</option>
                                <option value="">Target Group</option>
                            </select>
                            <br> <br> <br>
                            <div class="btn btn-suc btn-block mt-2">Save</div>
                        </form>
                    </div>
                </div>
                <div class="card customshadow">
                    <div class="card-body px-5">
                        <h4 class="card-title d-inline-block">Forward to Contractor</h4>
                        <span class="d-inline-block float-right">
                            <i class="fa fa-ellipsis-v  " aria-hidden="true"></i>
                        </span>
                        <br> <br>
                        <form>
                            <select name="" id="" class="form-control my-3">
                                <option>Target Group</option>
                                <option value="">Target Group</option>
                                <option value="">Target Group</option>
                            </select>
                            <select name="" id="" class="form-control my-2">
                                <option>Job Type</option>
                                <option value="">Target Group</option>
                                <option value="">Target Group</option>
                            </select>
                            <select name="" id="" class="form-control my-3">
                                <option>Forward Jobs to (Select Contractor)</option>
                                <option value="">Target Group</option>
                                <option value="">Target Group</option>
                            </select>
                            <select name="" id="" class="form-control my-3">
                                <option>Select day range or duration</option>
                                <option value="">Target Group</option>
                                <option value="">Target Group</option>
                            </select>
                            <select name="" id="" class="form-control my-3">
                                <option>Select Time duration</option>
                                <option value="">Target Group</option>
                                <option value="">Target Group</option>
                            </select>
                            <br>
                            <div class="btn btn-suc btn-block ">Save</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-5 px-4">
            <h4 class="card-title">Landlord Approvals</h4>
            <table class="table customshadow">
                <thead>
                    <tr>
                        <th>No#</th>
                        <th>Target Group</th>
                        <th>Action
                        </th>
                        <th>Recipient</th>
                        <th>Delivery Method</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>All</td>
                        <td>All Reported issue</td>
                        <td>All</td>
                        <td>Email</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Group A, Group B</td>
                        <td>All Reported issue</td>
                        <td>Primary Contact</td>
                        <td>Text Message</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-12 mt-5 px-4">
            <h4 class="card-title">Forward to Contractor</h4>
            <table class="table customshadow">
                <thead>
                    <tr>
                        <th>No#</th>
                        <th>Target Group</th>
                        <th>Job Type</th>
                        <th>Action</th>
                        <th>Day</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>All</td>
                        <td>All</td>
                        <td>App Notification</td>
                        <td>Every Day</td>
                        <td>24/7</td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>Group A, Group B</td>
                        <td>Boiler</td>
                        <td>All Reported issue</td>
                        <td>Text Message</td>
                        <td>06am -08 pm </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@endsection