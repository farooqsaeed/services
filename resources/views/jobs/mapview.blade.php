@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/mapview.css')}}">
 
<style>
 

</style>
<div class="container-fluid addcontractor p-0 position-relative">
    <div class="add mt-0 d-flex justify-content-between" >
        <span class="d-flex align-items-center">
            <span>
                <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
            </span>
            <span class="span"> &nbsp;&nbsp;&nbsp; Map View</span>
        </span>
        <div class="notification mt-3 position-relative">
            <i class="fa fa-sort-amount-desc" aria-hidden="true">|</i>
            <input type="text" class="searchform" name="" placeholder="Search Properties or Contractors" id="">
            <div class="search_result row p-3">
                <div class="w-100 text-right">
                    <i class="fa fa-times" aria-hidden="true"></i>
                </div>
                <div class="border shadow">
                      <div class="col-4">
                        <img src="{{URL::asset('assets/imgs/img/user1.png')}}" class="w-100 h-100" alt="" srcset="">
                      </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-dark m-0">
        <!-- {/* Property Details */} -->
        <div class="col-lg-12 px-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3319.050112397286!2d73.04786871476432!3d33.707652180701125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfb0f4f77379%3A0xf8c50b8651f56d02!2sThe%20Centaurus%20Mall%20Islamabad!5e0!3m2!1sen!2s!4v1658917391015!5m2!1sen!2s"
                style="border:0; width:100%;height:100vh" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<!-- active class -->



@endsection