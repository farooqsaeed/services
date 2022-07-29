@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{URL::asset('assets/css/contractors.css')}}">

<link rel="stylesheet" href="{{URL::asset('assets/css/mapview.css')}}">

<div class="container-fluid  pr-0">
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-lg-0 pt-0 position-relative ">
            <div class="topnav py-2">
                <div class="d-flex align-items-center">
                    <a class="fa fa-chevron-left mt-1" href=""></a>
                    &nbsp;&nbsp;&nbsp;&nbsp; <h5 class="mt-2">Map View</h5>

                </div>
                <div class="search-container d-none  d-sm-block">
                    <form>
                        <!-- <i  class=" fa fa-align-left mt-4 fa-rotate-45"
                            aria-hidden="true"></i> -->
                            <i  id="fa-align-left" class="bi bi-filter-right mt-1 fa-2x float-left "></i>
                        <button id="searchbtn" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                        <input type="text" placeholder="Search for Properties/Contractors…" name="search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-0 ">
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
        <div class="col-lg-3 p-3  col-10 p-3 d-none  d-sm-block " id="card">
            <div>
                <button type="button" id="close" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="message1 p-1 my-3">
                <div class="text-center">
                    <img src="{{URL::asset('assets/imgs/img/user/user1.png')}}" class="message_img " alt="" srcSet="" />
                </div>
                <div class="pl-2 mb-0">
                    <p class="msg_info pb-0 mb-0">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="sender mb-0"> Property 1 </span>
                    </p>
                    <p class="msg_info pb-0 mb-2 mt-n2">
                        <i class="fa fa-home" aria-hidden="true"></i> <span class="sender text-secondary mb-0 ">General
                            carpentry work</span>
                    </p>
                    <p class="minutes mb-2 "><i class="fa fa-map-marker" aria-hidden="true"></i> Monday, 18th at 8:00am
                    </p>
                    <p class="minutes mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Peshawar, Address (
                        Postal Code)</p>
                </div>
            </div>

            <div class="message1  p-1 my-3">
                <div class="  text-center">
                    <img src="{{URL::asset('assets/imgs/img/user/user2.png')}}" class="message_img " alt="" srcSet="" />
                </div>
                <div class="pl-2 mb-0">
                    <p class="msg_info pb-0 mb-0">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="sender mb-0">Contractor 3 </span>
                    </p>
                    <p class="msg_info pb-0 mb-2 mt-n2">
                        <i class="fa fa-home" aria-hidden="true"></i> <span class="sender text-secondary mb-0 ">
                            New Furniture making</span>
                    </p>
                    <p class="minutes mb-2 "><i class="fa fa-map-marker" aria-hidden="true"></i> Monday, 18th at 8:00am
                    </p>
                    <p class="minutes mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Peshawar, Address (
                        Postal Code)</p>
                </div>
            </div>

            <div class="message1  p-1 my-3">
                <div class="  text-center">
                    <img src="{{URL::asset('assets/imgs/img/user/user2.png')}}" class="message_img " alt="" srcSet="" />
                </div>
                <div class="pl-2 mb-0">
                    <p class="msg_info pb-0 mb-0">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <span class="sender mb-0">Contractor 3 </span>
                    </p>
                    <p class="msg_info pb-0 mb-2 mt-n2">
                        <i class="fa fa-home" aria-hidden="true"></i> <span class="sender text-secondary mb-0 ">
                            Door and Window Repair </span>
                    </p>
                    <p class="minutes mb-2 "><i class="fa fa-map-marker" aria-hidden="true"></i> Monday, 18th at 8:00am
                    </p>
                    <p class="minutes mb-0"><i class="fa fa-map-marker" aria-hidden="true"></i> Peshawar, Address (
                        Postal Code)</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 p-3 d-none  d-sm-block  col-10" id="sorting">
            <div>
                <button type="button" id="close1" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div>
                <form action="">
                    <div class="d-flex justify-content-start align-items-center">
                        <i class="fa fa-clock-o rounded success p-1 " aria-hidden="true"> </i>
                        <div>&nbsp; &nbsp; <b> Time</b></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">

                        <div class="form-check mt-3">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input text-success    " name="time" id=""
                                    value="checkedValue">6 - 8
                            </label>
                        </div>
                        <div class="form-check mt-3">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input text-success    " name="time" id=""
                                    value="checkedValue" checked>24/7
                            </label>
                        </div>
                    </div>
                    <hr>

                    <div class="d-flex justify-content-start align-items-center">
                        <i class="fa rounded success p-1 fa-bullseye" aria-hidden="true"> </i>
                        <div>&nbsp; &nbsp; <b> Skills</b></div>
                    </div>
                    <div class="pl-4">
                        <ul class="search_ul">
                            <li class="active m-2">Electrician</li>
                            <li class="m-2">Plumber</li>
                            <li class="m-2">Locksmith</li>
                            <li class="m-2">Handyman</li>
                            <li class="m-2">Guard</li>
                            <li class="m-2">Keyholder</li>
                            <li class="m-2">Other</li>
                        </ul>
                    </div>
                    <hr>
                    <div class="my-3"></div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // hide and
        document.getElementById("searchbtn").addEventListener("click", function (event) {
            event.preventDefault();
            var x = document.getElementById('card');
            var y = document.getElementById('sorting');

            if (x.style.visibility === "hidden") {
                x.style.visibility = "visible";
                y.style.visibility = "hidden";

                document.getElementById("close").addEventListener("click", function (event) {
                    event.preventDefault();
                    x.style.visibility = "hidden";
                });
            } else {
                x.style.visibility = "hidden";
            }
        });

        // when user click outside the div the search div will hide
        window.addEventListener('mouseup', function (event) {
            var box = document.getElementById('card');
            if (event.target != box && event.target.parentNode != box) {
                box.style.visibility = 'hidden';
            }
        });

        // sorting
        // hide and
        document.getElementById("fa-align-left").addEventListener("click", function (event) {
            event.preventDefault();
            var x = document.getElementById('sorting');
            var y = document.getElementById('card');
            if (x.style.visibility === "hidden") {
                x.style.visibility = "visible";
                y.style.visibility = "hidden";
                document.getElementById("close1").addEventListener("click", function (event) {
                    event.preventDefault();
                    x.style.visibility = "hidden";
                });
            } else {
                x.style.visibility = "hidden";
            }
        });


    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>

        $(function () {
            $('.search_ul li').mouseover(function () {
                $(this).addClass('active').siblings().removeClass('active');
            });
        });
    </script>

    @endsection