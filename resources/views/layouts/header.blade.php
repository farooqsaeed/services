<link rel="stylesheet" href="{{URL::asset('assets/css/plumber.css')}}">


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
        left: 30%;
        margin-top: -1px;
    }

    form .fa,
    form p{
        color: #407C1E;
    }
</style>

<div class="dropdown mt-2 mr-2">
    <button class="btn btn-success btn-sm success dropdown-toggle" type="button" data-toggle="dropdown">Global
        <span class="caret"></span></button>
    <ul class="dropdown-menu">
        <li><a tabindex="-1" href="#">Group A</a></li>
        <li><a tabindex="-1" href="#">Group B</a></li>
        <li class="dropdown-submenu">
            <a class="test" tabindex="-1" href="#">Group C <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <!-- <li><a tabindex="-1" href="#">Group A1</a></li> -->
                <li class="dropdown-submenu">
                    <a class="test" href="#">Group A2<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Group A21</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="fa fa-bell mr-2 mt-1">
    <p class="mt-1">Notification</p>
</div>
<div class="">
    <form action="{{ URL::to('signout') }}" method="post">
        @csrf
        <button class="fa fa-sign-out btn" type="submit"><br>
            <p>Logout</p>
        </button>
    </form>
</div>

<script>
    $(document).ready(function () {
        $('.dropdown-submenu a.test').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
    });
</script>