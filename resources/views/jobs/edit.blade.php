@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Update Jobs</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h2 class="Certificate">Update Job Details</h2>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Address *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="  line Address *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Tenant Name *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Tenant Name    " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Contact *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Contact *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="" class="">Upload Attachment *</label>
                        <input type="file" class="form-control " name="" id="" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="" class="mt-lg-5">Description *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter  Text Message" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <div class="text-right">
                            <button class="btn btn-info success btn-sm">Add Another</button>
                        </div>
                        <label htmlFor="" class="mt-3">Subject </label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter  Subject  " />
                    </div>
                    <div class="col-4 offset-4  mt-5">
                        <button class="btn btn-info success btn-block ">Save</button>
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