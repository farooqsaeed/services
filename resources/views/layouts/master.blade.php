<!doctype html>
<html lang="en">

<head>
    <title>Western Property</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    <link rel="stylesheet" href="{{URL::asset('assets/css/master.css')}}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/dashboard.css')}} 
    ">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
</head>

<body class="">
    <div>
        <div class="dashboard">
            <div class="dashboard-nav">
                <header>
                    <a href="#!" class="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                    <a href="/">
                        <i class="brand-logo">
                            <img src="{{URL::asset('assets/imgs/img/WPM-logo/logo2.png')}}" alt="" srcSet="" />
                        </i>
                    </a>
                </header>
                <nav class="dashboard-nav-list">
                    <div class="nav-item-divider"></div>
                    <a class="dashboard-nav-item {{ Request::path() ==  '/dashboard' ? '  active' : ''  }}"
                        href="/dashboard">
                        <i class="fa fa-th-large" aria-hidden="true"></i>
                        Dashboard
                    </a>
                    <div class="dashboard-nav-dropdown ">
                        <a href="/groups"
                            class="dashboard-nav-item dashboard-nav-dropdown-toggle {{ Request::path() ==  'groups' ? 'open active' : ''  }}">
                            <i class="fa fa-users"></i> Groups
                        </a>
                    </div>
                    <a href="{{URL('events')}}"
                        class="dashboard-nav-item  {{ Request::path() ==  'events' ? 'open active' : ''  }}">
                        <i class="fa fa-building"></i> Events
                    </a>
                    <a href="{{URL('property')}}"
                        class="dashboard-nav-item  {{ Request::path() ==  'property' ? 'open active' : ''  }}">
                        <i class="fa fa-building"></i> Properties
                    </a>
                    <a href="{{URL('tenant')}}" class="dashboard-nav-item">
                        <i class="fa fa-key"></i> Tenants
                    </a>
                    <a class="dashboard-nav-item  {{ Request::path() ==  'contractors' ? ' active' : ''  }}"
                        href="{{URL('contractors')}}">
                        <i class="fa fa-user"></i> Contractors
                    </a>
                    <a href="{{URL('callout')}}"
                        class="dashboard-nav-item  {{ Request::path() ==  'callout' ? ' active' : ''  }}">
                        <i class="fa fa-comment"></i> Callout
                    </a>
                    <a href="{{URL('jobs')}}"
                        class="dashboard-nav-item  {{ Request::path() ==  'jobs' ? 'active' : ''  }}">
                        <i class="fa fa-suitcase"></i> Jobs
                    </a>
                    <a href="{{URL('setting')}}"
                        class="dashboard-nav-item  {{ Request::path() ==  'setting' ? 'active' : ''  }}">
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
                <div class="dashboard-content ">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

    <!-- main screen script -->
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
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js
"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js
"></script>

    <!-- contractor page table -->
    <script>
        $(document).ready(function () {
            $('#contractor').DataTable({
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

    <!-- plumber page script -->
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

    <!-- jobs -->
    <script>
        $(document).ready(function () {
            $('#jobs').DataTable({
                "pagingType": "simple_numbers",
            });
        });
    </script>
    <!-- property -->
    <script>
        $(document).ready(function () {
            $('#property').DataTable({
                "pagingType": "simple_numbers",
            });
        });
    </script>

    <!-- tenant -->
    <script>
        $(document).ready(function () {
            $('#tenant').DataTable({
                "pagingType": "simple_numbers",
            });
        });
    </script>
    <!-- tenatn property table -->
    <script>
        $(document).ready(function () {
            $('#tenant_property').DataTable({
                "pagingType": "simple_numbers",
                "info": true,
                "lengthChange": true,

                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ]

            });
        });
    </script>

    <!-- toaster -->
    <script>
        toastr.options = {
            "closeButton": true,
            "newestOnTop": true,
            "positionClass": "toast-top-right"
        };
    </script>

    <!-- callout table -->
    <script>
        $(document).ready(function () {
            $('#callout').DataTable({
                "pagingType": "simple_numbers",
                'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': [-1] /* 1st one, start by the right */
                }]
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.dropdown-submenu a.test').on("click", function (e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        });
    </script>

</body>

</html>