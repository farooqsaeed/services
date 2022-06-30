@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">


<div class="container-fluid addcontractor p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp; Add Contractor</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform" action="{{URL('contractors')}}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="col-lg-10 offset-lg-1">
                <div class="form-group row">
                    <div class="col-sm-2">Businessman</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1" checked />
                        </div>
                    </div>
                </div>
                <div class="my-3" id="Businessman">
                    <label htmlFor="">Business Name *</label>
                    <input type="text" class="form-control" name="business_name" value="" id="business_name"  placeholder="Enter Business" />
                </div>
            </div>
            <!-- {/* column 1st */} -->
            <div class="col-lg-10  offset-lg-1">
                <div class="row">
                    <div class="my-3 col-6">
                        <label htmlFor="">First Name *</label>
                        <input type="text" class="form-control" name="first_name" id="" value=""
                            placeholder="Enter first name" required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor=""> Last Name *</label>
                        <input type="text" class="form-control" name="last_name" id="" placeholder="Enter Last Name"
                            required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Mobile No *
                        </label>
                        <input type="tele" class="form-control" name="mobile_no" id="" placeholder="Enter Mobile NO"
                            required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Phone No *
                        </label>
                        <input type="tele" class="form-control" name="landline_no" id="" placeholder="Enter Phone NO"
                            required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Preferred Communication *
                        </label>
                        <select name="preferred_communication" class="form-control" id="" required>
                            <option value="text">Phone</option>
                            <option value="text">Text</option>
                            <option value="email">Email</option>

                        </select>
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Select Services *
                        </label>
                        <select name="" class="form-control" id="">
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                        </select>
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Email *
                        </label>
                        <input type="Email" class="form-control" name="email" id="" placeholder="Enter Email"
                            required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Add Group
                        </label>
                        <select name="" class="form-control" id="">
                            @foreach($groups as $group)
                            <option value="{{$group->id}}">{{$group->Group_Name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Area of Coverage *
                        </label>
                        <input type="text" class="form-control" name="area_of_coverage" id=""
                            placeholder="Enter Area of Coverage" required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Agreed Rate *
                        </label>
                        <input type="text" class="form-control" name="rate" required
                            placeholder="Enter Area of Coverage" />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Business Address *
                        </label>
                        <input type="text" class="form-control" name="house_no" required
                            placeholder="Enter Area of Coverage" />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">House #</label>
                        <input type="text" class="form-control" name="house_no" id="" placeholder="Enter house number"
                            value="" required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">street name</label>
                        <input type="text" class="form-control" name="street_name" id="" placeholder="Enter street name"
                            value="" required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">Town city</label>
                        <input type="text" class="form-control" name="town_city" id="" placeholder="Enter Town city"
                            value="" required />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">Postal Code</label>
                        <input type="text" class="form-control" name="postal_code" id="" placeholder="Enter street name"
                         required   value="" />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">Rate option</label>
                        <input type="text" class="form-control" name="rate_option" id="" placeholder="Enter Rate"
                         required   value="" />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Recommendation *
                        </label>
                        <select name="Recommendation" class="form-control" id="" required>
                            <option value="1">1st Choise</option>
                            <option value="2">2nd Choise</option>
                            <option value="3">3rd Choise</option>
                        </select>
                        <input type="hidden" disabled class="form-control" name="isMobile" id="isMobile" value="0" />
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Working Hours *
                        </label>
                        <div class="d-flex Working justify-content-between mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                                    checked />
                                <label class="form-check-label" for="flexCheckDefault">
                                    6 - 8
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" />
                                <label class="form-check-label" for="flexCheckChecked">
                                    24/7
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-6">
                        <label htmlFor="" class="mt-3">
                            Notes
                        </label>
                        <textarea class="form-control" name="notes" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <!-- {/* add certificate */} -->
            <div class="col-lg-5 offset-lg-1  ">
                <div class="my-5">
                    <h3 class="Certificate">Add Certificate</h3>
                </div>
                <div class="my-3">
                    <label htmlFor="">Title *</label>
                    <input type="text" class="form-control" name="title" required
                        placeholder="Title of your certificate" />
                </div>
                <div class="my-5">
                    <label htmlFor=""> Description *</label>
                    <input type="text" class="form-control mt-4" name="description" required
                        placeholder="Text Message" />
                </div>
                <div class="my-5">
                    <label htmlFor=""> Archived Date *</label>
                    <input type="date" class="form-control mt-4" name="achieved_date" required
                        placeholder="Text Message" />
                </div>
                <div class="my-5">
                    <label htmlFor=""> Expiry Date *</label>
                    <input type="date" class="form-control mt-4" name="expiry_date" required placeholder="Text Message" />
                </div>
                <div class="my-5">
                    <label htmlFor="">Upload Attachment *</label>
                    <input type="file" class="form-control" required name="attachment" />
                    <input type="hidden" class="form-control" value="certificate" name="doc_type" />
                </div>
            </div>
            <!-- {/* Add ID */} -->
            <div class="col-lg-5">
                <div class="my-5">
                    <h3 class="Certificate">Add ID </h3>
                </div>
                <div class="my-3">
                    <label htmlFor="">Title *</label>
                    <input type="text" class="form-control" name="title1" required placeholder=" Title of your ID" />
                </div>
                <div class="my-5">
                    <label htmlFor=""> Description *</label>
                    <input type="text" class="form-control mt-4" name="description1" required
                        placeholder="Text Message" />
                </div>
                <div class="my-5">
                    <label htmlFor=""> Archived Date *</label>
                    <input type="date" class="form-control mt-4" name="achieved_date1" required
                        placeholder="Text Message" />
                </div>
                <div class="my-5">
                    <label htmlFor=""> Expiry Date *</label>
                    <input type="date" class="form-control mt-4" name="expiry_date1" required
                        placeholder="Text Message" />
                </div>
                <div class="my-5">
                    <label htmlFor="" class="custom-file-upload">
                        Upload Attachment *
                    </label>
                    <input type="file" class="form-control" name="attachment1" required />
                    <input type="hidden" class="form-control" value="id" name="doc_type1" />
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
                    value="Add">Add</button>
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
                // $('#message').html(result.result);
                // $("#msgdiv").css({ display: "block" });
                $('#myform')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                toastr.success(result.result);
            }
        })
    })

</script>


@endsection