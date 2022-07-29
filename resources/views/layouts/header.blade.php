@php
use App\Models\Group;
$groups= Group::with('subgroup')->orderBy('id', 'DESC')->get();
@endphp

<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">

<div class="dropdown mt-2  ">
    <button class="btn btn-success btn-sm success px-4 dropdown-toggle" type="button" data-toggle="dropdown">Global
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        @foreach($groups as $group)
        <li class="dropdown-submenu">
            <a class="test" tabindex="-1" href="#">{{$group->Group_Name}} <span class="caret"></span></a>
            @if(!empty($group->subgroup))
            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                    <a class="test" href="#"> {{ $group->subgroup->Sub_Group_Name}} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Group A21</a></li>
                    </ul>
                </li>
            </ul>
            @endif
        </li>
        @endforeach
    </ul>
</div>
<div class="fa fa-bell mx-4 mt-1">
    <p class="mt-1">Notification</p>
</div>

<div class="position-relative">
    <i class="fa fa-ellipsis-v mt-2" id="dots3" aria-hidden="true">
    </i>
</div>

<div class="logoutdiv">

    <form action="{{ URL::to('signout') }}" method="post" class="px-2 py-1">
        @csrf
        <button class="btn btn-block m-0 p-0">
            <a href="{{route('setting.index')}}">
                <p class="m-0">Setting</p>
            </a>
        </button>
        <button class="btn btn-block m-0 p-0" type="submit">
            <p class="m-0">Logout</p>
        </button>
        
    </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("mouseover", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });

        $("#dots3").click(function () {
            if ($('.logoutdiv').css('visibility') == 'hidden')
                $('.logoutdiv').css('visibility', 'visible');
            else
                $('.logoutdiv').css('visibility', 'hidden');

        });
    });
</script>