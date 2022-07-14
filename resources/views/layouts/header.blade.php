@php
use App\Models\Group;
$groups= Group::with('subgroup')->orderBy('id', 'DESC')->get();

@endphp

<link rel="stylesheet" href="{{URL::asset('assets/css/header.css')}}">

<style>
    .cards .card a {
        color: white;
        text-decoration: none;
    }

    .dropdown-menu {
        background: transparent 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 6px #00000029;
        border: 2px solid #407C1E;
        border-radius: 10px;
        opacity: 1;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        padding: 2%;
    }

    .dropdown-menu ul li a:hover {
        text-decoration: none;
        border-radius: 2px;
    }

    .dropdown-menu li a {
        text-decoration: none;
        border-radius: 2px;
        color: #407C1E !important;

    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        background-color: white !important;
        top: 120%;
        left: 0%;
        padding: 5px;
        margin-top: 2px;
    }

    form .fa,
    form p {
        color: #737475;
    }
</style>

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

<div class="logoutdiv ">
    <form action="{{ URL::to('signout') }}" method="post">
        @csrf
        <button class="btn btn-block" type="submit"><br>
            <p>Logout</p>
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
            $(".logoutdiv").toggle();
        });
    });
</script>