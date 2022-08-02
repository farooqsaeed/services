@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">
<style>
    table {
        table-layout: fixed;
    }
</style>

<div class="container-fluid addcontractor companydetails  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp;Company Details</span>
    </div>
    <div class="row p-4">
        <div class="col-lg-6 offset-lg-3 ">
            <form id="company_detailform" class="customshadow p-5" enctype="multipart/form-data" method="post" action="{{route('store.company.detail')}}" >
                @csrf 
                @method('put')
                <div class="row card-body">
                    <div class="col-lg-5 pr-0">
                        <input type="text" onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}"
                            placeholder="Opening Time" name="opening_hour" class="form-control" id="">
                    </div>
                    <div class="col-lg-2 text-center pt-2 ">
                        to
                    </div>
                    <div class="col-lg-5 pl-0">
                        <input type="text" onfocus="(this.type='time')" onblur="if(this.value==''){this.type='text'}"
                            placeholder="Closing Time" name="closing_hour" class="form-control" id="">
                    </div>
                    <div class="col-lg-12 my-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile" name="logo">
                            <label class="custom-file-label" for="inputGroupFile"
                                aria-describedby="inputGroupFileAddon">
                                Upload Company Logo</label>
                        </div>
                    </div>
                    <div class="col-lg-12 my-3">
                        <input type="tel" name="phone" class="form-control" placeholder="Phone Number" id="">
                    </div>
                    <div class="col-lg-12 mt-5">
                        <button id="formbtn" type="submit" class="btn btn-suc btn-block">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $(' company_detailform').submit(function (e) {
            e.preventDefault();
             $('#formbtn').attr('disabled', true);
            $('#formbtn').text('Please wait...');
            $.ajax({
                url: "{{route('store.company.detail')}}",
                data: $('#company_detailform').serialize(),
                type: 'PUT',
                error: function (request, status, error) {
                    alert(request.responseText);
                },
                success: function (result) {
                    $('#company_detailform')['0'].reset();
                    $('#formbtn').attr('disabled', true);
                    $('#formbtn').text('update');
                    toastr.success(result.result);
                }
            })
        });
    })
</script>
@endsection