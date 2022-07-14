@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp;&nbsp; Update Jobs</span>
    </div>
    <div class="p-3">
        <form id="myform" class=" addform">
            @csrf
            <div class="row">
                <!-- {/* Property Details */} -->
                <div class="col-lg-6 offset-lg-3  p-lg-5 p-4  ">
                    <div class="row customshadow p-4 ">
                        <div class="my-3 col-lg-12">
                            <h3 class="Certificate mb-0">Update Job Details</h3>
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" value="{{$job->address}}" name="address"
                                placeholder="Address *" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" name="tenant_name" value="{{$job->tenant_name}}"
                                placeholder="Tenant Name" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" name="contact" placeholder="Contact no *"
                                value="{{$job->contact}}" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" name="description" placeholder="Enter  Text Message"
                                value="{{$job->description}}" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" name="subject" placeholder="Enter  Subject"
                                value="{{$job->subject}}" />
                        </div>
                        <div class="my-3 col-lg-12 text-center">
                            <button class="btn btn-info success px-4">Update</button>
                        </div>
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
    $('#myform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{URL('jobs/'.$job->id)}}",
            data: $('#myform').serialize(),
            type: 'PUT',
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#myform')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('update');
                toastr.success(result.result);
                window.location.replace("/jobs");
            }
        })
    })
</script>



@endsection