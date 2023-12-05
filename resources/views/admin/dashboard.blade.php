{{-- @extends('admin.layout.app')

@section('content')
    <div class="dasboard-body">
        <div class="dashboard-hero">
            <div class="header-top">
                <div class="container">
                    <div class="mobile-header d-flex justify-content-between d-lg-none align-items-center">
                        <div class="author">
                            <img src="{{ asset('assets/images/dashboard/author.png') }}" alt="dashboard">
                        </div>
                        <div class="cross-header-bar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="mobile-header-content d-lg-flex flex-wrap justify-content-lg-between align-items-center">
                        <ul class="support-area">
                            <li>
                                <a href="#0"><i class="flaticon-support"></i>Support</a>
                            </li>
                            <li>
                                <i class="flaticon-globe"></i>
                            </li>
                        </ul>
                        <div
                            class="dashboard-header-right d-flex flex-wrap justify-content-center justify-content-sm-between justify-content-lg-end align-items-center">
                            <ul class="dashboard-right-menus">
                                <li>
                                    <a href="#0">
                                    </a>
                                    <div class="notification-area">
                                        <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                        </div>
                                        <div class="notifacation-footer text-center">
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="#0" class="author">
                                        <div class="thumb">
                                            <img src="{{ asset('assets/images/dashboard/author.png') }}" alt="dashboard">
                                            <span class="checked">
                                                <i class="flaticon-checked"></i>
                                            </span>
                                        </div>
                                        <div class="content">
                                            <h6 class="title">{{ auth()->user()->name }}</h6>
                                            <span class="country">{{ auth()->user()->country }}</span>
                                        </div>
                                    </a>
                                    <div class="notification-area">
                                        <div class="author-header">
                                            <div class="thumb">
                                                <img src="{{ asset('assets/images/dashboard/author.png') }}"
                                                    alt="dashboard">
                                            </div>
                                            <h6 class="title">{{ auth()->user()->name }}</h6>
                                        </div>
                                        <div class="author-body">
                                            <ul>
                                                <li>
                                                    <a href="{{ route('profile.edit') }}" class="text-seconday"><i
                                                            class="fas fa-user-edit"></i>Edit
                                                        Profile</a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger"><i
                                                                class="fas fa-sign-out-alt"></i>Log
                                                            Out</button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-hero-content text-white">
                <h3 class="title">Admin Dashboard</h3>
                <ul class="">
                    <li>
                        All Users
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center mt--85">
                <div class="col-sm-6 col-lg-3">
                    <div class="dashboard-item">
                        <div class="dashboard-inner">
                            <div class="cont">
                                <span class="title">All User's</span>
                                <h5 class="amount">{{ allUser() }}</h5>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('assets/images/dashboard/dashboard1.png') }}" alt="dasboard">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="dashboard-item">
                        <div class="dashboard-inner">
                            <div class="cont">
                                <span class="title">Pending User's</span>
                                <h5 class="amount">{{ pendingUsers() }}</h5>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('assets/images/dashboard/dashboard2.png') }}" alt="dasboard">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="dashboard-item">
                        <div class="dashboard-inner">
                            <div class="cont">
                                <span class="title">Approved User's</span>
                                <h5 class="amount">{{ verifiedUsers() }}</h5>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('assets/images/dashboard/dashboard3.png') }}" alt="dasboard">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="dashboard-item">
                        <div class="dashboard-inner">
                            <div class="cont">
                                <span class="title">Rejected User's</span>
                                <h5 class="amount">{{ rejectedUsers() }}</h5>
                            </div>
                            <div class="thumb">
                                <img src="{{ asset('assets/images/dashboard/dashboard4.png') }}" alt="dasboard">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ml-2">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-around align-items-center">
                            <a href="{{ route('Admin.Delete.Unnecessary.Users') }}" class="btn btn-primary">Del Rejected Users</a>
                            <a href="{{ route('Admin.Delete.Pending.Users') }}" class="btn btn-primary ml-3">Del Pending Users</a>
                            <a href="{{ route('Admin.Delete.Ip') }}" class="btn btn-primary ml-3">Make Clean</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection --}}
