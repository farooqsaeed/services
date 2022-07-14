@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
 

<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp; Add Properties</span>
    </div>
    <div class="p-3 addform">
        <div class="row">
            <!-- <form class="w-100">
                <div class="my-3 col-lg-10  offset-lg-1  ">
                    <label for="">Search by postal Code</label>
                    <div class="input-group ">
                          <input type="search" id="search" class="form-control rounded" placeholder="Search"
                            aria-label="Search" aria-describedby="search-addon" />  
                        <button onclick="getAddress()" type="button" class="btn btn-success success">search</button>
                    </div>
                </div>
                <div class="my-3 col-lg-10  offset-lg-1  ">
                      <div class="form-group">
                        <label for="">Select Address</label>
                        <select class="form-control" name="" id="addressList">
                        </select>
                    </div>  
                </div>
            </form> -->
        </div>
        <form id="myform">
            @csrf
            <div class="row">
                <!-- {/* Property Details */} -->
                <div class="col-lg-6  p-lg-5 p-4">
                    <div class="row customshadow p-4">
                        <div class="col-lg-12">
                            <h3 class="Certificate">Enter Property Details</h3>
                        </div>
                        <div class="my-3 col-12">
                            <input type="text" name="Postcode" id="search" class="form-control" required
                                placeholder="Postal Code *" />
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
                <!-- {/* Landlord Info */} -->
                <div class="col-lg-6  p-lg-5 p-4">
                    <div class="row customshadow p-4">
                        <div class="col-lg-12">
                            <h3 class="Certificate">Enter Landlord Info</h3>
                        </div>
                        <div class="my-3 col-12">
                            <input type="text" class="form-control" name="full_name1[]" required
                                placeholder="Full Name *" />
                        </div>

                        <div class="my-3 col-12">
                            <input type="email" class="form-control" name="email1[]" required
                                placeholder="Email Address *" />
                        </div>

                        <div class="my-3 col-12">
                            <input type="tel" class="form-control" name="contact_no[]" required
                                placeholder="Contact Number *" />
                        </div>
                        <div class="col-12 landlord_wrapper">

                        </div>
                        <div class="mt-lg-5 col-12 text-right ">
                            <button class="btn success addmorelandlord btn-sm mt-lg-3">Add another</button>
                        </div>
                    </div>
                </div>
                <!-- {/* Tenant Detail */} -->
                <div class="col-lg-6  p-lg-5 p-4">
                    <div class="row customshadow p-4">
                        <div class="col-lg-12">
                            <h3 class="Certificate">Enter Tenant Detail</h3>
                        </div>
                        <div class="my-3 col-12">
                            <input type="text" class="form-control" name="full_name[]" required
                                placeholder="Full Name *" />
                        </div>
                        <div class="my-3 col-12">
                            <input type="email" class="form-control" name="email[]" required
                                placeholder="Email Address *" />
                        </div>
                        <div class="my-3 col-12">
                            <input type="tel" class="form-control" name="mobile_no[]" required
                                placeholder="Contact Number *" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="date" class="form-control" name="tenancy_start_date[]" id="" required
                                placeholder="Move in Date *" />
                        </div>
                        <div class="my-3 col-lg-12">
                            <input type="date" class="form-control" name="tenancy_last_date[]" id="" required
                                placeholder="Move out Date *" />
                        </div>
                        <div class="col-lg-12 tenant_waraper">

                        </div>
                        <div class="mt-lg-5 col-12 text-right ">
                            <button class="btn success addtenant btn-sm mt-lg-3">Add another</button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!-- ajax submition -->
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
                $('#addressList').append(`<option>--Select-- </option>`);
                for (var i = 0; i < items.length; i++) {
                    $('#addressList').append(`<option value="${items[i].line_1}"> ${items[i].line_1 + ' ' + items[i].line_2 + ' ' + items[i].town_or_city + ' ' + items[i].county} </option>`);
                }
            },
            error: function (xhr, ajaxOptions, error, thrownError) {
                alert(xhr.status);
                console.log(error)
            }
        });
    }

    // form submition
    $('#myform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{URL('property')}}",
            data: $('#myform').serialize(),
            type: 'POST',
            error: function (request, status, error) {
                toastr.warning(request.responseText);
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Update');
            },
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

<!-- show tenant checkbox -->
<script type="text/javascript">
    function valueChanged() {
        if ($('.showtenant').is(":checked"))
            $(".showtenantdiv").show();
        else
            $(".showtenantdiv").hide();
    }
</script>

<!-- add another tenant  -->
<script>
    $(".addtenant").click(function (e) {
        e.preventDefault();
        $(".tenant_waraper").append('<div class="tenant-wraper row"><div class="col-lg-12 text-right"><a class= "btn btn-sm btn-outline-danger removetenantbtn" > Remove </a > </div > <div class="my-3 col-lg-12"> <input type="text" class="form-control" name="full_name[]" required id="" placeholder="Full Name *" /> </div><div class="my-3 col-lg-12"> <input type="email" class="form-control" name="email[]" id="" required placeholder="Email Address" /> </div> <div class="my-3 col-lg-12"><input type="tel" class="form-control" name="mobile_no[]" id="" required placeholder=" Contact Number" /></div><div class= "my-3 col-lg-12"><input type="date" class="form-control" name="tenancy_start_date[]" id="" required placeholder="Move in Date *" /> </div><div class="my-3 col-lg-12"><input type = "date" class= "form-control" name = "tenancy_last_date[]" id = "" required placeholder = "Move out Date *" /></div ></div>');
    });
    $("body").on("click", ".removetenantbtn", function () {
        $(this).parents(".tenant-wraper").remove();
    });
</script>

<!-- add another landlord -->
<script>
    $(".addmorelandlord").click(function (e) {
        e.preventDefault();
        $(".landlord_wrapper").append('<div class="landlord-wraper row"><div class="col-lg-12 text-right"><a class= "btn btn-sm btn-outline-danger removelandlordbtn" > Remove</a > </div ><div class="my-3 col-lg-12"><input type="text" class="form-control" name="full_name1[]" id="" placeholder="First Name *" required /> </div><div class="my-3 col-lg-12"><input type="email" class="form-control" name="email1[]" id="" required placeholder="Email Address *" /> </div> <div class= "my-3 col-lg-12" > <input type="tel" class="form-control" name="contact_no[]" id="" required placeholder="Contact Number  " /></div ></div>');
    });

    $("body").on("click", ".removelandlordbtn", function () {
        $(this).parents(".landlord-wraper").remove();
    });
</script>
@endsection