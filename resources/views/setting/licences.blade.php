@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">
 

<div class="container-fluid addcontractor Lisence  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp; License</span>
    </div>
    <div class="row p-4">
        <div class="col-lg-10 offset-lg-1 d-flex justify-content-center align-items-center" style="height: 70vh;">
            <h6>
                9.9 Licences <br> License will be based n total number of properties <br> Need further discussion on below: <br> 1 Active Property= 1
                License 1 <br> Archive Property= ¼ License or perhaps archive properties are deleted after 30 or 90 days <br> Need to understand
                system’s impact if we keep inactive property.
            </h6>
         </div>
    </div>
</div>

@endsection