@extends('user.layout.app')
@section('css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            font-family: 'poppins', sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            margin-bottom: 90px !important;
            box-sizing: border-box;
            overflow-y: auto !important;
            /* min-height: 100vh !important; */
        }

        header {
            /* background-color: #f42b03; */
            background: #f95959;
            color: #fff;
            text-align: center;
            width: 100%;
            padding: 10px;
            position: relative;
            height: 70px;
            /* border-radius:0px 0px 25px 25px; */
            font-size: 30px;
            font-weight: 600;
        }

        header img.logo {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        header .user-info {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
        }

        header .user-info img {
            border-radius: 50%;
            width: 40px;
            height: 40px;
        }

        header .user-info span {
            margin-left: 10px;
        }

        main {
            padding: 10px;
            width: 100%;
            text-align: center;
            /* Center the cards */

        }

        footer {
            /* background-color: #f42b03; */
            background: #f95959;
            color: #fff;
            text-align: center;
            padding: 0px;
            position: fixed;
            bottom: 0 !important;
            width: 100%;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: gray;
            text-decoration: none;
            padding: 10px;
            margin: 0 10px;
            /* border-radius: 5px; */
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: black;
            text-decoration: none;
        }

        footer nav a {
            text-align: center;
            text-decoration: none;
            display: inline-block;
            /* margin: 2px;  */
        }

        footer nav a i {
            font-size: 18px !important;
        }

        footer nav a div {
            font-size: 12px !important;
        }

        @media (max-width: 768px) {
            header .user-info {
                display: inline-block;
                position: static;
                transform: translateY(0);
                text-align: center;
                margin-top: 10px;
                /* Add some space between the logo and user info */
            }

            header .user-info img {
                display: inline-block;
                margin-right: 5px;
                /* Add space between user photo and username */
            }

            header .user-info span {
                display: inline-block;
            }

            nav {
                flex-direction: row;
                align-items: center;
                justify-content: space-between;
            }

            nav a {
                width: 23%;
                /* Adjust width to fit four links in one row with some spacing */
                margin: 5px 0;
                display: inline-block;
            }

            footer nav {
                flex-wrap: wrap;
                justify-content: space-between;
            }

            footer nav a {
                width: 48%;
                /* Adjust width to fit two links in one row with some spacing */
                margin: 5px 0;
            }

            /* Style for the first four links to force them in one line */
            footer nav a:nth-child(-n + 4) {
                width: 25%;
                /* Adjust width to fit four links in one row with some spacing */

            }

            /* Style for the last four links to force them in one line */
            footer nav a:nth-last-child(-n + 3) {
                width: 33.33%;
                /* Adjust width to fit four links in one row with some spacing */
            }

            .aa {
                display: none;
            }
        }

        @media (min-width: 769px) {
            .toggle-links {
                display: none;
            }
        }

        main {
            padding: 10px;
            width: 100%;
            text-align: center;
            /* Center the cards */
        }



        @media (max-width: 768px) {
            body {
                font-family: 'Arial', sans-serif;
                margin: 0;
                padding: 0;
                margin-bottom: 160px !important;
                box-sizing: border-box;
            }
        }

        a {
            color: white !important;
            text-decoration: none !important;
        }

        .custom-button {
            margin: 10px;
        }

        .custom-button:hover {
            transform: scale(1.1);
        }

        .hidden {
            display: none;
        }
    </style>
@endsection

@section('content')
    <header>
        <nav>
            <span><i class="fa-regular fa-circle-play"></i>YTSEARNING</span>
            <div class="user-info">
                <img src="{{ asset('assets/images/dashboard/author.png') }}" alt="User Photo">
            </div>
        </nav>
    </header>

    <main>
        {{-- <div  class="mb-1" style="text-align: center !important;width:100%">
        <img class="logo" src="http://127.0.0.1:8000/assets/images/logo/new_logo.png" alt="Logo" style="width: 200px;height:80px;margin-top:15px;">
    </div> --}}

        {{-- home --}}
        <div class="dasboard-body" id="dashboardInfo">
            <div class="container-fluid">
                <div class="row justify-content-center mt-5">
                    <div class="col-sm-6 col-lg-3">
                        <div class="dashboard-item" style="  box-shadow: 2px 5px 10px 2px rgba(0, 0, 0, 0.2);">
                            <div class="dashboard-inner">
                                <div class="cont">
                                    <span class="title">All User's</span>
                                    <h5 class="amount">{{ allUser() }}</h5>
                                </div>
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/dashboard/dashboard1.png') }}" alt="dasboard">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="dashboard-item" style="  box-shadow: 2px 5px 10px 2px rgba(0, 0, 0, 0.2);">
                            <div class="dashboard-inner">
                                <div class="cont">
                                    <span class="title">Pending User's</span>
                                    <h5 class="amount">{{ pendingUsers() }}</h5>
                                </div>
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/dashboard/dashboard2.png') }}" alt="dasboard">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="dashboard-item" style="  box-shadow: 2px 5px 10px 2px rgba(0, 0, 0, 0.2);">
                            <div class="dashboard-inner">
                                <div class="cont">
                                    <span class="title">Approved User's</span>
                                    <h5 class="amount">{{ verifiedUsers() }}</h5>
                                </div>
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/dashboard/dashboard3.png') }}" alt="dasboard">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="dashboard-item" style="box-shadow: 2px 5px 10px 2px rgba(0, 0, 0, 0.2);">
                            <div class="dashboard-inner">
                                <div class="cont">
                                    <span class="title">Rejected User's</span>
                                    <h5 class="amount">{{ rejectedUsers() }}</h5>
                                </div>
                                <div class="thumb">
                                    <img src="{{ asset('assets/images/dashboard/dashboard4.png') }}" alt="dasboard">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ml-2">
                        <div class="col-md-12">
                            <div class="d-flex justify-content-around align-items-center">
                                <a href="{{ route('Admin.Delete.Unnecessary.Users') }}"
                                    class="btn btn-primary  custom-button">Del Rejected Users</a>
                                <a href="{{ route('Admin.Delete.Pending.Users') }}"
                                    class="btn btn-primary custom-button ml-3">Del Pending Users</a>
                                <a href="{{ route('Admin.Delete.Ip') }}" class="btn btn-primary  custom-button ml-3">Make
                                    Clean</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- users --}}
        <div class="container hidden" id="users">
            <div class="row">
                <div class="col-12  col-md-6">
                    <a href="{{ asset('Admin/All/Users') }}"><button
                            class="btn btn-primary btn-lg w-100 btn-block custom-button">All Users</button></a>
                </div>
                <div class="col-12  col-md-6">
                    <a href="{{ asset('Admin/Vistors') }}"><button
                            class="btn btn-primary btn-lg w-100 btn-block custom-button">Vistors</button></a>
                </div>
                <div class="col-12  col-md-6">
                    <a href="{{ asset('Admin/Pending/Users') }}"><button
                            class="btn btn-primary btn-lg w-100 btn-block custom-button">Pending Users</button></a>
                </div>
                <div class="col-12  col-md-6">
                    <a href="{{ asset('Admin/Approved/Users') }}"><button
                            class="btn btn-primary btn-lg w-100 btn-block custom-button">Approved Users</button></a>
                </div>
                <div class="col-12  col-md-6">
                    <a href="{{ asset('Admin/Rejected/Users') }}"><button
                            class="btn btn-primary btn-lg w-100 btn-block custom-button">Rejected Users</button></a>
                </div>
                <div class="col-12  col-md-6">
                    <a href="{{ asset('Admin/Easypaisa/Users') }}"><button
                            class="btn btn-primary btn-lg w-100 btn-block custom-button">Easypaisa Users</button></a>
                </div>
            </div>
        </div>
        {{-- Settings --}}
        <div class="container  hidden " id="withdraw">
            <div class="col-12  col-md-12">
                <a href="{{ asset('Admin/daily-task') }}"><button
                        class="btn btn-primary btn-lg w-100 btn-block custom-button">Click Here To Go To Daily
                        Reward</button></a>
            </div>
            <div class="col-12 col-md-12">
                <a href="{{ asset('Admin/daily-reward') }}"><button
                        class="btn btn-primary btn-lg w-100 btn-block custom-button text-black">Add Todays Task</button></a>
            </div>
        </div>
        {{-- Withdraw --}}
        <div class="container  hidden" id="work">
            <div class="row">
                <div class="col-12  col-md-4">
                    <a href="{{ asset('Admin/Widthraw/Requests') }}"><button
                            class="btn btn-primary btn-lg w-100 btn-block custom-button">Withdraw Requests</button></a>
                </div>
                <div class="col-12  col-md-4">
                    <a href="{{ asset('Admin/Approved/Widthraw/Requests') }}"><button
                            class="btn btn-primary btn-lg w-100 btn-block custom-button">Approved Requests</button></a>
                </div>
                <div class="col-12  col-md-4">
                    <a href="{{ asset('Admin/Rejected/Widthraw/Requests') }}"><button
                            class="btn btn-primary btn-lg w-100 btn-block custom-button">Rejected Requests</button></a>
                </div>
            </div>
        </div>
        {{-- settings --}}
        <div class="container  hidden" id="settings">
            <div class="row">
                <div class="col-12  col-md-6">
                    <a href="{{ asset('Admin/Setting') }}"><button
                            class="btn btn-primary btn-lg w-100 btn-block custom-button">Reward Settings</button></a>
                </div>
                <div class="col-12  col-md-6">
                    <a href="{{ asset('Admin/Easypaisa') }}"><button
                            class="btn btn-primary btn-lg w-100 btn-block custom-button">Wallet Settings</button></a>
                </div>
            </div>
        </div>
        {{-- Product
<div class="container hidden" id="profile">
    <div class="col-12  col-md-12">
        <a href="/Admin/Product"><button class="btn btn-primary btn-lg w-100 btn-block custom-button">Click Here To Go To Prodcuts</button></a>
      </div>
</div> --}}
        {{-- Easypaisa --}}
        {{-- <div class="container hidden" id="contact">
    <div class="col-12  col-md-12">
        <a href="/Admin/Easypaisa"><button class="btn btn-primary btn-lg w-100 btn-block custom-button">Click Here To Go To EasyPaisa</button></a>
      </div>
</div> --}}

    </main>

    <footer>
        <nav>
            <a href="#" onclick="showDashboard();"><i class="fas fa-home"></i>
                <div>Home</div>
            </a>
            <a href="#" onclick="showUsers();"><i class="fas fa-users"></i>
                <div>Users</div>
            </a>
            <a href="#" onclick="showWork();"><i class=" fas fa-dollar-sign"></i>
                <div>Withdrawals</div>
            </a>
            <a href="#" class="toggle-links"><i class="fas fa-bars"></i>
                <div id="moreLessLabel">More</div>
            </a>
            <a href="#" class="aa" onclick="showWithdraw();"><i class="fas fa-tasks"></i>
                <div>Daily Tasks</div>
            </a>
            <a href="#" class="aa" onclick="showSettings();"><i class="fas fa-cogs"></i>
                <div>Settings</div>
            </a>
            {{-- <a href="#" class="aa" onclick="showProfile();"><i class="fas fa-plus"></i><div>Product</div></a>
      <a href="#" class="aa" onclick="showContact();"><i class="fas fa-envelope"></i><div>EasyPaisa</div></a> --}}
            <form action="{{ asset('logout') }}" method="post" class="mr-2">@csrf
                <input class="aa" type="submit" value="Logout"
                    style="font-weight: 400;padding-left:10px !important;padding-right:10px !important;">
            </form>
        </nav>
    </footer>
