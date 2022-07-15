@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">


<div class="container-fluid addcontractor enrollment  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp; Enrollment</span>
    </div>
    <div class="row p-4">
        <div class="col-lg-12 ">
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0 pb-0">Welcome Message</h4>
                        <small>Display of Welcome Message on App</small>
                        <p class="card-text mt-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                            nonumy
                            eirmod tempor invidunt ut labore et dolore
                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                            rebum.
                            Stet.</p>
                        <div class="btn btn-suc btn-block">Edit</div>

                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0 pb-0">Tenant Enrolment ID</h4>
                        <br>
                        <form method="post" class="mt-3">
                            <label for="">Phone Number</label>
                            <input type="tel" class="form-control" />
                            <br>
                            <label for="">Enrollment Key</label>
                            <input type="text" class="form-control" />
                        </form>
                        <br>
                        <div class="btn btn-suc btn-block mt-3">Generate</div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-0 pb-0">Engineer Enrolment ID</h4>
                        <small>Concern: Hopefully blocking ID should not stop contractor from using app who have already
                            been signed up.</small>
                        <form method="post" class="mt-3">
                            <label for="">Phone Number</label>
                            <input type="tel" class="form-control" />
                            <br>
                            <label for="">Enrollment Key</label>
                            <input type="text" class="form-control" />
                        </form>
                        <br>
                        <div class="btn btn-suc btn-block mt-3">Generate</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@endsection