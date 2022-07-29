@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">


<div class="container-fluid addcontractor p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp; Add Contractor</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform" action="{{URL('contractors')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- {/* column 1st */} -->
                <div class="col-lg-6  offset-lg-3 px-lg-5 p-4">
                    <div class="row customshadow p-4">
                        <div class="col-lg-12">
                            <div class="form-group row">
                                <div class="col-sm-4">Businessman</div>
                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck1" checked />
                                    </div>
                                </div>
                            </div>
                            <div class="my-3" id="Businessman">
                                <label htmlFor="">Business Name *</label>
                                <input type="text" class="form-control" name="business_name" value="" id="business_name"
                                    placeholder="Business Name" />
                            </div>
                        </div>
                        <div class="my-3 col-6">
                            <input type="text" class="form-control" name="first_name" id="" value=""
                                placeholder="First name" required />
                        </div>
                        <div class="my-3 col-6">
                            <input type="text" class="form-control" name="last_name" id="" placeholder="Last Name"
                                required />
                        </div>
                        <div class="my-3 col-6">
                            <input type="tele" class="form-control" name="mobile_no" placeholder="Mobile NO" required />
                        </div>
                        <div class="my-3 col-6">
                            <input type="tele" class="form-control" name="landline_no" placeholder="Phone NO"
                                required />
                        </div>
                        <div class="my-3 col-6">
                            <select name="preferred_communication" class="form-control" id="" required>
                                <option> Preferred Communication</option>
                                <option value="text">Phone</option>
                                <option value="text">Text</option>
                                <option value="email">Email</option>
                            </select>
                        </div>
                        <div class="my-3 col-6">
                            <select name="" class="form-control" id="">
                                <option>Select Services</option>
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                            </select>
                        </div>
                        <div class="my-3 col-6">
                            <input type="Email" class="form-control" name="email" id="" placeholder="Email" required />
                        </div>
                        <div class="my-3 col-6">
                            <select name="" class="form-control" id="">
                                <option>Add Group</option>
                                @foreach($groups as $group)
                                <option value="{{$group->id}}">{{$group->Group_Name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="my-3 col-6">
                            <input type="text" class="form-control" name="area_of_coverage"
                                placeholder="Area of Coverage" required />
                        </div>
                        <div class="my-3 col-6">
                            <input type="text" class="form-control" name="rate" required
                                placeholder="Area of Coverage" />
                        </div>
                        <div class="my-3 col-6">
                            <input type="text" class="form-control" name="house_no" required
                                placeholder="Business Address" />
                        </div>
                        <div class="my-3 col-6">
                            <input type="text" class="form-control" name="house_no" placeholder="House number" value=""
                                required />
                        </div>
                        <div class="my-3 col-6">
                            <input type="text" class="form-control" name="street_name" placeholder="Street name"
                                value="" required />
                        </div>
                        <div class="my-3 col-6">
                            <input type="text" class="form-control" name="town_city" id="" placeholder="Town city"
                                value="" required />
                        </div>
                        <div class="my-3 col-6">
                            <input type="text" class="form-control" name="postal_code" id="" placeholder="Postal Code"
                                required value="" />
                        </div>
                        <div class="my-3 col-6">
                            <input type="text" class="form-control" name="rate_option" id="" placeholder="Rate option"
                                required value="" />
                        </div>
                        <div class="my-3 col-6">
                            <select name="Recommendation" class="form-control" id="" required>
                                <option> Recommendation</option>
                                <option value="1">1st Choise</option>
                                <option value="2">2nd Choise</option>
                                <option value="3">3rd Choise</option>
                            </select>
                            <input type="hidden" disabled class="form-control" name="isMobile" id="isMobile"
                                value="0" />
                        </div>
                        <div class="my-3 col-6">
                            <select name="priority" class="form-control" required>
                                <option> Priority</option>
                                <option value="P1">1st Priority</option>
                                <option value="P2">2nd Priority</option>
                                <option value="P3">3rd Priority</option>
                            </select>
                            <input type="hidden" disabled class="form-control" name="isMobile" id="isMobile" value="0" />
                        </div>
                        <div class="my-3 col-6">
                            <div class="d-flex Working justify-content-between mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="6-to-8" name="timing"
                                        id="flexCheckDefault" checked />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        6 - 8
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="24by7" name="timing"
                                        id="flexCheckChecked" />
                                    <label class="form-check-label" for="flexCheckChecked">
                                        24/7
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="my-3 col-12">
                            <label htmlFor="" class="mt-3">
                                Notes
                            </label>
                            <textarea class="form-control" name="notes" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <!-- {/* add certificate */} -->
                <div class="col-lg-6 px-lg-5 p-4">
                    <div class="row customshadow p-4">
                        <div class="my-3 col-lg-12">
                            <h3 class="Certificate">Add Certificate</h3>
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" name="title" required
                                placeholder="Title of certificate" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control  " name="description" required
                                placeholder="Description" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="date" class="form-control  " name="achieved_date" required
                                placeholder="Archived Date *" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="date" class="form-control  " name="expiry_date" required
                                placeholder="Expiry Date *" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <label htmlFor="">Upload Attachment *</label>
                            <input type="file" class="form-control" required name="attachment" />
                            <input type="hidden" class="form-control" value="certificate" name="doc_type" />
                        </div>
                    </div>
                </div>
                <!-- {/* Add ID */} -->
                <div class="col-lg-6 px-lg-5 p-4">
                    <div class="row  customshadow p-4">
                        <div class="my-3 col-lg-12">
                            <h3 class="Certificate">Add ID </h3>
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control" name="title1" required placeholder=" Title of ID" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="text" class="form-control  " name="description1" required
                                placeholder="Description" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="date" class="form-control  " name="achieved_date1" required
                                placeholder="Archived Date" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="date" class="form-control  " name="expiry_date1" required
                                placeholder="Expiry Date *" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <label htmlFor="" class="custom-file-upload">
                                Upload Attachment *
                            </label>
                            <input type="file" class="form-control" name="attachment1" required />
                            <input type="hidden" class="form-control" value="id" name="doc_type1" />
                        </div>
                    </div>
                </div>

                <div class="col-lg-4   text-center offset-lg-4 p-0">
                    <button class="btn btn-green btn-block" type="submit" name="submit" id="formbtn"
                        value="Add">Add</button>
                </div>
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
    // required added
    $(document).ready(function () {

        $('#gridCheck1').change(function () {

            if ($('#business_name').attr('required')) {
                $('#business_name"]').removeAttr('required');
            }

            else {
                $('#business_name').attr('required', 'required');
            }

        });

    });



</script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ajax submition  removed as it not working with pic-->
<script>
    $('myform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');

        $.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
        });

        $.ajax({
            url: "{{URL('contractors')}}",
            data: $('#myform').serialize(),
            type: 'POST',
            error: function (request, status, error) {
                alert(request.responseText);
            },
            success: function (result) {
                $('#myform')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                toastr.success(result.result);
            }
        })
    })

</script>


@endsection