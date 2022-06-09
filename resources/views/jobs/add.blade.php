@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Add Jobs</span>
    </div>
    <div class="p-3">
        <form id="jobform" class="row addform"  enctype="multipart/form-data" action="{{URL('jobs')}}" method="post" >
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h2 class="Certificate">Enter Job Details</h2>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <div class="form-group">
                            <label htmlFor="">Select Property*</label>
                            <select class="form-control" name="property_id"  >
                                @foreach($properties as $property)
                                <option value="{{$property->property_id}}" > {{$property->first_line_address}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Address *</label>
                        <input type="text" class="form-control" name="address" id="" placeholder=" line Address *" />
                    </div>

                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Tenant Name *</label>
                        <input type="text" class="form-control" name="tenant_name" id=""
                            placeholder="Enter Tenant Name    " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Contact *</label>
                        <input type="text" class="form-control" name="contact" id="" placeholder="Enter Contact *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="" class="">Upload Attachment *</label>
                        <input type="file" class="form-control " name="attachment" id="" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="" class="">Description *</label>
                        <input type="text" class="form-control" name="description" id=""
                            placeholder="Enter  Text Message" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <div class="form-group">
                            <label htmlFor="" class="">Category *</label>
                            <select class="form-control" name="category"  id="country-dd">
                                <option selected disabled>Select Category </option>
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}"> {{$cat->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="my-3 col-lg-6">
                        <div class="form-group">
                            <label htmlFor="" class="">Sub Category *</label>
                            <select class="form-control" name="subcategory" id="state-dd">
                            </select>
                        </div>
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="" class="">Subject </label>
                        <input type="text" class="form-control" name="subject" id="" placeholder="Enter  Subject  " />
                    </div>
                    <div class="my-3 col-lg-6 text-right">
                        <button class="btn btn-info success btn-sm">Add Another</button>
                    </div>
                </div>
                <div class="col-4 offset-4  mt-5">
                    <button id="formbtn" type="submit" class="btn btn-info success btn-block ">Save</button>
                </div>
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
</script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ajax submition -->
<script>
    $(' jobform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{URL('jobs')}}",
            data: $('#jobform').serialize(),
            type: 'POST',
            error: function (request, status, error) {
                alert(request.responseText);
            },
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#jobform')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                toastr.success(result.result);
            }
        })
    })

</script>



<!-- select cat -->
 <script>
    $(document).ready(function () {
        $('#country-dd').on('change', function () {
            var idCountry = this.value;
            $("#state-dd").html('');
            $.ajax({
                url: "{{url('fetch-sub')}}",
                type: "POST",
                data: {
                    country_id: idCountry,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#state-dd').html('<option value="">Select State</option>');
                    $.each(result.states, function (key, value) {
                        $("#state-dd").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    });
</script>


@endsection