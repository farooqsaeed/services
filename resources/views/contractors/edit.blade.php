@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">


<div class="container-fluid addcontractor p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp; Edit Contractor</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform" enctype="multipart/form-data">
            @csrf
            <!-- {/* column 1st */} -->
            <div class="col-lg-10  offset-lg-1">
                <div class="row">
                    <div class="my-3 col-6">
                        <label htmlFor="">First Name *</label>
                        <input type="text" class="form-control" name="first_name" id=""
                            value="{{$contractor->first_name}}" placeholder="Enter first name" required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor=""> Last Name *</label>
                        <input type="text" class="form-control" name="last_name" id="" placeholder="Enter Last Name"
                            value="{{$contractor->last_name}}" required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Mobile No *
                        </label>
                        <input type="tele" class="form-control" name="mobile_no" id="" placeholder="Enter Mobile NO"
                            value="{{$contractor->mobile_no}}" />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Phone No *
                        </label>
                        <input type="tele" class="form-control" name="landline_no" id="" placeholder="Enter Phone NO"
                            value="{{$contractor->landline_no}}" />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Preferred Communication *
                        </label>
                        <select name="preferred_communication" class="form-control" required>
                            <option value="text">Phone</option>
                            <option value="text">Text</option>
                            <option value="email">Email</option>
                        </select>
                    </div>

                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Email *
                        </label>
                        <input type="Email" class="form-control" name="email" id="" placeholder="Enter Email"
                            value="{{$contractor->email}}" required />
                    </div>

                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">House #</label>
                        <input type="text" class="form-control" name="house_no" id="" placeholder="Enter house number"
                            value="{{$contractor->house_no}}" required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">street name</label>
                        <input type="text" class="form-control" name="street_name" id="" placeholder="Enter street name"
                            value="{{$contractor->street_name}}" required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">Town city</label>
                        <input type="text" class="form-control" name="town_city" id="" placeholder="Enter Town city"
                            value="{{$contractor->town_city}}" required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">Postal Code</label>
                        <input type="text" class="form-control" name="postal_code" id="" placeholder="Enter street name"
                        required value="{{$contractor->postal_code}}" />
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
                    value="Update">Update</button>
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

<!-- ajax submition  removed as it not working with pic-->
<script>
    $('#myform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') 
        }
        });

        $.ajax({
            url: "{{URL('contractors/'.$contractor->id)}}",
            data: $('#myform').serialize(),
            type: 'PUT',
            error: function (request, status, error) {
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                console.log(request.responseText);

            },
            success: function (result) {
                // $('#message').html(result.result);
                // $("#msgdiv").css({ display: "block" });
                $('#myform')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                toastr.success(result.result);
                location.href=(result.url);
            }
        })
    })

</script>


@endsection