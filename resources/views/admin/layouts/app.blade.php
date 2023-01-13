<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title> Premaxcorp Dashboard</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=2.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=2.4.0') }}">
</head>

<body class="nk-body bg-white has-sidebar ">
<div class="nk-app-root">

    <!-- main @s -->
    <div class="nk-main ">
        <!-- sidebar @s -->
        <div class="nk-sidebar nk-sidebar-fixed is-dark" data-content="sidebarMenu">
            <div class="nk-sidebar-element nk-sidebar-head">
                <div class="nk-sidebar-brand">
                    <a href="{{ route('admin.dashboard') }}" class="logo-link">
                        <h3 class="text text-white">Premaxcorp</h3>
                        {{--                                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">--}}
                        {{--                                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">--}}
                    </a>
                </div>
                <div class="nk-menu-trigger mr-n2">
                    <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                </div>
            </div><!-- .nk-sidebar-element -->
            <div class="nk-sidebar-element ">
                <div class="nk-sidebar-body" data-simplebar>
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu">
                            <ul class="nk-menu">

                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Dashboards</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-growth"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Applications</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb"></em></span>
                                        <span class="nk-menu-text">Projects</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('admin.add') }}" class="nk-menu-link"><span class="nk-menu-text">Add</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('admin.projects.list') }}" class="nk-menu-link"><span class="nk-menu-text"> List</span></a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.password') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-setting-alt"></em></span>
                                        <span class="nk-menu-text">Setting</span>
                                    </a>
                                </li><!-- .nk-menu-item -->

                                <!-- .nk-menu-item -->

                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                        <div class="nk-sidebar-footer">
                            <ul class="nk-menu nk-menu-footer">
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-help-alt"></em></span>
                                        <span class="nk-menu-text">Support</span>
                                    </a>
                                </li>

                            </ul><!-- .nk-footer-menu -->
                        </div><!-- .nk-sidebar-footer -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-body -->
            </div><!-- .nk-sidebar-element -->
        </div>
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header nk-header-fixed is-dark">
                <div class="container-fluid">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ml-n1">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand d-xl-none">
                            <a href="{{ route('admin.dashboard') }}" class="logo-link">
                                <h3>Premaxcorp</h3>
{{--                                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">--}}
{{--                                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">--}}
                            </a>
                        </div><!-- .nk-header-brand -->

                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <em class="icon ni ni-user-alt"></em>
                                            </div>
                                            <div class="user-info d-none d-md-block">
                                                <div class="user-status">Administrator</div>
                                                <div class="user-name dropdown-indicator">{{ auth()->user()->name }}</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                        <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                            <div class="user-card">

                                                <div class="user-info">
                                                    <span class="lead-text">{{ auth()->user()->name }}</span>
                                                    <span class="sub-text">{{ auth()->user()->email }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                                        <em class="icon ni ni-signout"></em><span>Sign out</span>
{{--                                                        {{ __('Logout') }}--}}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
{{--                                                    <a href="#"><em class="icon ni ni-signout"></em><span>Sign out</span></a>--}}
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li><!-- .dropdown -->

                            </ul><!-- .nk-quick-nav -->
                        </div><!-- .nk-header-tools -->
                    </div><!-- .nk-header-wrap -->
                </div><!-- .container-fliud -->
            </div>
            <!-- main header @e -->

                @yield('content')

            <!-- footer @s -->
            <div class="nk-footer">
                <div class="container-fluid">
                    <div class="nk-footer-wrap">
                        <div class="nk-footer-copyright"> &copy; 2020 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                        </div>
                        <div class="nk-footer-links">
                            <ul class="nav nav-sm">
                                <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->

<!-- JavaScript -->
<script src="{{ asset('assets/js/bundle.js?ver=2.4.0') }}"></script>
<script src="{{ asset('assets/js/scripts.js?ver=2.4.0') }}"></script>
<script src="{{ asset('assets/js/charts/gd-default.js?ver=2.4.0') }}"></script>
</body>

</html>
