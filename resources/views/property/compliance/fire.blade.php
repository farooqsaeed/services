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
        <form id="fire-form" class="row addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  mt-lg-4">
                <div class="menu ">
                    <p class=" mr-3">
                        <a href="/electrical-check">
                            Electrical Safety Check
                        </a>
                    </p>
                    <p class="mr-2">
                        <a href="/gas-check">
                            GAS Safety Check
                        </a>
                    </p>
                    <p class="active mr-2">Fire Safety Check </p>
                    <p class="mr-2"><a href="/energy-check">Energy Performance Check</a></p>
                    <p class=""> <a href="/inspection-check"> Inspection Report </a></p>

                </div>
                <div class="row">
                    <div class="mt-3 col-lg-12">
                        <h3>Fire Safety Check</h3>
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Date Carried Out</label>
                        <input type="text" class="form-control" name="date_carried_out" value="" id=""
                            placeholder="Date Carried Out *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Renewal Date (If applicable)</label>
                        <input type="text" class="form-control" name="renewal_date" id="" value=""
                            placeholder="Renewal Date *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Certificate Number</label>
                        <input type="text" class="form-control" name="certificate_number" value=""
                            placeholder="Enter Town " />
                    </div>
                    <div class="my-3 mt-lg-5 col-lg-12">
                        <h5>
                            Provide Additional Info
                        </h5>
                    </div>
                    <div class="my-3 col-lg-6">
                        <h6 class="text-secondary">
                            Present
                        </h6>
                        <label htmlFor="">Smoke Alarm</label>
                        <br>
                         &nbsp;&nbsp; <input type="checkbox" name="working" id=""> &nbsp; Working
                         <br>
                        <div class="p-3">
                            <small htmlFor="">&nbsp;&nbsp;&nbsp;&nbsp; Replacement Date (if Applicable)</small>
                            <input type="text" class="form-control pl-2" name="Replacement" value=""  />
                        </div>
                        &nbsp;&nbsp; <input type="checkbox" name="working" id=""> &nbsp; Not Working 
                        <br>
                        <small htmlFor="">&nbsp;&nbsp;&nbsp;&nbsp; Required-Not present currently</small>
                    </div>
                    <div class="my-3 col-lg-6">
                        <h6 class="text-secondary">
                            Present
                        </h6>
                        <label htmlFor="">Carbon monoxide Alarm</label>
                        <br>
                        &nbsp;&nbsp; <input type="checkbox" name="working" id=""> &nbsp; Working
                        <br>
                        <div class="p-3">
                            <small htmlFor="">&nbsp;&nbsp;&nbsp;&nbsp; Replacement Date (if Applicable)</small>
                            <input type="text" class="form-control pl-2" name="Replacement" value="" />
                        </div>
                        &nbsp;&nbsp; <input type="checkbox" name="working" id=""> &nbsp; Not Working
                        <br>
                        <small htmlFor="">&nbsp;&nbsp;&nbsp;&nbsp; Required-Not present currently</small>
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
    $('  fire-form').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({

            // url: "",

            data: $('#fire-form').serialize(),
            type: 'PUT',
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#fire-form')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                toastr.success(result.result);
                window.location.replace("/property");
            }
        })
    })

</script>

<script>
    toastr.danger(error);
</script>


@endsection