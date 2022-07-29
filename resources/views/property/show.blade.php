@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">

<style>
    th,
    td {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        color: #737475;
    }

    td {
        font-weight: 100;
    }

    .dropdown-menu {
        border: 2px solid var(--unnamed-color-407c1e);
        background: transparent url('img/Rectangle 1535.png') 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 6px #00000029;
        border: 2px solid #407C1E;
        border-radius: 10px;
        opacity: 1;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
    }

    .dropdown-menu .dropdown-item:hover {
        background-color: #407C1E;
        color: white;
    }
</style>

<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 ">
        <span><a href="{{ URL::previous() }}"><i class="fa fa-chevron-left mr-4" aria-hidden="true"></i></a></span>
        <span class="span">&nbsp;&nbsp; Property Details</span>
    </div>
    <div class="p-3">
        <div class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="row">
                    <div class="col-lg-12 mt-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span>
                                <h5 class="Certificate">Property Details</h5>
                            </span>
                            <div>
                                <a href="{{url('job')}}/property" class="btn btn-21C5DB btn-sm">Add new Job</a>

                                <div class="btn btn-warn btn-sm">Assign Tenant</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div class="col_border p-3">
                            <p class="text-title">Address: <br>
                                <span>
                                    {{ $property->first_line_address}}
                                    {{ $property->second_line_address}}
                                </span>
                            </p>

                            <p class="text-title">Unique Code: <br>
                            <div class="d-flex justify-content-between">
                                <span id="uniquecode" style="font-size: 14px;color: #737475;font-weight: 100;">
                                    {{$property->property_id}}
                                </span>
                                <div type="button" onclick="copy_data()" class="btn btn-warn btn-sm">
                                    <i class="fa fa-clone" aria-hidden="true"></i>
                                    Copy
                                </div>
                            </div>
                            </p>
                            <p class="text-title">Notes: <br>
                                <span> {{$property->Notes}}</span>
                            </p>
                            <div class="w-100 text-right">
                                <a href="{{ url('property/'.$property->id.'/edit') }}"
                                    class="btn btn-38BF67 btn-sm">Edit Property</a>
                            </div>
                        </div>
                    </div>
                    <!-- Compliance Report -->
                    <div class="col-lg-6 mb-3">
                        <div class="col_border p-3">
                            <p class="text-title">Compliance Report: <br>
                                <span> <input type="checkbox" name="" id="">&nbsp;&nbsp; Electrical Safty Check</span>
                                <br>
                                <span> <input type="checkbox" name="" id="">&nbsp;&nbsp; Gas Safty Check</span>
                                <br>
                                <span> <input type="checkbox" name="" id="">&nbsp;&nbsp; Enery Performance Check</span>

                            <p class="text-title">Additional Reports: <br>
                                <span> <input type="checkbox" name="" id="">&nbsp;&nbsp; Energy Performance Check</span>
                                <br>
                                <span> <input type="checkbox" name="" id="">&nbsp;&nbsp;Inspection Report </span>
                                <br>
                            </p>
                            <div class="w-100 text-right">
                                <a href="{{url('electrical-check/'.$property->id)}}" class="btn btn-sm btn-38BF67">Add
                                    Certificate</a>
                            </div>
                        </div>
                    </div>
                    <!-- Landlord Info. * -->
                    <div class="col-lg-12 mt-lg-3">
                        <h5 class="Certificate">Landlord Info. *</h5>
                        <table class="table text-center bg-white rounded shadow border">
                            <thead class="thead-inverse">
                                <tr class="">
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($landlord !=null)
                                <tr>
                                    <td>{{$landlord->full_name}} </td>
                                    <td>{{$landlord->contact_no}} </td>
                                    <td>{{$landlord->email}} </td>
                                    <td>
                                        <form action="{{ url('landlord' , $landlord->id ) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <div class="bg-danger success rounded ">
                                                <button class="fa fa-trash text-white btn-sm btn "
                                                    type="submit"></button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td colspan="4"> sorry No data avalible </td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <!-- Tenant Info. * -->
                    <div class="col-lg-12 mt-lg-3">
                        <h5 class="Certificate">Tenant Info. *</h5>
                        <table class="table text-center bg-white rounded shadow border">
                            <thead class="thead-inverse">
                                <tr class="">
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Tenancy Expiry Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($tenant_property !=null)
                                @foreach($tenant_property as $tenant)
                                <tr>
                                    <td>{{$tenant->detail->first_name}} {{$tenant->detail->last_name}}</td>
                                    <td>{{$tenant->detail->mobile_no}}</td>
                                    <td>{{$tenant->detail->email}}</td>
                                    <td>{{$tenant->tenancy_last_date}}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-white dropdown-toggle" type="button"
                                                id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Select
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <button class="dropdown-item" type="button">Action</button>
                                                <button class="dropdown-item" type="button">Another action</button>
                                                <button class="dropdown-item" type="button">Something else here</button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="5"> Sorry no data Avalible </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- Associated jobs *-->
                    <div class="col-lg-12 mt-lg-3">
                        <h5 class="Certificate">Associated jobs *</h5>
                        <table class="table text-center bg-white rounded shadow border">
                            <thead class="thead-inverse">
                                <tr class="">
                                    <th>Case No.</th>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!$jobs->isEmpty())
                                @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->case_no}}</td>
                                    <td>{{$job->subject}}</td>
                                    <td>{{$job->description}}</td>
                                    <td>{{$job->status}}</td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td colspan="4">
                                        <p>sorry no job found</p>
                                    </td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <!-- Chat History -->
                    <div class="col-lg-12 mt-lg-3">
                        <h5 class="Certificate">Chat History</h5>
                        <div class="card Chat bg-white rounded shadow ">
                            <div class="contractor card-body p-3">
                                <div class="border_rounded p-2">
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="card-title m-0">Contractor</h6>
                                        <small class="card-text font-weight-bold">24 Sep, 2022
                                            &nbsp;&nbsp; 02:44 pm
                                        </small>
                                    </div>
                                    <small>
                                        Lorem ipsum dolor sit amet, cons etetur sadip scing elitr, sed diam nonumy eir
                                        mod
                                        tempor invidunt ut labore et dolore
                                        magna aliq uyam erat, sed diam vol uptua. At vero eos et accusam et justo duo
                                        dolores et ea rebum. Stet clita kasd
                                        gube rgren, no sea takimata san ctus est Lorem ipsum dolor sit amet. Lorem ipsum
                                        dolor sit amet, consetetur sadip scing
                                        elitr.
                                    </small>
                                </div>
                            </div>
                            <div class="you card-body p-3">
                                <div class="border_rounded_you p-2">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="card-title m-0">
                                            YOU
                                        </h6>
                                        <small class="card-text font-weight-bold">
                                            24 Sep, 2022 &nbsp;&nbsp;&nbsp; 02:44 pm
                                        </small>
                                    </div>
                                    <small>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                        eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                        dolores et ea rebum. Stet clita kasd
                                        gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                                        dolor sit amet, consetetur sadipscing
                                        elitr.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $('#gridCheck1').on('click', function () {
        var is_checked = $(this).is(':checked');
        if (is_checked) {
            $('#Businessman').show();
        }
        else {
            $('#Businessman').hide();
        }
    });
</script>

<!-- ajax submition -->
<script>
    $(' myform').submit(function (e) {
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


<script>

    function copy_data() {
        var range = document.createRange();
        range.selectNode(document.getElementById("uniquecode")); //changed here
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand("copy");
        window.getSelection().removeAllRanges();
        alert("data copied");
    }
</script>

@endsection