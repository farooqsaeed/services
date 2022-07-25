@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">

<style>
    select option {
        box-shadow: 0px 3px 6px #00000029;
        background-color: #38BF67;
        border: 2px solid #737475;
        border-radius: 10px;
        color: black;
        opacity: 1;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        padding: 20px;
    }
</style>
<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp; Add Certificates</span>
    </div>
    <div class="p-3">
        <form id="fire-form" class="row addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1">
                <div class="menu ">
                    <p class=" mr-3">
                        <a href="{{url('electrical-check/'.$property->id)}}">
                            Electrical Safety Check
                        </a>
                    </p>
                    <p class="mr-2">
                        <a href="{{url('gas-check/'.$property->id)}}">
                            GAS Safety Check
                        </a>
                    </p>
                    <p class="active mr-2">Fire Safety Check </p>
                    <p class="mr-2"><a href="{{url('energy-check/'.$property->id)}}">Energy Performance Check</a></p>
                    <p class=""> <a href="{{url('inspection-check/'.$property->id)}}"> Inspection Report </a></p>

                </div>
            </div>
            <div class="col-lg-6 customshadow offset-lg-3  mt-lg-4">
                <div class="row px-5">
                    <div class="mt-3 col-lg-12 text-center">
                        <h3>Fire Safety Check</h3>
                    </div>
                    <div class="my-3 col-lg-12">
                        <input type="date" class="form-control" name="date_carried_out" placeholder="Date Carried Out"
                            required />
                    </div>
                    <div class="my-3 col-lg-12">
                        <input type="date" class="form-control" name="renewal_date" placeholder="Renewal Date"
                            required />
                    </div>
                    <div class="my-3 col-lg-12">
                        <input type="text" class="form-control" name="certificate_number" placeholder="Certificate Number" required />
                    </div>
                    <div class="my-3 col-lg-12">  
                        <textarea name="description" class="form-control" id="" cols="30" rows="5" placeholder="Description"></textarea>
                    </div>
                    <div class="my-3 col-lg-12">
                        <button type="submit" class="btn btn-suc btn-block">Upload</button>
                    </div>
                    <div class="my-3 col-lg-6">
                        <input type="hidden" class="form-control" name="type" value="fire-certificate" />
                        <input type="hidden" class="form-control" name="property_id" value="{{$property->id}}" />
                    </div>
                </div>
            </div>
            <div class="col-lg-6 customshadow offset-lg-3  mt-lg-4">
                <div class="row px-5">
                    <div class="my-3 col-lg-6">
                        <h5 class="text-secondary">
                            Present
                        </h5>
                        <br>
                        <div class="form-group">
                            <label for="">Smoke Alarm</label>
                            <select class="form-control" id="smoke_alarm_select">
                                <option selected value="working">Working</option>
                                <option value="notworking">Not Working</option>
                            </select>
                        </div>
                        <div id="smoke_alarm_expiry">
                            <label for="">Replacement</label>
                            <input type="date" class="form-control pl-2" name="smoke_alarm_expiry" />
                        </div>
                        <h6 class="text-secondary mt-3">
                            Required-Not present Currently
                        </h6>
                    </div>
                    <div class="my-3 col-lg-6">
                        <h5 class="text-secondary">
                            Present
                        </h5>
                        <br>
                        <div class="form-group">
                            <label for="">Carbon mono oxide</label>
                            <select class="form-control" id="carbon_monoxide_select">
                                <option selected value="working">Working</option>
                                <option value="notworking">Not Working</option>
                            </select>
                        </div>
                        <div id="carbon_monoxide_expiry">
                            <label for="">Replacement</label>
                            <input type="date" class="form-control pl-2" name="carbon_monoxide_expiry" />
                        </div>
                        <h6 class="text-secondary mt-3">
                            Required-Not present Currently
                        </h6>
                    </div>
                    <div class="my-3 col-lg-12">
                        <div class="btn btn-suc btn-block">Save</div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- script for check  -->
<script>
    // smoke alert
    $(document).ready(function () {
        $("#smoke_alarm_select").change(function () {
            if ($("#smoke_alarm_select").val() === 'notworking') {
                $("#smoke_alarm_expiry").hide();
            }
            else {
                $("#smoke_alarm_expiry").show();
            }
        });
    });

    // carbon mono oxide
    $(document).ready(function () {
        $("#carbon_monoxide_select").change(function () {
            if ($("#carbon_monoxide_select").val() === 'notworking') {
                $("#carbon_monoxide_expiry").hide();
            }
            else {
                $("#carbon_monoxide_expiry").show();
            }
        });
    });

</script>


<!-- ajax submition -->
<script>
    $('#fire-form').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{route('compliance-store')}}",
            data: $('#fire-form').serialize(),
            type: 'POST',
            error: function (error) {
                console.log(error);
            },
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#fire-form')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                toastr.success(result.result);
                window.location = result.url;
            }
        })
    })

</script>


@endsection