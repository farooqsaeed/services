@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp; Assign Property</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h3 class="Certificate">Assign Property</h3>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-12">
                        <div class="form-group">
                            <label htmlFor="">Select Property *</label>
                            <select class="form-control" name="property_id" id="">
                                @foreach($properties as $property)
                                <option value="{{$property->property_id}}">{{$property->first_line_address}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Tenancy Start Date *</label>
                        <input type="date" class="form-control" name="tenancy_start_date" id="" required
                            placeholder="Enter Last Name *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Tenancy End Date*</label>
                        <input type="date" class="form-control" name="tenancy_last_date" id="" required
                            placeholder="Enter Contact number " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <input type="hidden" class="form-control" name="tenancy_id" id="" value="{{$tenant_id->id}}" />
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

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ajax submition -->
<script>
    $('#myform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{URL('storeproperty')}}",
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
                window.location.replace("/tenant");
            }
        })
    })

</script>




@endsection