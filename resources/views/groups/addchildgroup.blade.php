@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Create a Child-Group</span>
    </div>
    <div class="p-3">
        <form id="groupform" class="row addform">
            @csrf
             <div class="col-lg-10 offset-lg-1  ">
                <div class="row mt-5">
                    <div class="my-3 col-lg-12">
                        <label htmlFor="">Sub-Group Name *</label>
                        <input type="text" class="form-control" name="" id="" disabled value="Mardan" />
                    </div>
                    <div class="my-3 col-lg-12">
                        <label htmlFor="">Name *</label>
                        <input type="text" class="form-control" required name="Child_Group_Name" id="" placeholder="Enter Group Name" />
                    </div>
                    <div class="my-3 col-lg-12">
                        <input type="hidden" class="form-control" value="1" name="Child_Group_ID" id="" />
                    </div>
                    <div class="my-3 col-lg-12">
                        <input type="hidden" class="form-control" value="1" name="subgroup_id" id="" />
                    </div>
                    <div class="col-lg-4 col-6 mt-5">
                        <button  type="submit" class="btn btn-outline-success btn-block ">Cancel</button>
                    </div>
                    <div class="col-lg-4 col-6 offset-lg-4   mt-5">
                        <button id="formbtn" type="submit" class="btn btn-info success btn-block ">Save</button>
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
    $('#groupform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{URL('store_childgroups')}}",
            data: $('#groupform').serialize(),
            type: 'POST',
            error: function (request, status, error) {
                alert(request.responseText);
            },
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#groupform')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
                toastr.success(result.result);
                window.location.replace("/groups");
            }
        })
    })

</script>



@endsection