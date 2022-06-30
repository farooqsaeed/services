@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/contractor.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp; Contractor Details</span>
    </div>
    <div class="">
        <!-- {/* contractor Details */} -->
        <div class="col-lg-10 offset-lg-1">
            <div class="mt-5">
                <h2 class="Certificate"> Contractor Details</h2>
            </div>
            <div class="row p-3">
                <div class="col-6">
                    <span>
                        <label htmlFor="">Business Name:</label>
                        <span class="info">&nbsp; {{$contractor->business_name}}</span>
                    </span>
                </div>
                <div class=" col-6">
                    <span>
                        <label htmlFor="">Full Name:</label>
                        <span class="info">&nbsp; {{$contractor->first_name}} {{$contractor->last_name}}</span>
                    </span>
                </div>
                <div class=" col-6">
                    <span>
                        <label htmlFor="">Contact:</label>
                        <span class="info">&nbsp; {{$contractor->mobile_no}}</span>
                    </span>
                </div>
                <div class=" col-6">
                    <span>
                        <label htmlFor="">Email:</label>
                        <span class="info">&nbsp; {{$contractor->email}}</span>
                    </span>
                </div>
                <div class=" col-6">
                    <span>
                        <label htmlFor="">Landline No:</label>
                        <span class="info">&nbsp; {{$contractor->landline_no}}</span>
                    </span>
                </div>
                <div class=" col-6">
                    <span>
                        <label htmlFor="">Communication:</label>
                        <span class="info">&nbsp; {{$contractor->preferred_communication}}</span>
                    </span>
                </div>
                <div class=" col-6">
                    <span>
                        <label htmlFor="">Area of Coverage:</label>
                        <span class="info  text-capitalize">&nbsp; {{$contractor->area_of_coverage}}</span>
                    </span>
                </div>
                <div class=" col-6">
                    <span>
                        <label htmlFor="">Rate:</label>
                        <span class="info">&nbsp; {{$contractor->rate_option}}</span>
                    </span>
                </div>

                 
                <div class=" col-6">
                    <span>
                        <label htmlFor="">Recommendation:</label>
                        <span class="info  text-capitalize">&nbsp; {{$contractor->Recommendation}}</span>
                    </span>
                </div>
                <div class=" col-6">
                    <span>
                        <label htmlFor="">notes:</label>
                        <span class="info">&nbsp; {{$contractor->notes}}</span>
                    </span>
                </div>
                <div class=" col-6">
                    <span>
                        <label htmlFor="">Status:</label>
                        <span class="badge badge-pill badge-primary info  text-capitalize">&nbsp; {{$contractor->status}}</span>
                    </span>
                </div>
                <div class=" col-6">
                    <span>
                        <label htmlFor="">Approved by:</label>
                        <span class="info  text-capitalize">&nbsp; {{$contractor->approved_by}}</span>
                    </span>
                </div>
            </div>
        </div>

        <div class="col-lg-10 offset-lg-1  ">
            <div class=" ">
                <h2 class="Certificate"> Job</h2>
            </div>
            <div class="row p-3">
                <div class="col-12">
                    <table id="contractor_job" class="table table-striped table-bordered display text-center"
                        style="width:100%">
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
                                        <button class="btn btn-white btn-sm dropdown-toggle" type="button" id="dropdownMenu2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Select
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                            <form action="/delete-property/{{$items->detail->property_id}}" method="post">
                                                @csrf
                                                @method('Delete')
                                                <button type="submit" class="dropdown-item" type="button">Remove</button>
                                            </form>
        
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