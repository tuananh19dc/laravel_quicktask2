<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ asset('bower_components/material-dashboard/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png"
        href="{{ asset('bower_components/material-dashboard/assets/img/favicon.png') }}">
    <title>
        {{ __('Dashboard') }}
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('bower_components/material-dashboard/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('bower_components/material-dashboard/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.css') }}">
    <link id="pagestyle"
        href="{{ asset('bower_components/material-dashboard/assets/css/material-dashboard.css?v=3.0.2') }}"
        rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard "
                target="_blank">
                <img src="{{ asset('bower_components/material-dashboard/assets/img/logo-ct.png') }}"
                    class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white"
                    style="text-transform: uppercase">{{ __('Dashboard') }}</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="../pages/tables.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">{{ __('User List') }}</span>
                    </a>
                </li>

            </ul>
        </div>

    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mt-5">
        @yield('content')
    </main>

    <!--   Core JS Files   -->
    <script src="{{ asset('bower_components/material-dashboard/assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('bower_components/material-dashboard/assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bower_components/material-dashboard/assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('bower_components/material-dashboard/assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('bower_components/material-dashboard/assets/js/material-dashboard.min.js?v=3.0.2') }}">
    </script>
</body>

</html>
