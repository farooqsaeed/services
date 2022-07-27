@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/showjob.css')}}">


<style>
    .dropdowntoggle {
        background-color: white;
        color: green;
        border: 1px solid green;
    }

    .fixedPosition {
        position: fixed;
        bottom: 0px !important;
        left: 0%;
        right: 0;
        margin-top: 20px;
        z-index: 1;
    }
</style>

<div class="container-fluid addcontractor jobshow p-0 position-relative">
    <div class="add mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp;&nbsp;&nbsp; Job Details</span>
    </div>
    <div class="p-3">
        <div id="myform" class="row addform ">
            <!-- {/* Property Details */} -->
            <div class="col-lg-10 offset-lg-1  ">
                <div class="row">
                    <div class="my-3  col-lg-12 mt-4">
                        <div class="d-flex justify-content-between flex-wrap">
                            <h3 class="Certificate">Job Details</h3>
                            <div>
                                <div class="btn btn-21C5DB btn-sm d-inline-block">
                                    <a title="edit job" href="{{URL('landlord-approval/'.$job->id) }}">
                                        Landlord Approval</a>
                                </div>
                                <div class="btn btn-engineer btn-sm d-inline-block">Get Quote</div>

                                <div class="btn btn-38BF67 btn-sm text-white d-inline-block"> Close Jobs
                                </div>
                                <div class="dropdown d-inline-block">
                                    <div class="btn btn-suc btn-sm dropdown-toggle" type="button" id="triggerId"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    </div>
                                    <div class="dropdown-menu " aria-labelledby="triggerId">
                                        <a class="dropdown-item active" href="#">
                                            <small>
                                                <i class="fa fa-clone" aria-hidden="true"></i>
                                                Duplicate
                                            </small>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <small>
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                                Download
                                            </small>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-lg-6">
                        <div class="card customshadow">
                            <div class="card-body">
                                <p class="text-title">Case Number:
                                    <span>
                                        {{$job->case_no}}</span>
                                </p>
                                <p class="text-title">Property Address:
                                    <span>{{$property->first_line_address}}
                                        {{$property->second_line_address}}
                                    </span>
                                </p>
                                <p class="text-title">Reported By:
                                    <span> Nill</span>
                                </p>
                                <p class="text-title">Job Reported Through:
                                    <span> Mobile</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-lg-6 ">
                        <div class="card customshadow">
                            <div class="card-body">
                                <form id="updateJob" action="{{route('jobs.update',$job->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group row">
                                        <div class="col-3">
                                            <label for="">Severity:</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="form-control" name="severity" id="">
                                                <option>Non-Emergency</option>
                                                <option>Emergency</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-3">
                                            <label for="">Status:</label>
                                        </div>
                                        <div class="col-9">
                                            <select class="form-control" name="status" id="">
                                                <option>New</option>
                                                <option>Active</option>
                                                <option>Pending</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class="col-3 ">
                                            <label for="">Assignment:</label>
                                        </div>
                                        <div class="col-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Username"
                                                    aria-label="Username" name="assignment"
                                                    aria-describedby="basic-addon1">
                                                <a class="btn btn-suc" href="{{route('assign.engineer',$job->id)}}"
                                                    id="basic-addon1"><small>Assign Engineer</small></a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 my-3">
                        <div class="customshadow p-3">
                            <p class="text-title">Issue Report:</p>
                            <span>
                                <img src="{{URL::asset('assets/imgs/icons/Group 1831.svg')}}" alt="">
                            </span><i class="fa fa-chevron-right" aria-hidden="true"></i>

                            <span>
                                <img src="{{URL::asset('assets/imgs/icons/Group 1811.svg')}}" alt="">
                            </span><i class="fa fa-chevron-right" aria-hidden="true"></i>

                            <span>
                                <img src="{{URL::asset('assets/imgs/icons/Group 1893.svg')}}" alt="">
                            </span>
                            <br> <br>
                            <p class="text-title">Description: </p>
                            <span> {{$job->description}} Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Perferendis ducimus hic eaque autem explicabo molestiae fugiat,
                                tempora, cum asperiores doloribus,</span>
                            <br> <br>
                            <p class="text-title">Reported Issue:</p>
                            <span> Lorem ipsum dolor sit amet consectetur adipis icing elit. Perferendis ducimus hic
                                eaque
                                autem explicabo molestiae fugiat, tempora, cum asperiores doloribus, quod labore impedit
                                fugit? Repudiandae ut saepe eaque doloribus repellendus?
                            </span>
                            <br><br>
                            <p class="text-title">Attachment: </p>
                            <div class="attachment  px-4">
                                <img src="{{URL($job->attachment)}}" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <form id="jobnote">
                            @csrf
                            <div class="customshadow p-2">
                                <div class="col-lg-12 my-3">
                                    <textarea id="note" name="note" class="form-control mt-lg-5" required
                                        rows="5">Notes *</textarea>
                                </div>
                                <div class="col-12 text-right  mt-3">
                                    <button id="formbtn" type="submit" class="btn btn-info success btn-sm  px-4">Add
                                        Notes
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12 my-3">
                        <h3 class="my-3 font-weight-bold text-secondary">Activity</h3>
                        <div class="customshadow p-3">
                            <label for="">Notes</label>
                            <ul class="jobnote_ul">
                                @foreach($notes as $note)
                                <li>
                                    <h6 class="font-weight-bold mb-0">You</h6>
                                    {{$note->note}}
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12  fixedPosition  ">
                        <div class="row ">
                            <div class="col-md-3 offset-md-4 my-1">
                                <div class="btn btn-outline-success btn-block">Close</div>
                            </div>
                            <div class="col-md-3 offset-md-1 my-1">
                                <div type="submit" id="updateform" class="btn btn-suc btn-block">Save</div>
                            </div>
                        </div>
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
    $('#jobnote').submit(function (e) {
        e.preventDefault();
        $('#formbtn').attr('disabled', true);
        $('#formbtn').text('Please wait...');
        var note = $('#note').val();

        $.ajax({
            url: "{{URL('job-notes/'.$job->id) }}",
            data: $('#jobnote').serialize(),
            type: 'POST',
            error: function (request, status, error) {
                toastr.warning(request.responseText);
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('add');
            },
            success: function (result) {
                $('#message').html(result.result);
                $("#msgdiv").css({ display: "block" });
                $('#jobnote')['0'].reset();
                $('#formbtn').attr('disabled', false);
                $('#formbtn').text('Add');

                $(".jobnote_ul").append("<li>" + note + "</li>");
                toastr.success(result.result);
            }
        })
    })
</script>

<!-- active class -->
<script>
    $(".dropdown .dropdown-menu .dropdown-item").hover(function () {
        $(this).addClass('active')
            .siblings().removeClass('active')
    });

</script>

<script>
    $(document).ready(function () {
        $(".dropdown .dropdown-toggle").click(function () {
            $(".dropdown-toggle").toggleClass("dropdowntoggle");
        });
    });

    // submit the update form
    $(document).ready(function () {
        $("#updateform").click(function () {
            $('#updateJob').submit();
        })
    })
</script>


@endsection