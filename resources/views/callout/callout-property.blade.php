@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span class="span">&nbsp;&nbsp; Assign Property</span>
    </div>
    <div class="p-3">
        <form id="myform" class="addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="row">
                <div class="col-lg-6 offset-lg-3 px-lg-5 p-4">
                    <div class="row customshadow p-4 ">
                        <div class="col-lg-12">
                            <h3 class="Certificate">Assign Property to Guard</h3>
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" name="Guard_Name" value="{{$gaurd->Guard_Name}}"
                                disabled>
                        </div>
                        <div class="my-3 col-lg-12">
                             <select name="property_id" class="form-control">
                                @foreach($properties as $property)
                                <option value="{{$property->property_id}}">{{$property->first_line_address}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12 text-center">
                            <button class="btn btn-success" type="submit" name="submit" id="formbtn" value="Add">Update</button>
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
            url: "{{URL('store_call_property/'.$gaurd->id)}}",
            data: $('#myform').serialize(),
            type: 'post',
            error: function (request, status, error) {
                toastr.warning(request.responseText);
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Update');
            },
            success: function (result) {
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