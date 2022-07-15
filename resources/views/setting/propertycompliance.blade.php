@extends('layouts.master')
@section('content')

<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">
<style>
    .progress {
        height: 0.5rem;
    }
</style>
<div class="container-fluid addcontractor propertycompliance  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp;Property Compliance</span>
    </div>
    <div class="row p-4">
        <div class="col-lg-8 offset-lg-2 my-3">
            <div class="card customshadow">
                <div class="card-body">
                    <h5 class="card-title">Enable Compliance</h5>
                    <div class="row">
                        <div class="col-lg-6 px-4">
                            <div class="form-check form-check-inline my-2">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="" id=""
                                        value="checkedValue">Electrical Safety Check
                                </label>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success  progress-bar-striped" role="progressbar"
                                    style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                </div>
                                <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                                    style="width: 20%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <small>2 certs about to expire</small>

                            <div class="form-check form-check-inline mt-4 mb-2">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="" id=""
                                        value="checkedValue">Energy Performance Check
                                </label>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                    style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <small>No data available</small>

                            <div class="form-check form-check-inline mt-4 mb-2">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="" id=""
                                        value="checkedValue">Fire Safety Risk Assessment
                                </label>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                    style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                            <small>2 certs about to expire</small>
                        </div>
                        <div class="col-lg-6 px-4">
                            <div>
                                <div class="form-check form-check-inline my-2">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="" id=""
                                            value="checkedValue">Gas Safety Check
                                    </label>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success  progress-bar-striped" role="progressbar"
                                        style="width: 33%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                                        style="width: 33%" aria-valuenow="33" aria-valuemin="33" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar bg-danger progress-bar-striped" role="progressbar"
                                        style="width: 34%" aria-valuenow="34" aria-valuemin="66" aria-valuemax="100">
                                    </div>
                                </div>
                                <small>Not Compliant (2 certs expired)</small>
                            </div>

                            <div>
                                <div class="form-check form-check-inline mt-4 mb-2">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="" id=""
                                            value="checkedValue">Inspection Report
                                    </label>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                        style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                    <div class="progress-bar bg-warning progress-bar-striped" role="progressbar"
                                        style="width: 33%" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">
                                    </div>

                                    <div class="progress-bar bg-danger progress-bar-striped" role="progressbar"
                                        style="width: 16%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <small>Not Compliant (2 certs expired)</small>
                            </div>

                            <div>
                                <div class="form-check form-check-inline mt-4 mb-2">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="" id=""
                                            value="checkedValue">
                                        Other
                                    </label>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar"
                                        style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <small>2 certs about to expire</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-8 offset-lg-2 ">
            <div class="card-deck">
                <div class="card customshadow">
                    <div class="card-body">
                        <h5 class="card-title">Email Notification</h5>
                        <form action="" method="post">
                            <div class="form-group">
                                <select class="form-control" name="" id="">
                                    <option>Email Notification duration</option>
                                    <option></option>
                                </select>
                            </div>

                            <div class="form-check checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Send weekly reminder if
                                    compliance is still not
                                    actioned</label>
                            </div>


                            <div class="form-check checkbox">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Send daily reminder if
                                    compliance is expired</label>
                            </div>

                            <div class="btn btn-suc btn-block mt-4">Save</div>
                        </form>
                    </div>
                </div>
                <div class="card customshadow">
                    <div class="card-body">
                        <h5 class="card-title">Email Notification</h5>
                        <form action="" method="post">
                            <div class="form-group">
                                <select class="form-control" name="" id="">
                                    <option>Select landlord</option>
                                    <option></option>
                                </select>
                            </div>

                            <div class="form-group">
                                <select class="form-control" name="" id="">
                                    <option>Type in email addresses</option>
                                    <option></option>
                                    <option></option>
                                </select>
                            </div>

                            <div class="btn btn-suc btn-block mt-5">Save</div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection