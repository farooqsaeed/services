@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/jobs.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/compliance.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/calender.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/contractors.css')}}">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



<style>
  .cards .card a {
    color: white;
    text-decoration: none;
  }

  .dropdown-menu {
    background: transparent 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 6px #00000029;
    border: 2px solid #407C1E;
    border-radius: 10px;
    opacity: 1;
    backdrop-filter: blur(5px);
    -webkit-backdrop-filter: blur(5px);
    padding: 2%;
  }

  .dropdown-menu ul li a:hover {
    text-decoration: none;
    border-radius: 2px;
  }

  .dropdown-menu li a {
    text-decoration: none;
    border-radius: 2px;
    color: #407C1E !important;

  }

  .dropdown-submenu {
    position: relative;
  }

  .dropdown-submenu .dropdown-menu {
    background-color: white !important;
    top: 120%;
    left: 30%;
    margin-top: -1px;
  }

  form .fa,
  form p {
    color: #407C1E;
  }

  .DetailCards .col-lg-3 a {
    text-decoration: none;
  }
</style>


<div class="container-fluid">
  <div class="row ">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0 map_view  ">
      <a href="/mapview">
        <div class=" Header d-none  d-sm-block">
          <div class="row  ">
            <div class="col-lg-3">
              <h2>Map View</h2>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
      <div class="card py-0 my-0 border-0  BreadCrumb_card">
        <div class="card-body py-0 my-0">
          <div class="d-flex justify-content-between my-0 align-self-center">
            <span class="card-title my-0 ml-n2"><i class="fa fa-th-large" aria-hidden="true"></i>
              Dashboard</span>

            <div class="notification mt-3">
              @include('../layouts/header')
            </div>
          </div>
          <div class="card-text p-0 mb-0 mt-0 ml-lg-4">
            <ol class="breadcrumb bg-white">
              <li class="breadcrumb-item ml-lg-n3">
                <a href='/'>&nbsp; Overview </a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  pt-0">
      <div class="cards d-lg-flex justify-content-lg-around align-self-center">
        <div class="card card1 w-100">
          <a href="newjobs">
            <div class="card-body">
              <div class="fa fa-suitcase fa-2x"></div>
              <h4 class="card-title">10,345</h4>
              <p class="card-text ">New Jobs</p>
            </div>
          </a>
        </div>
        <div class="card card2 w-100">
          <div class="card-body">
            <div class="fa fa-comment fa-2x"></div>
            <h4 class="card-title">103</h4>
            <p class="card-text">New Messages </p>
          </div>
        </div>
        <div class="card card3 w-100">
          <div class="card-body">
            <div class="fa fa-calendar fa-2x"></div>
            <h4 class="card-title">215</h4>
            <p class="card-text"> Calendar events</p>
          </div>
        </div>
        <div class="card card4 w-100">
          <a href="events_complience">
            <div class="card-body">
              <div class="fa fa-exclamation-triangle fa-2x"></div>
              <h4 class="card-title">215</h4>
              <p class="card-text">Compliance</p>
            </div>
          </a>
        </div>
        <div class="card card5 w-100">
          <div class="card-body">
            <div class="fa fa-home fa-2x"></div>
            <br />
            <p>
              <span>Property:</span> <span class="card-title">3674</span>
            </p>
            <p><a href="contractors"><span>Contactors:</span> <span class="card-title">159</span></a>

            </p>
            <p class="card-text">Assets</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12   pt-0" id="myid">
      <div class="jobs d-lg-flex justify-content-lg-between  align-items-stretch   ">
        <div class="col-lg-3 my-3 p-1 ">
          <div class="card1 card shadow">
            <div class="card-header">Open Jobs</div>
            <div class="card-body">
              <p>
                <span class="card-text">Awaiting Contractor:</span>
                <span class="card-title"> 159</span>
              </p>
              <p>
                <span class="card-text">Awaiting Tenant:</span>
                <span class="card-title">159</span>
              </p>
              <p>
                <span class="card-text">Action Required:</span>
                <span class="card-title">159</span>
              </p>
              <p>
                <span class="card-text">Engineer Visit Due:</span>
                <span class="card-title">159</span>
              </p>
              <p>
                <span class="card-text">Resolved:</span>
                <span class="card-title">159</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 my-3 p-1 ">
          <div class="card2  card shadow pb-2">
            <div class="card-header">
              Job Age <small>(Emergency / Non-Emergency)</small>
            </div>
            <div class="card-body p-2 mt-3  ">
              <div class="Emergency w-50 text-center ">
                <p>Emergency</p>
              </div>
              <h4 class="days">&nbsp;&nbsp;&nbsp; 7 days</h4>

              <hr class="divider mt-lg-4 mb-5" />
              <div class="NonEmergency     ">
                <p>Non Emergency</p>
              </div>
              <h4 class="days">&nbsp;&nbsp;&nbsp;25 days</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-3 my-3 p-1">
          <div class="card3 card shadow">
            <div class="card-header">
              Avg. Response Time <small>(24 hrs)</small>
            </div>
            <div class="card-body pt-0 pb-2">
              <p class="mb-0 p-0 align-items-center">
                <span class="card-text   align-self-center">
                  <img src="{{URL::asset('assets/imgs/icons/hour.svg')}}" class="w-75" alt="" />
                </span>
                <span class="card-title mt-2  ">4 hrs</span>
              </p>
            </div>
          </div>
          <div class="card33 card mt-4 shadow pb-1">
            <div class="card-header">
              Avg. Job Close Time<small>(Days)</small>
            </div>
            <div class="card-body px-2">
              <div class="pb-0 mb-0 d-flex justify-content-between">
                <div class="Emergency   pb-0 ">
                  <p class="pb-0 mb-0">Emergency</p>
                </div>
                <div class="NonEmergency   pb-0  ">
                  <p class="mb-0 ">NoEmergency</p>
                </div>
              </div>
            </div>
            <div class="d-flex justify-content-around text-center px-2">
              <div class="days  ">
                3<sub class="subscript">(14 days)</sub>
              </div>
              <div class=" ">
                <div class="vr"></div>
              </div>
              <div class=" ">
                <p class=" days">
                  5 <sub class="subscript">(25 days)</sub>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 my-3 p-1">
          <div class="card1 card shadow">
            <div class="card-header">Job Categories</div>
            <div class="card-body p-0 mb-0">
              <div id="piechart" class="w-100"></div>

              <div class="donut mt-n2">
                <article class="pl-4 graph_label">
                  <span>
                    <i class="fa fa-circle mr-2 text-info" aria-hidden="true"></i>
                    Electrician
                  </span>
                  <br />
                  <span>
                    <i class="fa fa-circle mr-2 text-success" aria-hidden="true"></i>
                    Plumber
                  </span>
                  <br />
                  <span>
                    <i class="fa fa-circle mr-2 text-warning" aria-hidden="true"></i>
                    Handyman
                  </span>
                  <br />
                  <span>
                    <i class="fa fa-circle mr-2 text-danger" aria-hidden="true"></i>
                    Gas & Heating
                  </span>
                  <br />
                  <span>
                    <i class="fa fa-circle mr-2 text-purple" aria-hidden="true"></i>
                    Locksmith
                  </span>
                  <br />
                  <span>
                    <i class="fa fa-circle mr-2 text-info" aria-hidden="true"></i>
                    Drainage
                  </span>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- start -->
    <div class="col-lg-12 col-md-12 mt-2 col-sm-12 col-xs-12  ">
      <div class="DetailCards d-lg-flex justify-content-lg-between ">
        <div class="col-lg-3 my-2 p-1">
          <div class="card1 card shadow">
            <div class="card-header pb-1">
              <img class="" src="{{URL::asset('assets/imgs/icons/powerplug.svg')}}" alt="" srcSet="" />
              Electrician
            </div>
            <div class="card-body pb-0 mb-0">
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                </span>
                <span class="card-title"> 0</span>
                <span class="card-text">Active</span>
              </p>
              <p>
                <span class="card-title pending">
                  <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                </span>
                <span class="card-title">&nbsp;&nbsp; 0</span>
                <span class="card-text">Pending</span>
              </p>
              <p>
                <span class="card-title pending">
                  <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                </span>
                <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                <span class="card-text">Suspended</span>
              </p>
              <hr class="card_hr my-0" />
              <div class="footer text-center pb-0 my-1">
                <span class="TotalJobs">Total Jobs </span>
                <span class="Total"> 40,886</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 my-2 p-1">
          <a href="plumbers">
            <div class="card1 card shadow">
              <div class="card-header ">
                <img src="{{URL::asset('assets/imgs/icons/Plumber.svg')}}" alt="" srcSet="" /> Plumber
              </div>
              <div class="card-body pb-0 mb-0">
                <p>
                  <span class="card-title">
                    <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                  </span>
                  <span class="card-title"> 0</span>
                  <span class="card-text">Active</span>
                </p>
                <p>
                  <span class="card-title">
                    <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                  </span>
                  <span class="card-title">&nbsp;&nbsp; 0</span>
                  <span class="card-text">Pending</span>
                </p>
                <p>
                  <span class="card-title">
                    <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                  </span>
                  <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                  <span class="card-text">Suspended</span>
                </p>
                <hr class="card_hr my-0" />
                <div class="footer text-center pb-0 my-1">
                  <span class="TotalJobs">Total Jobs </span>
                  <span class="Total"> 40,886</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 my-2 p-1">
          <div class="card1 card shadow">
            <div class="card-header">
              <img src="{{URL::asset('assets/imgs/icons/Lock.svg')}}" alt="" srcSet="" /> Electrician
            </div>
            <div class="card-body pb-0 mb-0">
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                </span>
                <span class="card-title"> 0</span>
                <span class="card-text">Active</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                </span>
                <span class="card-title">&nbsp;&nbsp; 0</span>
                <span class="card-text">Pending</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                </span>
                <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                <span class="card-text">Suspended</span>
              </p>
              <hr class="card_hr my-0" />
              <div class="footer text-center pb-0 my-1">
                <span class="TotalJobs">Total Jobs </span>
                <span class="Total"> 40,886</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 my-2 p-1">
          <div class="card1 card shadow">
            <div class="card-header">
              <img src="{{URL::asset('assets/imgs/icons/tools.svg')}}" alt="" srcSet="" /> Handyman
            </div>
            <div class="card-body pb-0 mb-0">
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                </span>
                <span class="card-title"> 0</span>
                <span class="card-text">Active</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                </span>
                <span class="card-title">&nbsp;&nbsp; 0</span>
                <span class="card-text">Pending</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                </span>
                <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                <span class="card-text">Suspended</span>
              </p>
              <hr class="card_hr my-0" />
              <div class="footer text-center pb-0 my-1">
                <span class="TotalJobs">Total Jobs </span>
                <span class="Total"> 40,886</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="DetailCards my-3 d-lg-flex justify-content-lg-between ">
        <div class="col-lg-3 my-2 p-1">
          <div class="card1 card shadow">
            <div class="card-header">
              <img class="" src="{{URL::asset('assets/imgs/icons/Gas.svg')}}" alt="" srcSet="" /> Gas &
              Heating
            </div>
            <div class="card-body pb-0 mb-0">
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                </span>
                <span class="card-title"> 0</span>
                <span class="card-text">Active</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                </span>
                <span class="card-title">&nbsp;&nbsp; 0</span>
                <span class="card-text">Pending</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                </span>
                <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                <span class="card-text">Suspended</span>
              </p>
              <hr class="card_hr my-0" />
              <div class="footer text-center pb-0 my-1">
                <span class="TotalJobs">Total Jobs </span>
                <span class="Total"> 40,886</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 my-2 p-1">
          <div class="card1 card shadow">
            <div class="card-header pb-2">
              <img src="{{URL::asset('assets/imgs/icons/Drain.svg')}}" alt="" srcSet="" /> Drainage
            </div>
            <div class="card-body pb-0 mb-0">
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                </span>
                <span class="card-title"> 0</span>
                <span class="card-text">Active</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                </span>
                <span class="card-title">&nbsp;&nbsp; 0</span>
                <span class="card-text">Pending</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                </span>
                <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                <span class="card-text">Suspended</span>
              </p>
              <hr class="card_hr my-0" />
              <div class="footer text-center pb-0 my-1">
                <span class="TotalJobs">Total Jobs </span>
                <span class="Total"> 40,886</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 my-2 p-1">
          <div class="card1 card shadow">
            <div class="card-header">
              <img src="{{URL::asset('assets/imgs/icons/Pest.svg')}}" alt="" srcSet="" /> Pest control
            </div>
            <div class="card-body pb-0 mb-0">
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                </span>
                <span class="card-title"> 0</span>
                <span class="card-text">Active</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                </span>
                <span class="card-title">&nbsp;&nbsp; 0</span>
                <span class="card-text">Pending</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                </span>
                <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                <span class="card-text">Suspended</span>
              </p>
              <hr class="card_hr my-0" />
              <div class="footer text-center pb-0 my-1">
                <span class="TotalJobs">Total Jobs </span>
                <span class="Total"> 40,886</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 my-2 p-1">
          <div class="card1 card shadow">
            <div class="card-header">
              <img src="{{URL::asset('assets/imgs/icons/garden.svg')}}" alt="" srcSet="" /> Gardner
            </div>
            <div class="card-body pb-0 mb-0">
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                </span>
                <span class="card-title"> 0</span>
                <span class="card-text">Active</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                </span>
                <span class="card-title">&nbsp;&nbsp; 0</span>
                <span class="card-text">Pending</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                </span>
                <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                <span class="card-text">Suspended</span>
              </p>
              <hr class="card_hr my-0" />
              <div class="footer text-center pb-0 my-1">
                <span class="TotalJobs">Total Jobs </span>
                <span class="Total"> 40,886</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="DetailCards my-3 d-lg-flex justify-content-lg-start ">
        <div class="col-lg-3 my-2 p-1">
          <div class="card1 card shadow">
            <div class="card-header">
              <img class="" src="{{URL::asset('assets/imgs/icons/key.svg')}}" alt="" srcSet="" /> Key
              Holder
            </div>
            <div class="card-body pb-0 mb-0">
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                </span>
                <span class="card-title"> 0</span>
                <span class="card-text">Active</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                </span>
                <span class="card-title">&nbsp;&nbsp; 0</span>
                <span class="card-text">Pending</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                </span>
                <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                <span class="card-text">Suspended</span>
              </p>
              <hr class="card_hr my-0" />
              <div class="footer text-center pb-0 my-1">
                <span class="TotalJobs">Total Jobs </span>
                <span class="Total"> 40,886</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 my-2 p-1">
          <div class="card1 card shadow">
            <div class="card-header">
              <img src="{{URL::asset('assets/imgs/icons/other.svg')}}" alt="" srcSet="" /> Others
            </div>
            <div class="card-body pb-0 mb-0">
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/check.svg')}}" alt="" />
                </span>
                <span class="card-title"> 0</span>
                <span class="card-text">Active</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/Pending.svg')}}" alt="" srcSet="" />
                </span>
                <span class="card-title">&nbsp;&nbsp; 0</span>
                <span class="card-text">Pending</span>
              </p>
              <p>
                <span class="card-title">
                  <img src="{{URL::asset('assets/imgs/icons/prohibited.svg')}}" alt="" />
                </span>
                <span class="card-title">&nbsp;&nbsp;&nbsp; &nbsp; 0</span>
                <span class="card-text">Suspended</span>
              </p>
              <hr class="card_hr my-0" />
              <div class="footer text-center pb-0 my-1">
                <span class="TotalJobs">Total Jobs </span>
                <span class="Total"> 40,886</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  pt-0">
      <div class="compliance d-lg-flex justify-content-lg-between">
        <div class="col-lg-6   my-2 p-1">
          <div class="card1 card shadow">
            <div class="card-header">Compliance</div>
            <div class="card-body">
              <div class="clocks d-flex justify-content-between">
                <div class="w-100  p-1 text-center  ">
                  <div class="w-100">

                  </div>
                  <div class="progress  mt-3">
                    <div class=" progress-bar  bg-success" role="progressbar" style='width: 100%' aria-valuenow="25"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <article class="compliance_text mt-4">
                    Electrical Safety Check
                  </article>
                  <span class="compliance_data">Data not available</span>
                </div>
                <div class="w-100  p-1 text-center">
                  <div class="w-100">

                  </div>

                  <div class="progress   mt-3 ">
                    <div class="progress-bar  bg-success" role="progressbar" style='width: 60%' aria-valuenow="15"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar  bg-warning" role="progressbar" style='width: 40%' aria-valuenow="30"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <article class="compliance_text mt-4">
                    GAS Safety Check
                  </article>
                  <span class="compliance_data">2 certs about to expire</span>
                </div>
                <div class="w-100 p-1 text-center">
                  <div class="w-100">

                  </div>
                  <div class="progress    mt-3">
                    <div class="progress-bar  bg-success" role="progressbar" style='width: 33%' aria-valuenow="15"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar  bg-warning" role="progressbar" style='width: 33%' aria-valuenow="30"
                      aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar  bg-danger" role="progressbar" style='width: 33%' aria-valuenow="30"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <div class="text-center mt-4">
                    <article class="compliance_text">
                      Fire safety risk assessment
                    </article>
                    <span class="compliance_data">
                      Not Compliant (2 certs expired)
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 my-2 p-1">
          <div class="message_card card shadow">
            <div class="card-header">Messages</div>
            <div class="card-body w-100 p-3 ">
              <div class="message1  p-1">
                <div class="  text-center">
                  <img src="{{URL::asset('assets/imgs/img/user/user1.png')}}" class="message_img mt-1" alt=""
                    srcSet="" />
                </div>
                <div class="pl-2 mb-0">
                  <p class="  msg_info pb-0 mb-0">
                    <span class="sender mb-0">Tenant 1 </span>
                    <span class="small">5min</span>
                  </p>
                  <p class="pb-0 mb-0">
                  <article class="message pl-1 pt-0 mt-0 pb-0 mb-0">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                  </article>
                  <small class="rounded">5</small>
                  </p>
                  <p class="minutes mb-0">2 minutes ago</p>
                </div>
              </div>
              <div class="message2 mt-1 p-1">
                <div class="text-center">
                  <img src="{{URL::asset('assets/imgs/img/user/user3.png')}}" class="message_img mt-1" alt=""
                    srcSet="" />
                </div>
                <div class="pl-2 mb-0">
                  <p class="  msg_info pb-0 mb-0">
                    <span class="sender mb-0">Tenant 3 </span>
                    <small>50min</small>
                  </p>
                  <p class="pb-0 mb-0">
                  <article class="message pl-1 pt-0 mt-0 pb-0 mb-0">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                  </article>
                  </p>
                  <p class="minutes mb-0">2 minutes ago</p>
                </div>
              </div>
              <div class="message3 mt-1 p-1">
                <div class="  text-center">
                  <img src="{{URL::asset('assets/imgs/img/user/user2.png')}}" class="message_img mt-1" alt=""
                    srcSet="" />
                </div>
                <div class="pl-2 mb-0">
                  <p class="msg_info pb-0 mb-0">
                    <span class="sender mb-0">Tenant 3 </span>
                    <small>50min</small>
                  </p>
                  <p class="pb-0 mb-0">
                  <article class="message pl-1 pt-0 mt-0 pb-0 mb-0">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                  </article>
                  <small class="rounded">2</small>
                  </p>
                  <p class="minutes mb-0">2 minutes ago</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 my-2  p-1  ">
          <div class="card1 card shadow">
            <div class="card-header">Calendar</div>
            <div class="card-body p-2 pb-3">
              <div class="calendar ">
                <div class="header">
                  <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
                  <div class="text" data-render="month-year"></div>
                  <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
                </div>
                <div class="months" data-flow="left">
                  <div class="month month-a">
                    <div class="render render-a"></div>
                  </div>
                  <div class="month month-b">
                    <div class="render render-b"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end -->
      </div>
    </div>
  </div>
</div>

<script rel="script" src="{{URL::asset('assets/js/calender.js')}}">
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
  google.charts.load('current', { 'packages': ['corechart'] });
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Electrician', 8],
      ['Plumber', 6],
      ['Handyman', 5],
      ['Gas & Heating', 4],
      ['Locksmith', 3],
      ['Drainage', 2]
    ]);

    var options = {
      legend: 'none'      // title: 'My Daily Activities'
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    chart.draw(data, options);
  }
</script>


@endsection