@endsection


@section('js')
    <script>
        function showDashboard() {
            document.getElementById('dashboardInfo').style.display = 'block';
            document.getElementById('users').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            // document.getElementById('profile').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            // document.getElementById('contact').style.display = 'none';
        }

        function showUsers() {
            var teamElement = document.getElementById('users');
            teamElement.classList.remove('hidden');
            teamElement.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            // document.getElementById('profile').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            // document.getElementById('contact').style.display = 'none';
        }

        function showWithdraw() {
            var withdrawal = document.getElementById('withdraw');
            withdrawal.classList.remove('hidden');
            withdrawal.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('users').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            // document.getElementById('profile').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            // document.getElementById('contact').style.display = 'none';
        }

        function showWork() {
            var mywork = document.getElementById('work');
            mywork.classList.remove('hidden');
            mywork.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('users').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            // document.getElementById('profile').style.display = 'none';
            document.getElementById('settings').style.display = 'none';
            // document.getElementById('contact').style.display = 'none';
        }

        // function showProfile() {
        //   var myprofile = document.getElementById('profile');
        //   myprofile.classList.remove('hidden');
        //   myprofile.style.display = 'block';
        //     document.getElementById('dashboardInfo').style.display = 'none';
        //     document.getElementById('users').style.display = 'none';
        //     document.getElementById('withdraw').style.display = 'none';
        //     document.getElementById('work').style.display = 'none';
        //     document.getElementById('settings').style.display = 'none';
        //     // document.getElementById('contact').style.display = 'none';
        // }

        function showSettings() {
            var mysettings = document.getElementById('settings');
            mysettings.classList.remove('hidden');
            mysettings.style.display = 'block';
            document.getElementById('dashboardInfo').style.display = 'none';
            document.getElementById('users').style.display = 'none';
            document.getElementById('withdraw').style.display = 'none';
            document.getElementById('work').style.display = 'none';
            // document.getElementById('profile').style.display = 'none';
            // document.getElementById('contact').style.display = 'none';
        }

        // function showContact() {
        //   var mycontact = document.getElementById('contact');
        //   mycontact.classList.remove('hidden');
        //   mycontact.style.display = 'block';
        //     document.getElementById('dashboardInfo').style.display = 'none';
        //     document.getElementById('users').style.display = 'none';
        //     document.getElementById('withdraw').style.display = 'none';
        //     document.getElementById('work').style.display = 'none';
        //     document.getElementById('profile').style.display = 'none';
        //     document.getElementById('settings').style.display = 'none';
        //     // document.getElementById('contact').style.display = 'block';
        // }



        document.addEventListener('DOMContentLoaded', function() {
            var toggleLinks = document.querySelectorAll('.toggle-links');
            var moreLessLabel = document.getElementById('moreLessLabel');

            toggleLinks.forEach(function(link) {
                link.addEventListener('click', function() {
                    var aaElements = document.querySelectorAll('.aa');

                    aaElements.forEach(function(element) {
                        if (element.style.display === 'none' || element.style.display ===
                            '') {
                            element.style.display = 'block';
                        } else {
                            element.style.display = 'none';
                        }
                    });

                    // Toggle between "More" and "Less" labels
                    moreLessLabel.textContent = (moreLessLabel.textContent === 'More') ? 'Less' :
                        'More';
                });
            });
        });
    </script>
@endsection
