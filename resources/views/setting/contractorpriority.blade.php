@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">
<style>
    table{
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
        <div class="col-lg-12">
            <h6 class="my-3 text-secondary">Set the contractor priority level name</h6>
            <table class="table table-bordered customshadow text-center my-3">
                <thead>
                    <tr>
                        <th>Level</th>
                        <th colspan="2">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>P1</td>
                        <td colspan="2">Use as first Choice</td>
                    </tr>
                    <tr>
                        <td>P2</td>
                        <td colspan="2">Use as second choice</td>
                    </tr>
                    <tr>
                        <td>P3</td>
                        <td colspan="2">Use as third choice</td>
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
                        <td>P1</td>
                        <td colspan="2">Use as first Choice</td>
                    </tr>
                    <tr>
                        <td>P2</td>
                        <td colspan="2">Confirm rate before using </td>
                    </tr>
                    <tr>
                        <td>P3</td>
                        <td colspan="2">Confirm with management before using</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection