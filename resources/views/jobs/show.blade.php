@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/showjob.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Job Details</span>
    </div>
    <div class="p-3">
        <div id="myform" class="row addform ">
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="row">
                    <div class="my-3 col-lg-12 mt-4">
                        <div class="d-flex justify-content-between">
                            <h2 class="Certificate">Job Details</h2>
                            <div>
                                <div class="btn btn-38BF67 btn-sm"><a title="edit job"
                                        href="{{ url('jobs/'.$job->id.'/edit') }}">Edit Jobs</a></div>
                                <div class="btn btn-21C5DB btn-sm">
                                    <a title="edit job" href="{{URL('landlord-approval/'.$job->id) }}">Landlord
                                        Approval</a>
                                </div>
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
                        <p class="text-title">Property Address: <span>{{$property->first_line_address}}
                                {{$property->second_line_address}}</span> </p>
                        <p class="text-title">Reported By: <span> Nill</span> </p>
                        <p class="text-title">Severity: <span> {{$job->severity}}</span> </p>
                        <p class="text-title">Assignment: <span> 100070</span> </p>
                        <p class="text-title">Description: <span> {{$job->description}}</span> </p>
                        <p class="text-title">Landloard Approvel: <span> {{$job->landloard_approvel}}</span> </p>
                    </div>
                    <div class="my-3 col-lg-12 px-5  ">
                        <div class="attachment">
                            <img src="{{URL($job->attachment)}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12 my-3">
                        <label for="">Notes</label>
                        <ul>
                            @foreach($notes as $note)
                            <li>
                                {{$note->note}}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <form id="jobnote" class="w-100">
                        @csrf
                        <div class="col-lg-12 my-3">
                            <input id="note" name="note" type="text" class="form-control" required placeholder="Text Message" />
                        </div>
                        <div class="col-12 text-right  mt-5">
                            <button id="formbtn" type="submit" class="btn btn-info success btn-sm  px-4">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
    $('#jobnote').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        var note = $('#note').val();
        $.ajax({
            url: "{{URL('job-notes/'.$job->id) }}",
            data: $('#jobnote').serialize(),
            type: 'POST',
            error: function (request, status, error) {
                toastr.warning(request.responseText);
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('add');
            },
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#jobnote')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                $("ul").append("<li>" + note + "</li>");
                toastr.success(result.result);
            }
        })
    })

</script>



@endsection