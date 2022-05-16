@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Add Properties</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h2 class="Certificate">Enter Property Details</h2>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">1st line Address *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="1st line Address *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">2nd line Address *</label>
                        <input type="text" class="form-control" name="" id=""
                            placeholder="Enter 2nd line Address *     " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Town *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter   Town " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Post code *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Post code *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="" class="mb-lg-5">Notes *</label>
                        <input type="text" class="form-control mt-lg-5" name="" id=""
                            placeholder="Enter Text Message" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">No. of Tenants </label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter No. of Tenants" />
                        <label htmlFor="" class="mt-3">Managed by *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Managed   " />
                    </div>
                </div>
            </div>

            <!-- {/* Landlord Info */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h2 class="Certificate">Enter Landlord Info</h2>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Full Name *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Full Name *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Email Address *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Email Address " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Contact Number *</label>
                        <input type="tel" class="form-control" name="" id="" placeholder="Enter   Contact Number  " />
                    </div>
                    <div class="my-3 col-lg-12 text-right">
                        <button class="btn btn-info success btn-sm">Add Another</button>
                    </div>
                </div>
            </div>

            <!-- {/* Tenant Detail */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h2 class="Certificate">Enter Tenant Detail</h2>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Full Name *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Full Name *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Last Name *</label>
                        <input type="text" class="form-control" name="" id="" placeholder="Enter Last Name " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Contact Number *</label>
                        <input type="tel" class="form-control" name="" id="" placeholder="Enter   Contact Number  " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Email Address *</label>
                        <input type="email" class="form-control" name="" id="" placeholder="Enter Email Address *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Move in Date *</label>
                        <input type="date" class="form-control" name="" id="" placeholder="Enter   Contact Number  " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Move out Date *</label>
                        <input type="date" class="form-control" name="" id="" placeholder="Enter   Contact Number  " />
                    </div>
                    <div class="my-3 col-lg-6 ">
                        <input type="checkbox" name="" id=""> Send Sign Up Info.
                    </div>
                    <div class="my-3 col-lg-6 text-right">
                        <button class="btn btn-info success btn-sm">Add Another</button>
                    </div>

                    <div class="my-3 col-lg-4">
                        <button class="btn btn-outline-success btn-block">Cancel</button>
                    </div>
                    <div class="my-3 col-lg-4 offset-lg-4 text-right">
                        <button class="btn btn-success   btn-block">SAVE</button>
                    </div>
                </div>
            </div>

            <!-- {/*  Bulk Upload   */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <h2 class="Certificate">Bulk Upload</h2>
                    </div>
                    <div class="my-3 col-lg-6 text-right">
                        <button class="btn btn-info success btn-sm">Add Another</button>
                    </div>
                    <div class="my-3 col-lg-12">
                        <div class="dropzone-wrapper">
                            <div class="dropzone-desc">
                                <i class="glyphicon glyphicon-download-alt"></i>
                                <p>Select file to upload</p>
                            </div>
                            <input type="file" name="img_logo" class="dropzone">
                        </div>
                        <p class="excel">Only Excel and CSV File are allowed. Please check the template before uploading file!</p>
                    </div>
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
                    value="Add">Upload</button>
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
    $('#myform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{URL('contractors')}}",
            data: $('#myform').serialize(),
            type: 'POST',
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#myform')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
            }
        })
    })

</script>

<!-- drag adn drop -->
<script>
    // Code By Webdevtrick ( https://webdevtrick.com )
    function readFile(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var htmlPreview =
                    '<img width="200" src="' + e.target.result + '" />' +
                    '<p>' + input.files[0].name + '</p>';
                var wrapperZone = $(input).parent();
                var previewZone = $(input).parent().parent().find('.preview-zone');
                var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

                wrapperZone.removeClass('dragover');
                previewZone.removeClass('hidden');
                boxZone.empty();
                boxZone.append(htmlPreview);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    function reset(e) {
        e.wrap('<form>').closest('form').get(0).reset();
        e.unwrap();
    }

    $(".dropzone").change(function () {
        readFile(this);
    });

    $('.dropzone-wrapper').on('dragover', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).addClass('dragover');
    });

    $('.dropzone-wrapper').on('dragleave', function (e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).removeClass('dragover');
    });

    $('.remove-preview').on('click', function () {
        var boxZone = $(this).parents('.preview-zone').find('.box-body');
        var previewZone = $(this).parents('.preview-zone');
        var dropzone = $(this).parents('.form-group').find('.dropzone');
        boxZone.empty();
        previewZone.addClass('hidden');
        reset(dropzone);
    });
</script>


@endsection