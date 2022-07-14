@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp; Edit Property</span>
    </div>
    <div class="p-3">
        <form id="myform">
            @csrf
            <div class="row">
                <!-- {/* Property Details */} -->
                <div class="col-lg-6 offset-lg-3 p-lg-5 p-4">
                    <div class="row customshadow p-4">
                        <div class="col-lg-12">
                            <h3 class="Certificate">Enter Property Details</h3>
                        </div>
                        <div class="my-3 col-12">
                            <input type="text" name="Postcode" id="search" class="form-control"
                                value="{{$property->Postcode}}" required placeholder="Postal Code *" />
                            <button onclick="getAddress()" class="d-none"></button>
                        </div>
                        <div class="my-3 col-12">
                            <select type="text" class="form-control" id="addressList" required>
                                <option selected>Select Address *</option>
                            </select>
                        </div>
                        <div class="my-3 col-12">
                            <input type="text" class="form-control" name="manageby" required
                                placeholder="Manage by *" />
                        </div>
                        <div class="my-3 col-12">
                            <textarea name="Notes" id="" class="form-control" rows="5">Note*</textarea>
                        </div>
                    </div>
                </div>
                <!-- property hide fields -->
                <div class="col-lg-10 offset-lg-1 d-none ">
                    <div class="mt-5">
                        <h3 class="Certificate">Enter Property Details</h3>
                    </div>
                    <div class="row">
                        <div class="my-3 col-lg-6">
                            <label htmlFor="">1st line Address *</label>
                            <input type="text" class="form-control" name="first_line_address" id="firstline"
                                placeholder="1st line Address *" />
                        </div>
                        <div class="my-3 col-lg-6">
                            <label htmlFor="">2nd line Address *</label>
                            <input type="text" class="form-control" name="second_line_address" id="secondline" value=""
                                placeholder="Enter 2nd line Address *" />
                        </div>
                        <div class="my-3 col-lg-6">
                            <label htmlFor="">Town *</label>
                            <input type="text" class="form-control" name="Town" id="town" placeholder="Enter Town "
                                value="null" />
                        </div>
                        <div class="my-3 col-lg-6">

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="my-3 col-lg-4 ">
                        <a href="{{ url()->previous() }}" type="reset" class="btn btn-outline-success btn-block">Cancel</a>
                    </div>
                    <div class="my-3 col-lg-4 offset-lg-4 text-right">
                        <button type="submit" id="formbtn" class="btn btn-success   btn-block">SAVE</button>
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
            url: "{{URL('property/'.$property->id)}}",
            data: $('#myform').serialize(),
            type: 'PUT',
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#myform')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                toastr.success(result.result);
                window.location.replace("/property");
            }
        })
    })

</script>

<script>
    var allAddress;
    var postcode;
    function search(nameKey) {
        for (var i = 0; i < allAddress.length; i++) {
            if (allAddress[i].line_1 === nameKey) {
                return allAddress[i];
            }
        }
    }

    $('#addressList').on('change', function () {
        var resultObject = search(this.value);
        $('#firstline').val(resultObject.line_1)
        $('#secondline').val(resultObject.line_2)
        $('#town').val(resultObject.town_or_city)
        $('#postcode').val(postcode)
        console.log(resultObject)
    });

    function getAddress() {
        postcode = $('#search').val();
        $.ajax({
            type: "GET",
            url: "https://api.getAddress.io/find/" + postcode + "?api-key=TNinqIHsSE2nau9gzq2jpg35492&expand=true",
            dataType: "json",
            success: function (result) {
                allAddress = result.addresses
                var items = result.addresses
                document.getElementById('addressList').innerHTML = null
                $('#addressList').append(`<option>--Select--
                           </option>`);
                for (var i = 0; i < items.length; i++) {
                    $('#addressList').append(`<option value="${items[i].line_1}">
                          ${items[i].line_1 + ' ' + items[i].line_2 + ' ' + items[i].town_or_city + ' ' + items[i].county} </option>`);
                }

            }
        });
    }

</script>


@endsection