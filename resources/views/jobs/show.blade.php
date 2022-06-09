@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<style>
    .btn-5869C1,
    .btn-21C5DB,
    .btn-38BF67,
    .btn-warning {
        color: white;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
    }

    .btn-5869C1 {
        background-color: #5869C1;
    }

    .btn-21C5DB {
        background-color: #21C5DB;
    }

    .btn-38BF67 {
        background-color: #38BF67;
    }

    .text-title {
        color: #737475;
        font-weight: bold;
    }

    .text-title span {
        color: #737475;
        font-size: 14px;
        font-weight: 100 !important;
    }
    .attachment{
        border: 1px solid black;
        border-radius: 5px;
        padding: 100px;
    }
    label{
        font-weight: bold;
        color: #737475;
        font-family: Arial, Helvetica, sans-serif;
    }
    .addform a{
        text-decoration: none;
        color: white;
    }
</style>

<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Job Details</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="row">
                    <div class="my-3 col-lg-12 mt-4">
                        <div class="d-flex justify-content-between">
                            <h2 class="Certificate">Job Details</h2>
                            <div>
                                <div class="btn btn-38BF67 btn-sm"><a title="edit job" href="{{ url('jobs/'.$job->id.'/edit') }}">Edit Jobs</a></div>
                                <div class="btn btn-21C5DB btn-sm">
                                    <a title="edit job" href="{{URL('landlord-approval/'.$job->id) }}">Landlord Approval</a></div>
                                <div class="btn btn-5869C1 btn-sm">Get Quote</div>
                                <div class="btn btn-warning btn-sm">Assign Engineer</div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-lg-6">
                        <p class="text-title">Case Number: <span> {{$job->case_no}}</span> </p>
                        <p class="text-title">Time: <span> {{$job->job_time}}</span> </p>
                        <p class="text-title">Date: <span> {{$job->job_date}}</span> </p>
                        <p class="text-title">Status: <span> {{$job->status}}</span> </p>
                        <p class="text-title">Reported Issue: <span> Unknow</span> </p>
                        <p class="text-title">Attachment: </p>
                    </div>
                    <div class="my-3 col-lg-6">
                        <p class="text-title">Property Address: <span>{{$property->first_line_address}} {{$property->second_line_address}}</span> </p>
                        <p class="text-title">Reported By: <span> Nill</span> </p>
                        <p class="text-title">Severity: <span> {{$job->severity}}</span> </p>
                        <p class="text-title">Assignment: <span> 100070</span> </p>
                        <p class="text-title">Description: <span> {{$job->description}}</span> </p>
                        <p class="text-title">Landloard Approvel: <span> {{$job->landloard_approvel}}</span> </p>
                    </div>
                    <div class="my-3 col-lg-12 px-5  ">
                        <div class="attachment"></div>
                    </div>
                    <div class="col-lg-12 my-3">
                        <label for="">Note</label>
                        <input type="text" class="form-control mt-5" placeholder="Text Message"
                         />
                    </div>
                    <div class="col-12 text-right  mt-5">
                        <button class="btn btn-info success btn-sm  px-4">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $('#gridCheck1').on('click', function () {
        var is_checked = $(this).is(':checked');
        if (is_checked) {
            $('#Businessman').show();
        }
        else {
            $('#Businessman').hide();
        }
    });
</script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ajax submition -->
<script>
    $(' myform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{URL('contractors')}}",
            data: $('#myform').serialize(),
            type: 'POST',
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#myform')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
            }
        })
    })

</script>



@endsection