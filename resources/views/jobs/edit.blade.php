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
        <form id="myform" class="row addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h3 class="Certificate">Update Job Details</h3>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Address *</label>
                        <input type="text" class="form-control" value="{{$job->address}}" name="address" id=""
                            placeholder="line Address *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Tenant Name *</label>
                        <input type="text" class="form-control" name="tenant_name" id="" value="{{$job->tenant_name}}"
                            placeholder="Enter Tenant Name" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Contact *</label>
                        <input type="text" class="form-control" name="contact" id="" placeholder="Enter Contact *"
                            value="{{$job->contact}}" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Description *</label>
                        <input type="text" class="form-control" name="description" id=""
                            placeholder="Enter  Text Message" value="{{$job->description}}" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Subject </label>
                        <input type="text" class="form-control" name="subject" id="" placeholder="Enter  Subject"
                            value="{{$job->subject}}" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <div class="text-right">
                            <button class="btn btn-info success btn-sm">Add Another</button>
                        </div>
                    </div>
                    <div class="col-4 offset-4  mt-5">
                        <button class="btn btn-info success btn-block ">Update</button>
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