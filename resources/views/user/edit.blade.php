@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/user.css')}}">

<style>
    input[type=checkbox] {
        margin-left: -3px;
    }
</style>
<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Edit User</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform ">
            @csrf
            <!-- {/* user Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="mt-5">
                    <h2 class="Certificate">Edit User details</h2>
                </div>
                <div class="row">
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Full Name *</label>
                        <input type="text" class="form-control" name="name" value="{{$user->name}}"
                            placeholder="Enter Full Name *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Email *</label>
                        <input type="email" class="form-control" name="email" 
                        value="{{$user->email}}"
                        placeholder="Enter Email *" />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor=""> Password *</label>
                        <input type="password" disabled class="form-control" name="password" placeholder="Enter password " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Role *</label>
                        <select name="role" class="form-control">
                            <option selected disabled>Select role</option>
                            @foreach($roles as $role)
                            <option value="{{$role->slug}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Root Group *</label>
                        <input type="text" class="form-control" name="group" placeholder="Enter Root Group " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Sub-Group *</label>
                        <input type="text" class="form-control" name="sub-group" placeholder="Enter Sub-Group " />
                    </div>
                    <div class="my-3 col-lg-6">
                        <label htmlFor="">Child Group *</label>
                        <input type="text" class="form-control" name="childgroup" id=""
                            placeholder="Enter Child Group" />
                    </div>
                    <div class="my-3 col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <label htmlFor="">Permission*</label>
                            </div>
                            <div class="col-lg-1 col-md-2 col-3 p-lg-0 ">
                                <br>
                                Select All
                                <br>
                                Property
                                <br>
                                Tenant
                                <br>
                                Users
                                <br>
                                Groups
                                <br>
                                Jobs
                                <br>
                                Engineers
                            </div>
                            <div class="col-lg-1 col-3 text-center">
                                <p class="mb-1 p-0 ">Read</p>
                                <input type="checkbox" class="form-check-input" name="" id="">
                                <br>
                                <input type="checkbox" class="form-check-input" name="" id=""><br>
                                <input type="checkbox" class="form-check-input" name="" id=""><br>
                                <input type="checkbox" class="form-check-input" name="" id="">
                                <br>
                                <input type="checkbox" class="form-check-input" name="" id="">
                                <br>
                                <input type="checkbox" class="form-check-input" name="" id="">
                                <br>
                                <input type="checkbox" class="form-check-input" name="" id="">
                            </div>
                            <div class="col-lg-1 col-3 text-center">
                                <p class="mb-1 p-0 ">Write</p>
                                <input type="checkbox" class="form-check-input" name="" id="">
                                <br>
                                <input type="checkbox" class="form-check-input" name="" id=""><br>
                                <input type="checkbox" class="form-check-input" name="" id=""><br>
                                <input type="checkbox" class="form-check-input" name="" id="">
                                <br>
                                <input type="checkbox" class="form-check-input" name="" id="">
                                <br>
                                <input type="checkbox" class="form-check-input" name="" id="">
                                <br>
                                <input type="checkbox" class="form-check-input" name="" id="">
                            </div>
                        </div>
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
                    value="Add">Update</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ajax submition -->
<script>
    $(' myform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{URL('tenant')}}",
            data: $('#myform').serialize(),
            type: 'POST',
            error: function (request, status, error) {
                toastr.warning(request.responseText);
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Update');
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