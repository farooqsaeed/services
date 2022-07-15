@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">

<style>
    #date {
        width: 49%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }
</style>

<div class="container-fluid addcontractor contractorpriority  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp; Contractor Compliance</span>
    </div>
    <div class="row p-4">
        <div class="col-lg-6 offset-lg-3 ">
            <div class="card customshadow ">
                <div class="card-body">
                    <form action="" class="px-5">
                        <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option>Contractor Name</option>
                                <option>khan baba</option>
                                <option>khan lala</option>
                                <option>khan mama</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option>Complience Name</option>
                                <option>Excuse </option>
                                <option>Excuse</option>
                            </select>
                        </div>
                        <div class="w-100 my-3">
                            <input placeholder="Issue Date" class="d-inline-block  " type="text"
                                onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
                            <input placeholder="Issue Date" class="d-inline-block  " type="text"
                                onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option>Select Task</option>
                                <option> Task 1</option>
                                <option>Task 2</option>
                            </select>
                        </div>
                        <div class="btn btn-suc btn-suc btn-block mt-5">Save</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection