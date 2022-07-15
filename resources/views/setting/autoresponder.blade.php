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
    <div class="add  mt-0 d-flex align-items-center" >
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp; Auto Responder</span>
    </div>
    <div class="row p-4">
        <div class="col-lg-6 my-3">
            <form action="" class="card customshadow">
                <div class="card-body">
                    <h4 class="card-title">Email</h4>
                    <div class="card-text px-4">
                        <textarea name="" class="form-control" id="" cols="30"
                            rows="10">Thank you for submitting case</textarea>
                        <button class="btn btn-suc btn-block mt-4"> Save</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-6 my-3">
            <form action="" class="card customshadow">
                <div class="card-body">
                    <h4 class="card-title">App Message</h4>
                    <div class="card-text px-4">
                        <textarea name="" class="form-control" id="" cols="30"
                            rows="10">Thank you. Your case has now been submitted</textarea>
                        <button class="btn btn-suc btn-block mt-4"> Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection