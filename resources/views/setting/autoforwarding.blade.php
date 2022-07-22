@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/setting.css')}}">

<!-- data packer -->
<style>
</style>

<div class="container-fluid addcontractor autoforwarding  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span"> &nbsp;&nbsp; Auto Forwarding</span>
    </div>
    <div class="row p-4">
        <div class="col-lg-12">
            <div class="card-deck">
                <div class="card customshadow">
                    <div class="card-body px-5">
                        <h4 class="card-title d-inline-block">Landlord Approvals</h4>
                        <span class="d-inline-block float-right">
                            <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                        </span>
                        <br> <br>
                        <form id="landlordapproval" action="{{route('store.landlord.approvals')}}" method="post">
                            @csrf
                            @method('post')
                            <select name="target_group" class="form-control my-3">
                                <option>Target Group</option>
                                @foreach($groups as $group)
                                <option value="{{$group->id}}">{{$group->Group_Name}}</option>
                                @endforeach
                            </select>
                            <input type="hidden" name="user_id" value="{{$user->id}}">
                            <select name="action" id="" class="form-control my-2">
                                <option>Forward</option>
                                <option value="Email">Via Email</option>
                                <option value="Phone">Via Phone</option>
                            </select>
                            <select name="recipient" id="" class="form-control my-3">
                                <option>Recipient</option>
                                <option value="Soft">Soft</option>
                                <option value="Soft">Soft</option>
                            </select>
                            <select name="delivery_method" id="" class="form-control my-3">
                                <option>Delivery Method</option>
                                <option value="Air">By Air</option>
                                <option value="Road">By Road</option>
                            </select>
                            <br> <br> <br>
                            <button type="submit" id="autoforwardingSave"
                                class="btn btn-suc btn-block mt-2">Save</button>
                        </form>
                    </div>
                </div>
                <div class="card customshadow">
                    <div class="card-body px-5">
                        <h4 class="card-title d-inline-block">Forward to Contractor</h4>
                        <span class="d-inline-block float-right">
                            <i class="fa fa-ellipsis-v  " aria-hidden="true"></i>
                        </span>
                        <br> <br>
                        <form id="contractorapprovals" action="{{route('store.contractor.approvals')}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 my-2">
                                    <select name="target_group" id="" class="form-control ">
                                        <option>Target Group</option>
                                        @foreach($groups as $group)
                                        <option value="{{$group->id}}">{{$group->Group_Name}}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" value="{{$user->id}}" name="user_id">
                                </div>
                                <div class="col-12 my-2">
                                    <select name="job_type" class="form-control  ">
                                        <option>Job Type</option>
                                        <option value="Soft work">Soft work</option>
                                        <option value="hard work">Hard work</option>
                                    </select>
                                </div>
                                <div class="col-12 my-2">
                                    <select name="contractor_id" class="form-control ">
                                        <option>Forward Jobs to (Select Contractor)</option>
                                        @foreach($contractors as $contractor)
                                        <option value="{{$contractor->id}}">{{$contractor->first_name}}
                                            {{$contractor->last_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-6 my-2">
                                    <input type="text" onfocus="(this.type='date')"
                                        onblur="if(this.value==''){this.type='text'}" placeholder="Start day"
                                        name="start_day" class="form-control" />
                                </div>
                                <div class="col-6 my-2">
                                    <input type="text" onfocus="(this.type='date')"
                                        onblur="if(this.value==''){this.type='text'}" placeholder="End Date"
                                        name="end_day" class="form-control " />
                                </div>
                                <div class="col-6 my-2">
                                    <input type="text" onfocus="(this.type='time')"
                                        onblur="if(this.value==''){this.type='text'}" placeholder="Start Time"
                                        name="start_time" class="form-control " />
                                </div>
                                <div class="col-6 my-2">
                                    <input type="text" onfocus="(this.type='time')"
                                        onblur="if(this.value==''){this.type='text'}" placeholder="End time"
                                        name="end_time" class="form-control " />
                                </div>
                                <div class="col-12 my-2">
                                    <br>
                                    <button type="submit" class="btn btn-suc btn-block ">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-5 px-4">
            <h4 class="card-title">Landlord Approvals</h4>
            <table class="table customshadow table-bordered">
                <thead>
                    <tr>
                        <th>No#</th>
                        <th>Target Group</th>
                        <th>Action
                        </th>
                        <th>Recipient</th>
                        <th>Delivery Method</th>
                    </tr>
                </thead>
                <tbody>
                    @if($landlords->isNotEmpty())
                    @foreach($landlords as $landlord)
                    <tr>
                        <td>{{$landlord->id}}</td>
                        <td>{{$landlord->target_group}}</td>
                        <td>{{$landlord->action}}</td>
                        <td>{{$landlord->recipient}}</td>
                        <td>{{$landlord->delivery_method}}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="5" class="text-center text-capitalize">
                            sorry no Data found
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
        <div class="col-lg-12 mt-5 px-4">
            <h4 class="card-title">Forward to Contractor</h4>
            <table class="table customshadow">
                <thead>
                    <tr>
                        <th>No#</th>
                        <th>Target Group</th>
                        <th>Job Type</th>
                        <th>Action</th>
                        <th>Day</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    @if($contractors_auto->isNotEmpty())
                    @foreach($contractors_auto as $contractor)
                    <tr>
                        <td>{{$contractor->id}}</td>
                        <td>{{$contractor->target_group}}</td>
                        <td>{{$contractor->job_type}}</td>
                        <td>{{$contractor->contractor_id}}</td>
                        <td>{{$contractor->start_day}} to {{$contractor->end_day}}</td>
                        <td>{{$contractor->start_time}}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="6" class="text-center">
                            Sorry data Not Found
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>

<!-- forms submition -->
<script>
    // contractor approvals
    // $(function () {
    //     $('#contractorapprovals').submit(function (event) {
    //         event.preventDefault(); // Prevent the form from submitting via the browser
    //         var form = $(this);
    //         $.ajax({
    //             type: form.attr('method'),
    //             url: form.attr('action'),
    //             data: form.serialize()
    //         }).done(function (data) {
    //             toastr.success(data.result);

    //         }).fail(function (data) {
    //             // Optionally alert the user of an error here...
    //         });
    //     });
    // });

    // landlordapproval approvals
    // $(function () {
    //     $('#landlordapproval').submit(function (event) {
    //         event.preventDefault(); // Prevent the form from submitting via the browser
    //         var form = $(this);
    //         $.ajax({
    //             type: form.attr('method'),
    //             url: form.attr('action'),
    //             data: form.serialize()
    //         }).done(function (data) {
    //             toastr.success(data.result);

    //         }).fail(function (data) {
    //             toastr.warning(data);

    //         });
    //     });
    // });
</script>
@endsection