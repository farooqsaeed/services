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

<div class="container-fluid addcontractor companydetails p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp;Set Contractor Priority</span>
    </div>
    <div class="row p-4">
        <div class="col-lg-6 offset-lg-3 ">
            <form id="contractorpriority" action="{{route('setting.set.contractor.priority')}}" method="post"
                class="customshadow p-5">
                @csrf
                @method('put')
                <div class="row card-body">
                    <div class="col-lg-12 text-center">
                        <h4>
                            Set Contractor Priority
                        </h4>
                    </div>
                    <div class="col-lg-12 my-3">
                        <label for="">First level</label>
                        <input type="text" name="level_one" placeholder="First level" class="form-control"
                            value="{{$setting->level_one}}">
                    </div>
                    <div class="col-lg-12 my-3">
                        <label for="">First Level's Description</label>
                        <textarea name="description_one" value="{{$setting->description_one}}" class="form-control"
                            cols="30" rows="3">First Level's Description</textarea>
                    </div>
                    <div class="col-lg-12 my-3">
                        <label for="">Second Level</label>
                        <input type="text" class="form-control" name="level_second" value="{{$setting->level_second}}"
                            placeholder="Second Level" />
                    </div>
                    <div class="col-lg-12 my-3">
                        <label for="">Second Level's Description</label>
                        <textarea name="description_second" value="{{$setting->description_second}}"
                            class="form-control" cols="30" rows="3">Second Level's Description</textarea>
                    </div>
                    <div class="col-lg-12 my-3">
                        <label for="">Third Level</label>
                        <input type="text" class="form-control" placeholder="Third Level"
                            value="{{$setting->level_third}}" name="level_third" />
                    </div>
                    <div class="col-lg-12 my-3">
                        <label for="">
                            Third Level's Description
                        </label>
                        <textarea name="description_third" value="{{$setting->description_third}}" class="form-control"
                            cols="30" rows="3">Third Level's Description</textarea>
                    </div>
                    <div class="col-lg-12">
                        <button id="formbtn" type="submit" class="btn btn-suc btn-block">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection