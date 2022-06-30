@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp;&nbsp; Assign Engineer</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="row">
                    <div class="my-3 col-lg-12 mt-lg-5 ">
                        <label htmlFor="">Working Hours *</label>
                        <select name="" id="" class="form-control">
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="my-3 col-lg-12  ">
                        <label htmlFor="">Area of Coverage *</label>
                        <select name="" id="" class="form-control">
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="my-3 col-lg-12  ">
                        <label htmlFor="">Select Services *</label>
                        <select name="" id="" class="form-control">
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div class="col-lg-4  mt-5">
                        <button class="btn btn-outline-success btn-block ">Cancel</button>
                    </div>
                    <div class="col-lg-4 offset-lg-4  mt-5 text-right  ">
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