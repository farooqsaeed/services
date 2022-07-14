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
        <form id="myform" class="addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="row">
                <div class="col-lg-6 offset-lg-3  px-lg-5 p-4">
                    <div class="row customshadow p-4">
                        <div class="my-3 col-lg-12">
                            <h2 class="Certificate">Edit Callout Details</h2>
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" name="Guard_Name" value="{{$callout->Guard_Name}}"
                                placeholder="Full Name *" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="tel" class="form-control" name="Guard_Contact"
                                value="{{$callout->Guard_Contact}}" placeholder="Contact number " />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" name="Guard_Email" value="{{$callout->Guard_Email}}" placeholder="Email address *" />
                        </div>
                        <div class="my-3 col-lg-12">
                             <input type="text" class="form-control" name="Notes" value="{{$callout->Notes}}" placeholder="Notes" />
                        </div>
                        <div class="my-3 col-lg-12 text-center">
                            <button class="btn bg-success px-4" type="submit" name="submit" id="formbtn" value="Add">Update</button>
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