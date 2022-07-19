@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp;&nbsp; Assign Engineer</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-6 px-lg-5 p-4">
                <div class="row shadow rounded p-4">
                    <div class="mt-3 col-lg-12">
                        <h6 class="Certificate">Select Hours</h5>
                    </div>
                    <div class="mt-3 col-lg-12 ">
                        <div class="btn btn-suc px-4 btn-sm">8 hours</div>
                        <div class="btn btn-suc px-4 btn-sm">Out Of Hours</div>

                    </div>

                    <div class="my-3 col-lg-12">
                        <h6 class="Certificate">Assign Engineer</h5>
                    </div>
                    <div class="mb-3 col-lg-12 ">
                        <div class="btn btn-suc px-4 btn-sm">Online</div>
                        <div class="btn btn-suc px-4 btn-sm">Offline </div>

                    </div>



                    <div class="my-3 col-lg-12  ">
                        <select name="" id="" class="form-control">
                            <option>Area of Coverage *</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="my-3 col-lg-12  ">
                        <select name="" id="" class="form-control">
                            <option>Select Services</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mt-5  ">
                        <button class="btn btn-info success btn-block">Save</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 px-lg-5 p-4">
                <div class="row shadow rounded p-4">
                    <div class="my-3 col-lg-12">
                        <h3 class="Certificate">Assign Engineer</h3>
                    </div>
                    <div class="my-3 col-lg-12 ">
                        <select name="" id="" class="form-control">
                            <option>Working Hours</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="my-3 col-lg-12  ">
                        <select name="" id="" class="form-control">
                            <option>Area of Coverage *</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="my-3 col-lg-12  ">
                        <select name="" id="" class="form-control">
                            <option>Select Services</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-12 mt-5  ">
                        <button class="btn btn-info success btn-block">Save</button>
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