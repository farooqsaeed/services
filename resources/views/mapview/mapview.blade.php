@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{URL::asset('assets/css/contractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/mapview.css')}}">

<style>
    .cards .card-body p {
        font-size: 15px;
    }
</style>


<div class="container-fluid">
    <div class="row p-0">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pt-0">
            <div class="topnav py-2">
                <div>
                    <a class="fa fa-chevron-left mt-1" href=""></a>
                    <a href="">
                        <h5>Map View</h5>
                    </a>
                </div>
                <div class="search-container">
                    <form action="/action_page.php">
                        <button id="searchbtn" type="submit"><i class="fa fa-search"></i>
                        </button>
                        <input type="text" placeholder="Search for Properties/Contractors…" name="search">
                    </form>
                </div>
            </div>
        </div>
    </div>
   <div class="row p-0 m-0">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  p-0 m-0">
            <div class="card border-0  p-0 m-0">
                <div class="card-body p-0 pt-1">
                    <div class="card-text  ">
                        <iframe style="border:0;width: 100%;height: 85vh;" loading="lazy" allowfullscreen
                            src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJL3KReNC_3zgRtgLbO1xRWWA&key=AIzaSyB7w1C4-GX4D8Drr-aLnOtUyB2MxMUR2_Y"></iframe>
                    </div>
                </div>
            </div>
        </div>
 
</div>
</div>


@endsection