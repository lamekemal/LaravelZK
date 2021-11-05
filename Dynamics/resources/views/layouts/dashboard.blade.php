<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title> @yield('title') </title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/appx.css') }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,600&display=swap" rel="stylesheet">

</head>

<body>
    @include('layouts.data')
    <!--div>
            @yield('preloader')
        </div-->
    <div>
        <!-- SIDE PANEL-->
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div id="sidebar" class=" col-2 sidebar nav nav-pills flex-column">
                        <div class="sidebar-header" style="">
                            <a href="/" class="d-flex align-items-center">
                                <img style="width:200px;height:auto;" src="{{ asset('images/logo-survey.png') }}"
                                    alt="logo">
                            </a>
                        </div>
                        <hr>
                        <ul class="lisst-unstyled components">
                            <li class="nav-item rounded-0" style="list-style-type: none;">
                                <p> Tableau de Bord</p>
                                <a href="#">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#home" />
                                    </svg>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item rounded-0" style="list-style-type: none;">
                                <a href="#">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#speedometer2" />
                                    </svg>
                                    Dashboard
                                </a>
                            </li>
                            <li style="list-style-type: none;">
                                <a href="#">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>
                                    Orders
                                </a>
                            </li>
                            <li style="list-style-type: none;">
                                <a href="#">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#grid" />
                                    </svg>
                                    Products
                                </a>
                            </li>
                            <li class="nav-item" style="list-style-type: none;">
                                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                                    class="dropdown-toggle">
                                    <svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#people-circle" />
                                    </svg>
                                    Customers
                                </a>
                                <ul class="collapse lisst-unstyled" id="pageSubmenu">
                                    <li><a href="#">New project...</a></li>
                                    <li><a href="#">Settings</a></li>
                                    <li><a href="#">Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div>
                            <hr>
                        </div>
                        <div class="fixed-bottom">
                            <a href="#"
                                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                                    class="rounded-circle me-2 ml-2 mr-2">
                                <strong>mdo</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow"
                                aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" col-12 container ">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
