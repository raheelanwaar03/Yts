<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ env('APP_NAME') }} - is a merging platform where you can get best deals</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    {{-- datatable --}}
    {{-- datatable Links --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

</head>

<body>
    <div class="main--body dashboard-bg">
        <!--========== Preloader ==========-->
        {{-- <div class="loader">
            <div class="loader-inner">
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
            </div>
        </div> --}}
        <div class="overlay"></div>

        <div class="notify-overlay"></div>
        <section class="dashboard-section">
            <div class="side-header oh">
                <div class="cross-header-bar d-xl-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="site-header-container">
                    <div class="side-logo">
                        <a href="{{ route('LandingPage') }}">
                            <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="{{ route('Admin.Dashboard') }}" class="active"><i
                                    class="flaticon-man"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.All.Users') }}"><i class="flaticon-team"></i>All Users</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.Pending.Users') }}"><i class="flaticon-team"></i>Pending Users</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.Easypaisa.Users') }}"><i class="flaticon-team"></i>Easypaisa
                                User</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.Approved.Users') }}"><i class="flaticon-team"></i>Approved
                                User</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.Rejected.Users') }}"><i class="flaticon-team"></i>Rejected
                                User </a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.Easypaisa.index') }}"><i class="flaticon-coin"></i>Add
                                Easypaisa</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.Product.create') }}"><i class="flaticon-deal"></i>Add Product</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.Product.index') }}"><i class="flaticon-deal"></i>All Product</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.Setting.index') }}"><i class="flaticon-gears"></i>Settings</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.All.Widthraw.Requests') }}"><i class="flaticon-atm"></i>Widthraw
                                Req</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.Approved.Widthraw') }}"><i class="flaticon-atm"></i>Approve
                                Widt</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.Rejected.Widthraw') }}"><i class="flaticon-atm"></i>Reject
                                Widt</a>
                        </li>
                        <li>
                            <a href="{{ route('Admin.Vistors') }}"><i class="flaticon-atm"></i>Vistors</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="flaticon-right-arrow"></i>Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
