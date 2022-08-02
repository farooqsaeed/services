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

<div class="container-fluid addcontractor autoforwarding  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp; Contractor Priority</span>
    </div>
    <div class="row p-4">
        <div class="col-lg-12 ">
            <h6 class="my-3 text-secondary d-inline-block">Set the contractor priority level name</h6>
            <a href="{{route('setting.setcontractorpriority')}}" class="btn btn-suc btn-sm float-right d-inline-block">Edit</a>
        </div>
        <div class="col-lg-12">
            <table class="table table-bordered customshadow text-center my-3">
                <thead>
                    <tr>
                        <th>Level</th>
                        <th colspan="2">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{$setting->level_one}}
                        </td>
                        <td colspan="2">
                            {{$setting->description_one}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{$setting->level_second}}
                        </td>
                        <td colspan="2">
                            {{$setting->description_second}}
                        </td>
                    </tr>
                    <tr>
                        <td>{{$setting->level_third}}</td>
                        <td colspan="2">{{$setting->description_third}}</td>
                    </tr>
                </tbody>
            </table>

            <table class="table table-bordered customshadow text-center mt-4">
                <thead>
                    <tr>
                        <th>Level</th>
                        <th colspan="2">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            {{$setting->level_one}}
                        </td>
                        <td colspan="2">
                            {{$setting->description_one}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{$setting->level_second}}
                        </td>
                        <td colspan="2">
                            {{$setting->description_second}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            {{$setting->level_third}}
                        </td>
                        <td colspan="2">
                            {{$setting->description_third}}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection