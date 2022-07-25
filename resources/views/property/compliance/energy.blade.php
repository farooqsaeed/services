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
        <form id="energy-form" class="row addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1 mt-lg-4">
                <div class="menu ">
                    <p class=" mr-3"><a href="{{url('electical-check/'.$property->id)}}">Electrical Safety Check</a></p>
                    <p class="mr-2"><a href="{{url('gas-check/'.$property->id)}}">GAS Safety Check</a></p>
                    <p class="mr-2"><a href="{{url('fire-check/'.$property->id)}}">Fire Safety Check</a></p>
                    <p class="active mr-2">Energy Performance Check</p>
                    <p class=""><a href="{{url('inspection-check/'.$property->id)}}">Inspection Report</a></p>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-3 mt-lg-4 ">
                <div class="row shadow rounded bg-white px-5 py-3">
                    <div class="my-3 col-lg-12 text-center">
                        <h5>Energy Performance Check</h5>
                    </div>
                    <div class="my-3 col-lg-12">
                        <input type="date" class="form-control" name="date_carried_out" placeholder="Date Carried Out"
                            required value="" id="" />
                    </div>
                    <div class="my-3 col-lg-12">
                        <input type="date" class="form-control" name="renewal_date" placeholder="Renewal Date" required
                            value="" />
                    </div>
                    <div class="my-3 col-lg-12">
                        <input type="text" class="form-control" name="certificate_number" value=""
                            placeholder=" Certificate Number " />
                    </div>
                    <div class="col-lg-12">
                        <input type="hidden" class="form-control " name="property_id" value="{{$property->id}}" />
                        <input type="hidden" class="form-control " name="type" value="energy-check" />
                    </div>
                    <div class="my-3 col-lg-12">
                        <textarea placeholder="Description" class="form-control " name="description" id="" cols="30"
                            rows="5"></textarea>
                    </div>
                    <div class="col-lg-12 ">
                        <button class="btn btn-suc btn-block btn-sm text-white px-3" type="submit" name="submit"
                            id="formbtn" value="Add">Upload</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ajax submition -->
<script>
    $('#energy-form').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{route('compliance-store')}}",
            data: $('#energy-form').serialize(),
            type: 'POST',
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#energy-form')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                toastr.success(result.result);
                window.location = result.url;
            }
        })
    })

</script>

<script>
    toastr.danger(error);
</script>


@endsection