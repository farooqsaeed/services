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
        <span>
            <i class="fa fa-chevron-left mr-4" aria-hidden="true"></i>
        </span>
        <span>Property Details</span>
    </div>
    <div class="p-3">
        <div   class="row addform ">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="row">
                    <div class="my-3 col-lg-12 mt-4">
                        <div class="d-flex justify-content-between">
                            <h2 class="Certificate">Property Details</h2>
                            <div>
                                <div class="btn btn-38BF67 btn-sm">Edit Jobs</div>
                                <div class="btn btn-21C5DB btn-sm">Landlord Approval</div>
                                <div class="btn btn-5869C1 btn-sm">Get Quote</div>
                                <div class="btn btn-warning btn-sm">Assign Engineer</div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-lg-12 col_border   p-3">
                        <p class="text-title">Address: <span> {{$property->first_line_address}}
                                {{$property->second_line_address}} </span> </p>
                        <p class="text-title">Notes: <span> {{$property->Notes}}</span> </p>

                    </div>
                    <!-- Landlord Info. * -->
                    <div class="col-lg-12">
                        <h2 class="Certificate">Landlord Info. *</h2>
                        <table class="table text-center  table-bordered  table-inverse  ">
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
                                            <div class="bg-danger rounded ">
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
                    <div class="col-lg-12">
                        <h2 class="Certificate">Tenant Info. *</h2>
                        <table class="table text-center  table-bordered  table-inverse  ">
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
                    <div class="col-lg-12">
                        <h2 class="Certificate">Associated jobs *</h2>
                        <table class="table text-center  table-bordered  table-inverse  ">
                            <thead class="thead-inverse">
                                <tr class="">
                                    <th>Case No.</th>
                                    <th>Subject</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jobs as $job)
                                <tr>
                                    <td>{{$job->case_no}}</td>
                                    <td>{{$job->subject}}</td>
                                    <td>{{$job->description}}</td>
                                    <td>{{$job->status}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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



@endsection