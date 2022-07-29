@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="{{URL::asset('assets/css/addcontractors.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/css/property.css')}}">


<div class="container-fluid addcontractor  p-0">
    <div class="add  mt-0 d-flex align-items-center">
        <span>
            <a href="{{ url()->previous() }}" class="fa fa-chevron-left mr-4" aria-hidden="true"></a>
        </span>
        <span class="span">&nbsp;&nbsp;&nbsp; Landlord Approval </span>
    </div>
    <div class="p-3">
        <form id="myform" class="row addform p-3" method="post" action="mailto:wpm@gmail.com">
            @csrf
            <!-- {/* Property Details */} -->
            <div class="col-lg-6 offset-lg-3 px-5 shadow pt-3 rounded">
                <div class="my-3">
                    <input type="email" class="form-control" required name="email" id="" placeholder="Email *" />
                </div>
                <div class="my-3">
                    <input type="text" class="form-control" required name="subject" value="{{$job->subject}}"
                        placeholder="Subject *" />
                </div>
                <div class="my-3">
                    <textarea class="form-control" value="{{$job->description}}" required name="descripion"
                        rows="6">{{$job->description}}</textarea>
                </div>
                <div class="my-3">
                    <label for="">Attachments</label>
                </div>
                <div class="my-3 d-flex justify-content-around">
                    <input type="text" disabled class="form-control mx-1">

                    <input type="hidden" name="attachment" value="{{$job->attachment}}">
                    <input type="text" class="form-control mx-1">
                    <input type="text" class="form-control">
                    <input type="text" class="form-control ml-1">

                </div>
                <div class="my-4 text-right">
                    <button type="submit" class="btn btn-info success btn-block">Save</button>
                </div>
            </div>
        </form>
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
@endsection