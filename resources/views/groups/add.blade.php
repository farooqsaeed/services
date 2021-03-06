@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp; Create Group</span>
    </div>
    <div class="p-3">
        <form id="groupform" class="row addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="row mt-5">
                    <div class="my-3 col-lg-12">
                        <label htmlFor="">Name *</label>
                        <input type="text" class="form-control" name="Group_Name" id="" required
                            placeholder="Enter Group Name" />
                    </div>
                    <div class="col-lg-4 col-6 mt-5">
                        <button type="reset" class="btn btn-outline-success btn-block ">Cancel</button>
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
            url: "{{URL('groups')}}",
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