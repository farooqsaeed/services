@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/user.css')}}">
<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Change Password</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform ">
            @csrf
            <!-- {/* user Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h2 class="Certificate">Change Password</h2>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Old Password *</label>
                        <input type="password" class="form-control" name="old_password" required placeholder="Enter Old Password" />
                    </div>
                    <div class="  col-lg-6"></div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor=""> Password *</label>
                        <input type="password" class="form-control" name="password" required placeholder="Enter New Password " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Confirm Password *</label>
                        <input type="password" class="form-control" name="password" required placeholder="Enter New Password" />
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
            <div class="col-lg-4  mt-5 text-center offset-lg-4 p-0">
                <button class="btn btn-green btn-block" type="submit" name="submit" id="formbtn"
                    value="Add">Save</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ajax submition -->
<script>
    $(' myform').submit(function (e) {
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

            }
        })
    })

</script>




@endsection