@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{URL::asset('assets/css/contractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/mapview.css')}}">

<style>
    .cards .card-body p {
        font-size: 15px;
    }

    #searchbtn {
        width: 30px !important;
    }

    #card {
        position: absolute;
        right: 20px;
        top: 75px;
        height: 100vw;
        box-shadow: 0px 3px 6px #00000029;
        border: 2px solid #407C1E;
        opacity: 1;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        display: flex;
        flex-direction: column;
        visibility: hidden;
    }

    @media screen and (max-width: 480px) {
        #card {
            right: 15px;
            top: 220px;
        }
    }

    .message_img {
        width: 53px;
        height: 63px;
        border-radius: 14px;
    }

    #card .msg_info .sender {
        color: #407C1E;
        font-size: 14px !important;
        font-weight: 600 !important;
    }

    #card .message {
        font-size: 7px;
    }

    .message1 {
        width: 100%;
        display: flex;
        background-color: #E6FCDA;
        border-radius: 6px;
    }

    #card .minutes {
        font-size: 10px;
        padding-top: 0% !important;
        margin-top: -10px;
        color: #737475;
        font-weight: 700;
    }
</style>


<div class="container-fluid  pr-0">
    <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-lg-0 pt-0 position-relative ">
            <div class="topnav py-2">
                <div>
                    <a class="fa fa-chevron-left mt-1" href=""></a>
                    <a href="">
                        <h5>Map View</h5>
                    </a>
                </div>
                <div class="search-container ">
                    <form>
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
        <div class="col-lg-3 p-3  col-10" id="card">
            <div>
                <button type="button" id="close" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="message1  p-1 my-3">
                <div class="  text-center">
                    <img src="{{URL::asset('assets/imgs/img/user/user1.png')}}" class="message_img mt-1" alt=""
                        srcSet="" />
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
                    <img src="{{URL::asset('assets/imgs/img/user/user2.png')}}" class="message_img mt-1" alt=""
                        srcSet="" />
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
                    <img src="{{URL::asset('assets/imgs/img/user/user2.png')}}" class="message_img mt-1" alt=""
                        srcSet="" />
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
    </div>
</div>

<script>
    // hide and
    document.getElementById("searchbtn").addEventListener("click", function (event) {
        event.preventDefault();
        var x = document.getElementById('card');
        if (x.style.visibility === "hidden") {
            x.style.visibility = "visible";
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

</script>

@endsection