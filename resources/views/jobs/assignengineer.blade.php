@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/assignengineer.css')}}">
<style>
    td .on {
        width: 20%;
    }

    td .off {
        width: 20%;
    }

    .text-secondary {
        color: #B1B1B1 !important;
        font-size: 13px;
        font-weight: bold;
    }

    .modal input[type="checkbox"] {
        accent-color: #38BF67;
    }
</style>

<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp;&nbsp; Assign Engineer</span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-6 px-lg-5 p-4">
                <div class="row shadow rounded p-4">
                    <!-- select Hours -->
                    <div class="mt-3 col-lg-12">
                        <h6 class="Certificate">Select Hours</h5>
                    </div>
                    <div class="mt-3 col-lg-12 hours">
                        <div class="btn btn-suc px-4 btn-sm">8 hours</div>
                        <div class="btn px-4 btn-sm">Out Of Hours</div>
                    </div>

                    <!--Filter by Status- App-->
                    <div class="mt-3 col-lg-12">
                        <h6 class="Certificate">Filter by Status- App</h5>
                    </div>
                    <div class="mb-3 col-lg-12 Status">
                        <div class="btn btn-suc px-4 btn-sm">Online</div>
                        <div class="btn px-4 btn-sm">Offline </div>

                    </div>
                    <!-- Filter by Group -->
                    <div class="my-3 col-lg-12">
                        <h6 class="Certificate">Filter by Category</h5>
                    </div>
                    <div class="mb-3 col-lg-12 Group">
                        <table class="tables">
                            <tr>
                                <td>
                                    <button class="btn btn-sm btn-suc" type="button">
                                        Electrician
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-suc" type="button">
                                        Plumber
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-sm " type="button">
                                        Handyman
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-sm  " type="button">
                                        Locksmith
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-sm  " type="button">
                                        Guard
                                    </button>
                                </td>
                                <td>
                                    <button class="btn btn-sm " type="button">
                                        Keyholder
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button class="btn btn-sm " type="button">
                                        Cleaner
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <!-- Filter by Radius -->
                    <div class="my-3 col-lg-12">
                        <h6 class="Certificate">Filter by Radius</h5>
                    </div>
                    <div class="mb-3 col-lg-12 ">
                        <div class="Radius">

                            <div class="btn btn-sm btn-suc" type="button">
                                Electrician
                            </div>

                            <div class="btn btn-sm " type="button">
                                Plumber
                            </div>

                            <div class="btn btn-sm " type="button">
                                Handyman
                            </div>
                        </div>
                    </div>

                    <!-- Filter by Group -->
                    <div class="my-3 col-lg-12">
                        <h6 class="Certificate">Filter by Group</h5>
                    </div>
                    <div class="mb-3 col-lg-12 ">
                        <select name="" id="" class="form-control">
                            <option>Khan Electric</option>
                            <option value="">Khan Electric</option>
                            <option value="">Khan Electric</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 px-lg-5 p-4">
                <div class="row shadow rounded p-4">
                    <div class="mt-3 col-lg-12">
                        <h6 class="Certificate">Select Engineer</h6>
                    </div>
                    <div class="my-3 col-lg-12 ">
                        <input type="search" placeholder="search engineer" name="" class="form-control" id="">
                    </div>

                    <div class="my-3 col-lg-12 ">
                        <table class="table text-left table-bordered">
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td colspan="2">Ali Akbar</td>
                                    <td>
                                        <img class="off" src="{{URL::asset('assets/imgs/icons/icon/mobileoff.png')}}"
                                            alt="">
                                    </td>
                                    <td>
                                        <span class="badge badge-success">2</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td colspan="2">Ali Akbar</td>
                                    <td>
                                        <img class="on" src="{{URL::asset('assets/imgs/icons/icon/mobileon.png')}}"
                                            alt="">
                                    </td>
                                    <td>
                                        <span class="badge badge-success">2</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td colspan="2">Ali Akbar</td>
                                    <td>
                                        <img class="on" src="{{URL::asset('assets/imgs/icons/icon/mobileon.png')}}"
                                            alt="">
                                    </td>
                                    <td>
                                        <span class="badge badge-success">2</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td colspan="2">Ali Akbar</td>
                                    <td>
                                        <img class="off" src="{{URL::asset('assets/imgs/icons/icon/mobileoff.png')}}"
                                            alt="">
                                    </td>
                                    <td>
                                        <span class="badge badge-success">2</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td colspan="2">Ali Akbar</td>
                                    <td>
                                        <img class="on" src="{{URL::asset('assets/imgs/icons/icon/mobileon.png')}}"
                                            alt="">
                                    </td>
                                    <td>
                                        <span class="badge badge-success">2</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="checkbox" name="" id="">
                                    </td>
                                    <td colspan="2">Ali Akbar</td>
                                    <td>
                                        <img class="on" src="{{URL::asset('assets/imgs/icons/icon/mobileon.png')}}"
                                            alt="">
                                    </td>
                                    <td>
                                        <span class="badge badge-success">2</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="my-3 col-lg-12">
                        <h6>Note</h6>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div>
                            <span class="badge badge-success">P1</span> <small>Use as first Choice</small>
                        </div>
                        <div>
                            <span class="badge badge-success">P1</span> <small>Use as second choice</small>
                        </div>
                        <div>
                            <span class="badge badge-success">P1</span> <small> Use as third choice</small>
                        </div>

                    </div>
                    <div class="col-lg-12 my-3 p-3">
                        <div data-toggle="modal" data-target="#modelId" class="btn btn-suc btn-block">Assign</div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div>
        <!-- Modal -->
        <div class="modal fade modal" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="d-flex p-2 justify-content-around rounded border">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="" id=""
                                                    value="checkedValue">
                                                Email
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" name="" id=""
                                                    value="checkedValue" checked>
                                                Text Message
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3 d-flex align-items-stretch">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="modal-header py-2">
                                            <h6 class="modal-title">Email</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="modal-header py-2">
                                            <h6 class="modal-title">Text Message</h6>
                                        </div>
                                        <div class="p-2">
                                            <h6>Job Info</h6>
                                            <small>
                                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                                eirmod
                                                tempor invidunt ut labore et dolore
                                                magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
                                                duo
                                                dolores et ea rebum. Stet clita kasd
                                                gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                                                ipsum
                                                dolor sit amet, consetetur sadipscing
                                                elitr.
                                            </small>
                                        </div>
                                        <div class="p-2 d-flex justify-content-between ">
                                            <p>Attachment:</p>
                                            <div class="border w-100"></div>
                                            <div class="border w-100 mx-1"></div>
                                            <div class="border w-100"></div>
                                            <div class="border w-100  ml-1"></div>
                                        </div>
                                        <div class="p-2">
                                            <div class="text-secondary">Postcode: 01010100</div>
                                            <div class="text-secondary">Emergency:</div>
                                            <small>We need someone today</small>
                                            <div class="text-secondary mt-2">
                                                Link:
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mt-3 p-4">
                                    <button type="button" class="btn btn-outline-success btn-block"
                                        data-dismiss="modal">Close</button>
                                </div>
                                <div class="col-md-6 mt-3 p-4">
                                    <button type="button" class="btn btn-suc  btn-block">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ajax submition -->
<script>
    $('#myform').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        $.ajax({
            url: "{{URL('contractors')}}",
            data: $('#myform').serialize(),
            type: 'POST',
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#myform')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');
            }
        })
    })
</script>



<!-- button toggling -->
<script>
    // hours
    $(function () {
        $('.hours div').click(function () {
            $(this).addClass('btn-suc').siblings().removeClass('btn-suc');
        });
    });

    //status 
    $(function () {
        $('.Status div').click(function () {
            $(this).addClass('btn-suc').siblings().removeClass('btn-suc');
        });
    });

    // Group
    $(function () {
        $('.Group td button').click(function () {
            $(this).addClass('btn-suc').siblings().removeClass('btn-suc');
        });
    });

    // Radius
    $(function () {
        $('.Radius div').click(function () {
            $(this).addClass('btn-suc').siblings().removeClass('btn-suc');
        });
    });

</script>

@endsection