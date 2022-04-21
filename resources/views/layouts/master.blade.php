<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">


    <link rel="stylesheet" href="{{URL::asset('assets/css/master.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/dashboard.css')}} 
    ">


</head>
 
<body class="">
    <div>
        <div class="dashboard">
            <div class="dashboard-nav">
                <header>
                    <a href="#!" class="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                    <i class="brand-logo" to="/">
                        <img src="{{URL::asset('assets/imgs/img/WPM-logo/logo.png')}}" alt="" srcSet="" />
                    </i>
                </header>
                <nav class="dashboard-nav-list">
                    <div class="nav-item-divider"></div>
                    <a class="dashboard-nav-item" href="/">
                        <i class="fa fa-th-large" aria-hidden="true"></i> Dashboard
                    </a>
                    <div class="dashboard-nav-dropdown">
                        <a href="/groups" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                            <i class="fa fa-users"></i> Groups
                        </a>
                        <!-- <div class="dashboard-nav-dropdown-menu">
                            <a href="#" class="dashboard-nav-dropdown-item">
                                All
                            </a>
                            <a href="#" class="dashboard-nav-dropdown-item">
                                Subscribed
                            </a>
                            <a href="#" class="dashboard-nav-dropdown-item">
                                Non-subscribed
                            </a>
                            <a href="#" class="dashboard-nav-dropdown-item">
                                Banned
                            </a>
                            <a href="#" class="dashboard-nav-dropdown-item">
                                New
                            </a>
                        </div> -->
                    </div>
                    <div class="dashboard-nav-dropdown">
                        <a href="#!" class="dashboard-nav-item dashboard-nav-dropdown-toggle">
                            <i class="fa fa-calendar"></i> Events
                        </a>
                        <div class="dashboard-nav-dropdown-menu">
                            <a href="eventsreports" class="dashboard-nav-dropdown-item">
                                Reports
                            </a>
                            <a href="events_complience" class="dashboard-nav-dropdown-item">
                                Complience
                            </a>
                            <a href="events" class="dashboard-nav-dropdown-item">
                                Events
                            </a>
                        </div>
                    </div>
                    <a href="#" class="dashboard-nav-item">
                        <i class="fa fa-building"></i> Properties
                    </a>
                    <a href="#" class="dashboard-nav-item">
                        <i class="fa fa-key"></i> Tenants
                    </a>
                    <a class="dashboard-nav-item" href="/contractors">
                        <i class="fa fa-user"></i> Contractors
                    </a>
                    <a href="callout" class="dashboard-nav-item">
                        <i class="fa fa-comment"></i> Callout
                    </a>
                    <a href="newjobs" class="dashboard-nav-item">
                        <i class="fa fa-suitcase"></i> Jobs
                    </a>
                    <a href="/signin" class="dashboard-nav-item">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                    <a href="setting" class="dashboard-nav-item">
                        <i class="fa fa-cogs"></i> Settings
                    </a>
                </nav>
            </div>
            <div class="dashboard-app ">
                <header class="dashboard-toolbar ">
                    <nav class="navbar navbar-expand-lg navbar-light   w-100">
                        <a href="#!" class="menu-toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                        <a class="navbar-brand" href="#">
                            Western Property
                        </a>
                    </nav>
                </header>
                <div class=" dashboard-content ">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        const mobileScreen = window.matchMedia("(max-width: 990px )");
        $(document).ready(function () {
            $(".dashboard-nav-dropdown-toggle").click(function () {
                $(this)
                    .closest(".dashboard-nav-dropdown")
                    .toggleClass("show")
                    .find(".dashboard-nav-dropdown")
                    .removeClass("show");
                $(this).parent().siblings().removeClass("show");
            });
            $(".menu-toggle").click(function () {
                if (mobileScreen.matches) {
                    $(".dashboard-nav").toggleClass("mobile-show");
                } else {
                    $(".dashboard").toggleClass("dashboard-compact");
                }
            });
        });

    </script>


    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "pagingType": "simple_numbers",
            });
        });
    </script>

    <!-- open jobs  -->
    <script>
        $(document).ready(function () {
            $('#openjobs').DataTable({
                "pagingType": "simple"
            });
        });
    </script>


    <script>
           $(document).ready(function () {
                $("#collapseExample").click(function () {
                    if ($('.example_col').is(':visible')) {
                        $('.example_col').slideUp();
                        $('#hideable').removeClass('fa-chevron-up');
                        $('#hideable').addClass('fa-chevron-down');

                    }
                    else {
                        $('.example_col').slideDown();
                        $('#hideable').addClass('fa-chevron-up');
                        $('#hideable').removeClass('fa-chevron-down');
                    }
                });
                $("#removeexampletable").click(function () {
                    $('.example_col').hide();
                });
            });
    </script>
</body>

</html>