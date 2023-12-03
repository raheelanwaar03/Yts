<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ env('APP_NAME') }} - in merging company where you can get best deals</title>

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
    {{-- favi Icon --}}
    {{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon"> --}}
    {{-- datatable Links --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    {{-- 
    This website is developed by Raheel Anwaar
    info@raheelanwaar.com for contact.
     --}}
     
   
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-S6N2FKV5W4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S6N2FKV5W4');
</script>
   
   

</head>

<body>
    <div class="">
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
                            <a href="{{ route('User.Dashboard') }}" class="active"><i
                                    class="flaticon-man"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('User.Refer.New.Friend') }}"><i class="flaticon-interest"></i>Refer
                                Friend</a>
                        </li>
                        <li>
                            <a href="{{ route('User.Team') }}"><i class="flaticon-team"></i>Team</a>
                        </li>
                        <li>
                            <a href="{{ route('User.Widthraw.Balance') }}"><i class="flaticon-atm"></i>Withdraw</a>
                        </li>
                        <li>
                            <a href="{{ route('User.Widthraw.Request') }}"><i class="flaticon-atm"></i>All Withdraw</a>
                        </li>
                        <li>
                            <a href="{{ route('User.Work') }}"><i class="flaticon-deal"></i>Work</a>
                        </li>
                        <li>
                            <a href="{{ route('profile.edit') }}"><i class="fas fa-user-edit"></i>Edit Profile</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" style="border: none" class="btn btn-danger"><i
                                        class="flaticon-right-arrow"></i>Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
