@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">

<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i  class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Add Contractor</span>
    </div>
    <div class="p-3">
        <form action="" class="row addform ">
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
                    <input type="text" class="form-control" name=""  placeholder="Enter Business" />
                </div>
                
            </div>
            <!-- {/* column 1st */} -->
            <div class="col-lg-5  offset-lg-1">
                <div class="my-3">
                    <label htmlFor="">First Name *</label>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter first name" />
                </div>
                <div class="my-3">
                    <label htmlFor="" class="mt-3">
                        Mobile No *
                    </label>
                    <input type="tele" class="form-control" name="" id="" placeholder="Enter Mobile NO" />
                </div>
                <div class="my-3">
                    <label htmlFor="" class="mt-3">
                        Phone No *
                    </label>
                    <input type="tele" class="form-control" name="" id="" placeholder="Enter Phone NO" />
                </div>
                <div class="my-3">
                    <label htmlFor="" class="mt-3">
                        Email *
                    </label>
                    <input type="Email" class="form-control" name="" id="" placeholder="Enter Email" />
                </div>
                <div class="my-3">
                    <label htmlFor="" class="mt-3">
                        Area of Coverage *
                    </label>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Area of Coverage" />
                </div>
                <div class="my-3">
                    <label htmlFor="" class="mt-3">
                        Agreed Rate *
                    </label>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Area of Coverage" />
                </div>
                <div class="my-3">
                    <label htmlFor="" class="mt-3">
                        Business Address *
                    </label>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Area of Coverage" />
                </div>
                <div class="my-3">
                    <label htmlFor="" class="mt-3">
                        Recommendation *
                    </label>
                    <select name="" class="form-control" id="">
                        <option value="">1st</option>
                    </select>
                </div>
                <div class="my-3">
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
            </div>
            <!-- {/* 2nd column */} -->
            <div class="col-lg-5 ">
                <div class="my-3">
                    <label htmlFor=""> Last Name *</label>
                    <input type="text" class="form-control" name="" id="" placeholder="Enter Last Name" />
                </div>

                <div class="my-3">
                    <label htmlFor="" class="mt-3">
                        Preferred Communication *
                    </label>
                    <select name="" class="form-control" id="">
                        <option value="">1st</option>
                        <option value="">2nd</option>
                    </select>
                </div>
                <div class="my-3">
                    <label htmlFor="" class="mt-3">
                        Select Services *
                    </label>
                    <select name="" class="form-control" id="">
                        <option value="">1st</option>
                        <option value="">2nd</option>
                    </select>
                </div>
                <div class="my-3">
                    <label htmlFor="" class="mt-3">
                        Add Group
                    </label>
                    <select name="" class="form-control" id="">
                        <option value="">1st</option>
                        <option value="">2nd</option>
                    </select>
                </div>
                <div class="my-3">
                    <label htmlFor="" class="mt-3">
                        Notes
                    </label>
                    <textarea class="form-control" name="" id="" cols="30" rows="7"></textarea>
                </div>
            </div>

            <!-- {/* add certificate */} -->
            <div class="col-lg-5 offset-lg-1  ">
                <div class="my-5">
                    <h2 class="Certificate">Add Certificate</h2>
                </div>
                <div class="my-3">
                    <label htmlFor="">Title *</label>
                    <input type="text" class="form-control" name="" id="" placeholder="Title of your certificate" />
                </div>
                <div class="my-5">
                    <label htmlFor=""> Description *</label>
                    <input type="text" class="form-control mt-4" name="" id="" placeholder="Text Message" />
                </div>
                <div class="my-5">
                    <label htmlFor="">Upload Attachment *</label>
                    <input type="file" class="form-control" name="" id="" placeholder="Text Message" />
                </div>
            </div>
            <!-- {/* Add ID */} -->
            <div class="col-lg-5    ">
                <div class="my-5">
                    <h2 class="Certificate">Add ID </h2>
                </div>
                <div class="my-3">
                    <label htmlFor="">Title *</label>
                    <input type="text" class="form-control" name="" id="" placeholder=" Title of your ID" />
                </div>
                <div class="my-5">
                    <label htmlFor=""> Description *</label>
                    <input type="text" class="form-control mt-4" name="" id="" placeholder="Text Message" />
                </div>
                <div class="my-5">
                    <label htmlFor="" class="custom-file-upload">
                        Upload Attachment *
                    </label>
                    <input type="file" class="form-control" name="" id="" placeholder="Text Message" />
                </div>
            </div>
            <div class="col-lg-4   text-center offset-lg-4 p-0">
                <button class="btn btn-green btn-block">Add</button>
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

@endsection