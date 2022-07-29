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

    .custom-file-input~.custom-file-label::after {
        content: "Choose File" !important;
        background: transparent url('img/Rectangle 775.png') 0% 0% no-repeat padding-box;
        border: 1px solid #407C1E;
        border-radius: 5px;
        color: #407C1E;
    }

    .custom-file-label {
        background: transparent url('img/Upload Attachment *.png') 0% 0% no-repeat padding-box;
        opacity: 0.8;

    }

    .jobnote_email_ul li article,
    .jobnote_ul li article {
        font-size: 12px;
        line-height: 1;
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
                    <div class="my-3 col-lg-12 mt-4">
                        <div class="d-flex justify-content-between flex-wrap">
                            <h3 class="Certificate">Job Details</h3>
                            <div>
                                <div class="btn btn-21C5DB btn-sm d-inline-block">
                                    <a title="edit job" href="{{route('landlord',$job->id) }}">
                                        Landlord Approval</a>
                                </div>
                                <a href="{{route('get.quote')}}" style="text-decoration: none;color: #38BF67;"
                                    class="btn btn-engineer btn-sm d-inline-block">Get Quote</a>

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
                                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                                Job Summery
                                            </small>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <small>
                                                <i class="fa fa-print" aria-hidden="true"></i>
                                                Print
                                            </small>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-lg-6 ">
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
                                <p class="text-title">Mobile No:
                                    <span> {{$job->contact}}</span>
                                </p>

                                <p class="text-title">Email Address:
                                    <span> Nill</span>
                                </p>
                                <p class="text-title">Job Reported Through:
                                    <span> Mobile</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="my-3 col-lg-6 d-flex align-self-stretch">
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
                                                    id="basic-addon1">
                                                    <small>Assign Engineer</small>
                                                </a>
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
                    <!-- message to -->
                    <div class="col-lg-12 mt-3">
                        <div class="row">
                            <div class="col-2">
                                <div class="btn btn-suc btn-block">To</div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <select class="form-control" name="" id="">
                                        <option>
                                            1. Contractor
                                        </option>
                                        <option>
                                            2. Tenant
                                        </option>
                                        <option>3. Landlord</option>
                                        <option value="">4. Internal</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" placeholder="Recipient Name" class="form-control" name="" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- message form -->
                    <div class="col-lg-12">
                        <form id="jobnote">
                            @csrf
                            <div class="customshadow p-2">
                                <div class="col-lg-12 my-3">
                                    <textarea id="note" name="note" class="form-control mt-lg-5" required
                                        rows="4">Notes *</textarea>
                                </div>
                                <div class="col-lg-12 my-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Upload Attachment</label>
                                    </div>
                                </div>
                                <div class="col-12 text-right  mt-3">
                                    <button id="formbtn" type="submit" class="btn btn-suc btn-sm  px-4">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                <div class="row">
                    <!-- Activity -->
                    <div class="col-lg-12 my-3">
                        <h5 class="my-3 font-weight-bold text-secondary">Activity</h5>
                        <div class="customshadow p-3">
                            <!-- contractor  -->
                            <ul class="jobnote_email_ul">
                                <li>
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="font-weight-bold mb-0">Contractor</h6>
                                        <small>24 Sep, 2022 &nbsp;&nbsp;&nbsp; 02:44 pm </small>
                                    </div>
                                    <article> Lorem ipsum dolor sit amet, conse tetur sadip scing elitr, sed diam nonumy
                                        eirmod tempor invi dunt ut labore et dolore
                                        magna aliq uyam erat, sed diam volu ptua. At vero eos et accusam et justo duo
                                        dolores et ea rebum. Stet clita kasd
                                        gubergren, no sea taki mata san ctus est Lorem ipsum dolor sit amet. Lorem ipsum
                                        dolor sit amet, conse tetur sadip scing
                                        elitr. </article>
                                </li>
                            </ul>
                            <!-- your note -->
                            <ul class="jobnote_ul">
                                @foreach($notes as $note)
                                <li>
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="font-weight-bold mb-0">You</h6>
                                        <small>24 Sep, 2022 &nbsp;&nbsp;&nbsp; 02:44 pm </small>
                                    </div>
                                    <article>
                                        {{$note->note}}
                                    </article>
                                </li>
                                @endforeach
                            </ul>
                            <!-- Email -->
                            <ul class="jobnote_email_ul">
                                <li>
                                    <div class="d-flex justify-content-between ">
                                        <h6 class="font-weight-bold mb-0">E-mail &nbsp;&nbsp; <small
                                                style="color: #737475;opacity: 0.3;font-weight: 100;">muneer21020@gmail.com</small>
                                        </h6>
                                        <small>24 Sep, 2022 &nbsp;&nbsp;&nbsp; 02:44 pm </small>
                                    </div>
                                    <article>Lorem ipsum dolor sit amet, conse tetur sadip scing elitr, sed diam nonumy
                                        eirmod tempor invidunt ut labore et dolore
                                        magna aliq uyam erat, sed diam volu ptua. At vero eos et accu sam et justo duo
                                        dolores et ea rebum. Stet clita kasd
                                        gube rgren, no sea taki mata san ctus est Lorem ipsum dolor sit amet. Lorem
                                        ipsum dolor sit amet, conse tetur sadi pscing
                                        elitr.</article>
                                </li>
                            </ul>
                            <!-- Resolution Notes -->
                            <ul class="jobnote_email_ul">
                                <li>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="font-weight-bold mb-0">Resolution Notes
                                        </h6>
                                        <small>24 Sep, 2022 &nbsp;&nbsp;&nbsp; 02:44 pm </small>
                                    </div>
                                    <article>
                                        Lorem ipsum dolor sit amet, conse tetur sadi pscing elitr, sed diam nonumy
                                        eirmod tempor invi dunt ut labore et dolore
                                        magna aliq uyam erat, sed diam volu ptua. At vero eos et accusam et justo duo
                                        dolores et ea rebum. Stet clita kasd
                                        guber gren, no sea taki mata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                                        dolor sit amet, conse tetur sadip scing
                                        elitr.
                                    </article>
                                    <div class="row my-3 p-2">
                                        <div class="col-2">
                                            <small class="font-weight-bold">
                                                Attachment:
                                            </small>
                                        </div>
                                        <div class="col-2 p-1">
                                            <input type="text" class="w-100" />
                                        </div>
                                        <div class="col-2 p-1">
                                            <input type="text" class="w-100" />
                                        </div>
                                        <div class="col-2 p-1">
                                            <input type="text" class="w-100" />
                                        </div>
                                        <div class="col-2 p-1">
                                            <input type="text" class="w-100" />
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- Job Status -->
                            <ul class="jobnote_email_ul">
                                <li>
                                    <div class="d-flex justify-content-between mb-3">
                                        <h6 class="font-weight-bold mb-0">Job Status
                                        </h6>
                                        <small>24 Sep, 2022 &nbsp;&nbsp;&nbsp; 02:44 pm </small>
                                    </div>
                                    <div>
                                        <div class="btn btn-block btn-danger btn-sm">PENDING</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- footer btns -->
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