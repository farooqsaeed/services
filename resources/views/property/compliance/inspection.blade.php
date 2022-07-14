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
        <form id="inspection-form" class="row addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  mt-lg-4">
                <div class="menu ">
                    <p class=" mr-3">
                        <a href="{{url('electrical-check/'.$property->id)}}">
                            Electrical Safety Check
                        </a>
                    </p>
                    <p class="mr-2"><a href="{{url('gas-check/'.$property->id)}}">GAS Safety Check</a></p>
                    <p class="mr-2"><a href="{{url('fire-check/'.$property->id)}}">Fire Safety Check</a></p>
                    <p class="mr-2"><a href="{{url('energy-check/'.$property->id)}}">Energy Performance Check</a></p>
                    <p class="active">Inspection Report</p>

                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Date Carried Out</label>
                        <input type="text" class="form-control" name="date_carried_out" value="" id=""
                            placeholder="Date Carried Out *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Renewal Date</label>
                        <input type="text" class="form-control" name="renewal_date" id="" value=""
                            placeholder="Renewal Date *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Certificate Number</label>
                        <input type="text" class="form-control" name="certificate_number" value=""
                            placeholder="Enter Town " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <input type="hidden" class="form-control mt-lg-5" name="property_id"
                            value="{{$property->id}}" />
                        <input type="hidden" class="form-control mt-lg-5" name="type" value="inspection-check" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="" class="mb-lg-5">Description</label>
                        <input type="text" class="form-control mt-lg-5" name="description" value="" placeholder="" />
                    </div>
                </div>
            </div>
            <div class="col-lg-11 text-right p-0">
                <button class="btn success btn-sm text-white px-3" type="submit" name="submit" id="formbtn"
                    value="Add">Upload</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ajax submition -->
<script>
    $('#inspection-form').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{route('compliance-store')}}",
            data: $('#inspection-form').serialize(),
            type: 'POST',
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#inspection-form')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                toastr.success(result.result);
                window.location = result.url;
            }
        })
    })

</script>

 

@endsection