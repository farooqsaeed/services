@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Add Tenant</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h2 class="Certificate">Enter Tenant Details</h2>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">First Name *</label>
                        <input type="text" class="form-control" name="first_name" id="" required placeholder="Enter First Name *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Last Name *</label>
                        <input type="text" class="form-control" name="last_name" id="" required placeholder="Enter Last Name *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Mobile No*</label>
                        <input type="text" class="form-control" name="mobile_no" id="" required placeholder="Enter Contact number " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Email *</label>
                        <input type="text" class="form-control" name="email" id=""
                        required placeholder="Enter Email address *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">House No*</label>
                        <input type="text" class="form-control" name="house_no" id="" required placeholder="Enter House Number" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Street Name *</label>
                        <input type="text" class="form-control" name="street_name" id="" required placeholder="Enter Street Name*" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Town *</label>
                        <input type="text" class="form-control" name="town" id="" required  placeholder="Enter Town Name" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Post Code *</label>
                        <input type="text" class="form-control" name="postal_code" id="" required  placeholder="Enter Post Code*" />
                        <input type="hidden" class="form-control" name="isMobile" value="0" id="" />
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
                <button class="btn btn-green btn-block" type="submit" name="submit" id="formbtn" value="Add">Save</button>
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
            url: "{{URL('tenant')}}",
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
                window.location = result.url;

            }
        })
    })

</script>




@endsection