@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span class="span">&nbsp;&nbsp; Add Callout</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="row ">
                <div class="col-lg-6 offset-lg-3  px-lg-5 p-4  ">
                    <div class="row customshadow p-4">
                        <div class="my-3 col-lg-12">
                            <h3 class="Certificate">Enter Callout Details</h3>
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" name="Guard_Name" id="" required
                                placeholder="Full Name *" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="tel" class="form-control" name="Guard_Contact" required placeholder="Contact number " />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" name="Guard_Email"  required placeholder="Email address *" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <textarea class="form-control" name="Notes" rows="5">Notes</textarea>
                        </div>
                        <div class="col-lg-12 my-3 text-center ">
                            <button class="btn btn-suc px-5" type="submit" name="submit" id="formbtn">Save</button>
                        </div>
                    </div>
                </div>
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
            url: "{{URL('callout')}}",
            data: $('#myform').serialize(),
            type: 'POST',
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
                toastr.success(result.result);
                location.replace('/callout');
            }
        })
    })
</script>

@endsection