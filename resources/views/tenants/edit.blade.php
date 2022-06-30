@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp;  Edit Tenant</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h3 class="Certificate">Edit Tenant Details</h3>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">First Name *</label>
                        <input type="text" class="form-control" name="first_name" id="" value="{{$tenant->first_name}}" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Last Name *</label>
                        <input type="text" class="form-control" name="last_name" id=""  value="{{$tenant->last_name}}" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Mobile No*</label>
                        <input type="text" class="form-control" name="mobile_no" id="" value="{{$tenant->mobile_no}}" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Email *</label>
                        <input type="text" class="form-control" name="email" id="" value="{{$tenant->email}}"/>
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
            url: "{{URL('tenant/'.$tenant->id)}}",
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
                $('#formbtn').text('Update');
                toastr.success(result.result);
                location.replace('/tenant');
             }
        })
    })

</script>




@endsection