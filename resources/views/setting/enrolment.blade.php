@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">


<div class="container-fluid addcontractor enrollment  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp; Enrollment</span>
    </div>
    <div class="row p-4">
        <div class="col-lg-6 offset-3 ">
            <form id="welcome_form">
                @csrf
                @method('put')
                <div class="card-deck">
                    <div class="card">
                        <div class="card-body">
                            <h4 cass="card-title mb-0 pb-0">Welcome Message</h4>
                            <small>Display of Welcome Message on App</small>
                            <textarea name="welcome_message" class="form-control my-3" id="welcome_message" cols="30"
                                rows="8">{{$setting->welcome_message}} </textarea>
                            <button id="formbtn" type="submit" class="btn btn-suc btn-block">Update</button>
                        </div>
                    </div>
                    <!-- <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0 pb-0">Tenant Enrolment ID</h4>
                        <br>
                        <form method="post" class="mt-3">
                            <label for="">Phone Number</label>
                            <input type="tel" class="form-control" />
                            <br>
                            <label for="">Enrollment Key</label>
                            <input type="text" class="form-control" />
                        </form>
                        <br>
                        <div class="btn btn-suc btn-block mt-3">Generate</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0 pb-0">Engineer Enrolment ID</h4>
                        <small>Concern: Hopefully blocking ID should not stop contractor from using app who have already
                            been signed up.</small>
                        <form method="post" class="mt-3">
                            <label for="">Phone Number</label>
                            <input type="tel" class="form-control" />
                            <br>
                            <label for="">Enrollment Key</label>
                            <input type="text" class="form-control" />
                        </form>
                        <br>
                        <div class="btn btn-suc btn-block mt-3">Generate</div>
                    </div>
                </div> -->
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('#formbtn').prop('disabled', true);
        $('#welcome_message').keyup(function () {
            if ($(this).val() != '') {
                $('#formbtn').prop('disabled', false);
            }
        });

        $('#welcome_form').submit(function (e) {
            e.preventDefault();
            var name = $('#welcome_message').val();
            $('#formbtn').attr('disabled', true);
            $('#formbtn').text('Please wait...');
            $.ajax({
                url: "{{route('store.enrolment')}}",
                data: $('#welcome_form').serialize(),
                type: 'PUT',
                error: function (request, status, error) {
                    alert(request.responseText);
                },
                success: function (result) {
                    $('#welcome_form')['0'].reset();
                    $('#welcome_message').val(name);

                    $('#formbtn').attr('disabled', true);
                    $('#formbtn').text('update');
                    toastr.success(result.result);
                }
            })
        });


    })
</script>
@endsection