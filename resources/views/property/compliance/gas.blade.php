@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp; Add Certificates</span>
    </div>
    <div class="p-3">
        <form id="gas-form" class="row addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-12 offset-lg-1 mt-lg-4">
                <div class="menu ">
                    <p class=" mr-3">
                        <a href="{{url('electrical-check/'.$property->id)}}">
                            Electrical Safety Check
                        </a>
                    </p>
                    <p class="active mr-2">GAS Safety Check</p>
                    <p class="mr-2"><a href="{{url('fire-check/'.$property->id)}}">Fire Safety Check</a></p>
                    <p class=" mr-2"><a href="{{url('energy-check/'.$property->id)}}">Energy Performance Check</a></p>
                    <p class=""><a href="{{url('inspection-check/'.$property->id)}}">Inspection Report</a></p>

                </div>
            </div>
            <div class="col-lg-6 offset-lg-3 mt-3 ">
                <div class="row rounded shadow bg-white px-5 py-3">
                    <div class="my-3 text-center col-lg-12">
                        <h5>GAS Safety Check</h5>
                    </div>
                    <div class="my-3 col-lg-12">
                         <input type="date" class="form-control" name="date_carried_out" placeholder="Date Carried Out"  value="" required />
                    </div>
                    <div class="my-3 col-lg-12">
                         <input type="date" class="form-control" name="renewal_date" placeholder="Renewal Date" required value="" />
                    </div>
                    <div class="my-3 col-lg-12">
                        <input type="text" class="form-control" name="certificate_number" placeholder="Certificate Number" />
                    </div>
                    <div class=" col-lg-12">
                        <input type="hidden" class="form-control " name="property_id" id="property_id"
                            value="{{$property->id}}" />
                        <input type="hidden" class="form-control " name="type" value="gas-check" />
                    </div>
                    <div class="my-3 col-lg-12">
                         <textarea class="form-control " name="description" cols="30" rows="5" placeholder="Description"></textarea>
                    </div>
                    <div class="col-lg-12">
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

<!-- ajax submition -->
<script>
    $('#gas-form').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{route('compliance-store')}}",
            data: $('#gas-form').serialize(),
            type: 'POST',
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#gas-form')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                toastr.success(result.result);
                window.location = result.url;
            }
        })
    })

</script>


@endsection