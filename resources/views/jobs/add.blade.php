@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp;&nbsp; Add Jobs</span>
    </div>
    <div class="p-3">
        <form id="jobform" class="addform" method="post" action="{{URL('jobs')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6 offset-lg-3 p-lg-5 p-4">
                    <div class="row customshadow p-4">
                        <div class="col-lg-12">
                            <h3 class="Certificate">Enter Job Details</h3>
                        </div>
                        <div class="my-3 col-12">
                            <select name="property_id" class="form-control" id="">
                                <option>Select Property</option>
                                @foreach($properties as $item)
                                <option value="{{$item->id}}">
                                    {{$item->first_line_address}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="my-3 col-12">
                            <input type="text" class="form-control" name="tenant_name" id="" required
                                placeholder="Tenant Name *" />
                        </div>
                        <div class="my-3 col-12">
                            <input type="text" class="form-control" name="address" required placeholder="Address *" />
                        </div>
                        <div class="my-3 col-12">
                            <input type="text" class="form-control" name="contact" id="" required
                                placeholder="Contact *" />
                        </div>
                        <div class="my-3 col-12">
                            <label class="form-check-label" for="inlineCheckbox1">Severity</label>
                            <br>
                            <div class="d-flex justify-content-around pt-2">
                                <label class="radio-inline">
                                    <input type="radio" name="severity" value="Non-Emergency" checked>&nbsp; Emergency
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="Non-Emergency" name="severity">&nbsp; Non-Emergency
                                </label>
                            </div>

                        </div>
                        <div class="my-3 col-lg-12">
                                 <select class="form-control" name="category" id="country-dd">
                                    <option selected disabled>Select Category </option>
                                    @foreach($categories as $cat)
                                    <option value="{{$cat->id}}"> {{$cat->name}}</option>
                                    @endforeach
                                </select>
                         </div>
                        <div class="my-3 col-lg-12">
                                 <select class="form-control" name="subcategory" id="state-dd">
                                    <option>Sub category</option>
                                </select>
                         </div>
                        <div class="my-3 col-12">
                            <input type="text" class="form-control" name="subject" id="" required
                                placeholder="Enter  Subject  " />
                            <input type="hidden" name="routeStatus" value="{{ $id }}" />
                        </div>
                        <div class="col-12 my-3">
                            <input type="file" class="form-control " name="attachment" title="attachment" id=""
                                required />
                        </div>
                        <div class="col-12 my-3">
                            <textarea name="description" class="form-control" cols="30" rows="5">Description</textarea>
                        </div>
                        <div class="col-12  my-3">
                            <button id="formbtn" type="submit" class="btn btn-info success btn-block ">Save</button>
                        </div>
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
    $('#  jobform').submit(function (e) {
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