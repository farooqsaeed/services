@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span class="span">&nbsp;&nbsp; Edit Callout</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h2 class="Certificate">Edit Callout Details</h2>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor=""> Name *</label>
                        <input type="text" class="form-control" name="Guard_Name" id=""
                         value="{{$callout->Guard_Name}}"   placeholder="Enter Full Name *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Mobile No*</label>
                        <input type="tel" class="form-control" name="Guard_Contact" id="" value="{{$callout->Guard_Contact}}"
                            placeholder="Enter Contact number " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Email *</label>
                        <input type="text" class="form-control" name="Guard_Email" id=""
                          value="{{$callout->Guard_Email}}"  placeholder="Enter Email address *" />
                    </div>

                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Notes</label>
                        <input type="text" class="form-control" name="Notes" id="" value="{{$callout->Notes}}"  placeholder="Enter Notes" />
                    </div>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
                <div class="alert alert-success alert-dismissible fade show " id="msgdiv" role="alert"
                    style="display: none;">
                    <span id="message"></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="col-lg-4   text-center offset-lg-4 p-0">
                <button class="btn btn-green btn-block" type="submit" name="submit" id="formbtn"
                    value="Add">Update</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ajax submition -->
<script>
    $('#myform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{URL('callout/'.$callout->id)}}",
            data: $('#myform').serialize(),
            type: 'PUT',
            error: function (request, status, error) {
                toastr.warning(request.responseText);
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Update');
            },
            success: function (result) {
                // $('#message').html(result.result);
                // $("#msgdiv").css({ display: "block" });
                $('#myform')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                location.replace('/callout');
                toastr.success(result.result);
            }
        })
    })
</script>

@endsection