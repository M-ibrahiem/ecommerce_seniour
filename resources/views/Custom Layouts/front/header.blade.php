<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="{{ asset('front/assets/images/favicon.ico') }}">
    <link rel="icon" href="{{ asset('front/assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('front/assets/images/favicon.ico') }}" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="{{ asset('front/assets/images/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Surfside Media">
    <meta name="keywords" content="Surfside Media">
    <meta name="author" content="Surfside Media">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>SurfsideMedia</title>

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendors/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/vendors/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/vendors/feather-icon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/vendors/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/vendors/slick/slick-theme.css') }}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/demo4.css') }}">
    <style>
        .h-logo {
            max-width: 185px !important;
        }

        .f-logo {
            max-width: 220px !important;
        }

        @media only screen and (max-width: 600px) {
            .h-logo {
                max-width: 110px !important;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}">


</head>

<body class="theme-color4 light ltr" dir="{{ App::getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
    <style>
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }

        header .profile-dropdown ul li:last-child {
            border-color: #fff;
        }

        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
        }

        .name-usr {
            background: #e87316;
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px;
        }

        .name-usr span {
            margin-right: 10px;
        }

        @media (max-width:600px) {
            .h-logo {
                max-width: 150px !important;
            }

            i.sidebar-bar {
                font-size: 22px;
            }

            .mobile-menu ul li a svg {
                width: 20px;
                height: 20px;
            }

            .mobile-menu ul li a span {
                margin-top: 0px;
                font-size: 12px;
            }

            .name-usr {
                padding: 5px 12px;
            }
        }
    </style>
<header class="header-style-2" id="home">
    <div class="main-header navbar-searchbar">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="brand-logo">
                                <a href="index.htm">
                                    <img src="{{ asset('front/assets/images/logo.png') }}" class="h-logo img-fluid blur-up lazyload" alt="logo">
                                </a>
                            </div>
                        </div>
                        <nav>
                            <div class="main-navbar">
                                <div id="mainnav">
                                    <div class="toggle-nav">
                                        <i class="fa fa-bars sidebar-bar"></i>
                                    </div>
                                    <ul class="nav-menu">
                                        <li class="back-btn d-xl-none">
                                            <div class="close-btn">
                                                Menu
                                                <span class="mobile-back"><i class="fa fa-angle-left"></i></span>
                                            </div>
                                        </li>
                                        <li><a href="index.htm" class="nav-link menu-title">{{ __('main.Home') }}</a></li>
                                        <li><a href="shop.html" class="nav-link menu-title">{{ trans('main.Shop') }}</a></li>
                                        <li><a href="cart/list.html" class="nav-link menu-title">@lang('main.Cart')</a></li>
                                        <li><a href="about-us.html" class="nav-link menu-title">{{ __('ABOUT US') }}</a></li>
                                        <li><a href="contact-us.html" class="nav-link menu-title">{{ Lang::get('main.Contact Us') }}</a></li>
                                        <li><a href="blog.html" class="nav-link menu-title">{{ __('BLOG') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="menu-right">
                            <ul>
                                @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <ul>
                                <li>
                                    <div class="search-box theme-bg-color">
                                        <i data-feather="search"></i>
                                    </div>
                                </li>
                                <li class="onhover-dropdown wislist-dropdown">
                                    <div class="cart-media">
                                        <a href="wishlist/list.html">
                                            <i data-feather="heart"></i>
                                            <span id="wishlist-count" class="label label-theme rounded-pill">0</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="onhover-dropdown wislist-dropdown">
                                    <div class="cart-media">
                                        <a href="{{route('carts.index')}}">
                                            <i data-feather="shopping-cart"></i>
                                            <span id="cart-count" class="label label-theme rounded-pill">0</span>
                                        </a>
                                    </div>
                                </li>
                                <li class="onhover-dropdown">
                                    <div class="cart-media name-usr">
                                        <i data-feather="user"></i>
                                    </div>
                                    <div class="onhover-div profile-dropdown">
                                        @if (Route::has('login'))

                                        @auth
                                        <ul>
                                            @if(Auth::user()->role == 'super_admin' || Auth::user()->role == 'admin')
                                            <li>
                                                <a href="{{ route('dashboard.main') }}">Dashboard</a>
                                            </li>
                                            @endif
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <button>LogOut</button>
                                                </form>
                                            </li>
                                        </ul>
                                        @else
                                        <ul>
                                            <li>
                                                <a href="{{ route('login') }}" class="d-block">Login</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('register') }}" class="d-block">Register</a>
                                            </li>
                                        </ul>
                                        @endauth
                                    </div>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
