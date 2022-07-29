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

    input[type="checkbox"] {
        accent-color: #38BF67;
    }

    .btn-group {
        background-color: white;
    }

    .btn-group .active {
        background-color: #38BF67;
        color: white !important;
    }
</style>

<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp;&nbsp; Get Quote</span>
    </div>
    <div class="p-3">
        <form id="get_quote_form" class="row addform">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-6 px-lg-5 p-4">
                <div class="row shadow rounded p-4">
                    <!-- select Hours -->
                    <div class="mt-3 col-lg-12">
                        <h6 class="Certificate">Select Hours</h5>
                    </div>
                    <div class="mt-3 col-lg-12 hours">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-white active rounded btn-sm px-4 mr-2">
                                <input type="radio" name="hours" autocomplete="off" value="online" checked> 8 hours
                            </label>
                            <label class="btn btn-white btn-sm rounded px-4">
                                <input type="radio" value="Offline" name="hours" autocomplete="off">
                                Out Of Hours
                            </label>
                        </div>
                    </div>
                    <!--Filter by Status- App-->
                    <div class="mt-3 col-lg-12">
                        <h6 class="Certificate">Filter by Status- App</h5>
                    </div>
                    <div class="mt-3 col-lg-12 Status">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-white active rounded btn-sm px-4 mr-2">
                                <input type="radio" name="status-app" autocomplete="off" value="online" checked> Online
                            </label>
                            <label class="btn btn-white btn-sm rounded px-4">
                                <input type="radio" value="Offline" name="status-app" autocomplete="off">
                                Offline
                            </label>
                        </div>
                    </div>
                    <!-- Filter by Group -->
                    <div class="mt-3 col-lg-12">
                        <h6 class="Certificate">Filter by Category</h5>
                    </div>
                    <div class="mt-3 col-lg-12 Group">
                        <table class="tables">
                            <tr>
                                <td>
                                    <input type="checkbox" name="category[]" value="Electrician" id="">
                                    &nbsp;&nbsp;&nbsp;
                                    Electrician
                                </td>
                                <td>
                                    <input type="checkbox" name="category[]" value="Plumber" id=""> &nbsp;&nbsp;&nbsp;
                                    Plumber
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="category[]" value="Locksmith" id=""> &nbsp;&nbsp;&nbsp;
                                    Locksmith
                                </td>
                                <td>
                                    <input type="checkbox" name="category[]" value="Guard" id=""> &nbsp;&nbsp;&nbsp;
                                    Guard
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="category[]" value="Keyholder" id=""> &nbsp;&nbsp;&nbsp;
                                    Keyholder
                                </td>
                                <td>
                                    <input type="checkbox" name="category[]" value="Cleaner" id=""> &nbsp;&nbsp;&nbsp;
                                    Cleaner
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox" name="category[]" value="Handyman" id=""> &nbsp;&nbsp;&nbsp;
                                    Handyman
                                </td>
                            </tr>
                        </table>
                    </div>
                    <!-- Filter by Radius -->
                    <div class="mt-3 col-lg-12">
                        <h6 class="Certificate">Filter by Radius</h5>
                    </div>
                    <div class="mt-3 col-lg-12 ">
                        <div class="form-group Radius">
                            <select class="form-control" name="radius" id="">
                                <option value="Electrician">Electrician</option>
                                <option value="Plumber">Plumber</option>
                                <option value="Handyman">Handyman</option>
                            </select>
                        </div>
                    </div>
                    <!-- Filter by Group -->
                    <div class="mt-3 col-lg-12">
                        <h6 class="Certificate">Filter by Group</h5>
                    </div>
                    <div class="mt-3 col-lg-12 ">
                        <select name="group" id="" class="form-control">
                            <option>Khan Electric</option>
                            <option value="Khan Electric">Khan Electric</option>
                            <option value="Khan Electric">Khan Electric</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- 2nd column -->
            <div class="col-lg-6 px-lg-5 p-4">
                <div class="row shadow rounded p-4">
                    <div class="mt-3 col-lg-12">
                        <h6 class="Certificate">Select Engineer</h6>
                    </div>
                    <div class="my-3 col-lg-12 ">
                        <input type="search" placeholder="search engineer" name="" class="form-control" id="myInput"
                            onkeyup="myFunction()">
                    </div>
                    <div class="my-3 col-lg-12 ">
                        <table class="table text-left contractors_table" id="myTable">
                            <tbody>
                                <tr>
                                    <td colspan="5">
                                        <input id="select-all" type="checkbox" name=""> Select All
                                    </td>
                                </tr>
                                @foreach($contractors as $contractor)
                                <tr id="myUL">
                                    <td>
                                        <input type="checkbox" name="engineer_id[]" value="{{$contractor->id}}">
                                    </td>
                                    <td colspan="2">{{$contractor->business_name}}</td>
                                    <td>
                                        @if( $contractor->isMobile ===0)
                                        <img class="off" src="{{URL::asset('assets/imgs/icons/mobileoff.png')}}" alt="">
                                        @else
                                        <img class="off" src="{{URL::asset('assets/imgs/icons/mobileon.png')}}" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <span class="badge badge-success">{{$contractor->priority}}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="my-3 col-lg-12">
                        <h6>Note</h6>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-around">
                        <div>
                            <input type="checkbox" name="" id="">
                            <small class="badge badge-success">P1</small> <small>Use as first Choice</small>
                        </div>
                        <div>
                            <input type="checkbox" name="" id="">
                            <small class="badge badge-success">P1</small> <small>Use as second choice</small>
                        </div>
                        <div>

                            <input type="checkbox" name="" id="">
                            <small class="badge badge-success">P1</small> <small> Use as third choice</small>
                        </div>

                    </div>
                    <div class="col-lg-12 my-3 p-3">
                        <button type="button" class="btn btn-suc btn-block" data-toggle="modal"
                            data-target="#modelId_quote">
                            Next </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div>
        <!-- Modal -->
        <div class="modal fade modal" id="modelId_quote" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form action="{{route('store.get.quote')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-center py-3 rounded border">
                                            <h3 class="m-0 p-0">Notification</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3 d-flex align-items-stretch">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="modal-header py-2">
                                                <div class="form-check">
                                                    <label class="form-check-label modal-title">
                                                        <input type="checkbox" class="form-check-input" name="email" id=""
                                                            value="Email">
                                                        Email
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="modal-header py-2">
                                                <div class="form-check">
                                                    <label class="form-check-label modal-title">
                                                        <input type="checkbox" class="form-check-input" name="text_message" id=""
                                                          value="text"  checked >
                                                        Text Message
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="p-2">
                                                <h6>Job Info</h6>
                                                <small >
                                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                                    nonumy
                                                    eirmod
                                                    tempor invidunt ut labore et dolore
                                                    magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                                                    justo
                                                    duo
                                                    dolores et ea rebum. Stet clita kasd
                                                    gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                                                    Lorem
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
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox"  class="form-check-input" name="effort" value="effort">
                                                Best effort
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-3 p-4">
                                        <button type="button" class="btn btn-outline-success btn-block"
                                            data-dismiss="modal">Close</button>
                                    </div>
                                    <div class="col-md-6 mt-3 p-4">
                                        <button type="submit" class="btn btn-suc  btn-block">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- ajax submition -->
<script>
    $(' get_quote_form').submit(function (e) {
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

<script>
    // script for contractors checkbox for select all
    $('#select-all').click(function (event) {
        if (this.checked) {
            // Iterate each checkbox
            $('.contractors_table :checkbox').each(function () {
                this.checked = true;
            });
        } else {
            $('.contractors_table :checkbox').each(function () {
                this.checked = false;
            });
        }
    });
    // search
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

@endsection