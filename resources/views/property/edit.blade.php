@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Edit Property</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h2 class="Certificate">Edit Property</h2>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">1st line Address *</label>
                        <input type="text" class="form-control" name="first_line_address" id="" placeholder="1st line Address *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">2nd line Address *</label>
                        <input type="text" class="form-control" name="last_line_address" id=""
                            placeholder="Enter 2nd line Address *     " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Town *</label>
                        <input type="text" class="form-control" name="Town" id="" placeholder="Enter   Town " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Post code *</label>
                        <input type="text" class="form-control" name="Postcode" id="" placeholder="Enter Post code *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="" class="mb-lg-5">Notes *</label>
                        <input type="text" class="form-control mt-lg-5" name="Notes" id=""
                            placeholder="Enter Text Message" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">No. of Tenants </label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter No. of Tenants" />
                        <label htmlFor="" class="mt-3">Managed by *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Managed   " />
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
                    value="Add">Save</button>
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