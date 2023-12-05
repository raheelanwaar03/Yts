<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <title> YTSEARNINGS </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <!-- font awesome style -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('css//style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.scss') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css.map') }}" rel="stylesheet" />
    <!-- footer section -->



</head>

<body>

    <x-alert />

    <div class="hero_area">

        <div class="hero_bg_box">
            <div class="bg_img_box">
                <img src="images/hero-bg.png" alt="">
            </div>
        </div>

        <!-- header section strats -->
        <header class="header_section" style="background-color: #ff3510 !important;">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="/">
                        <span>
                            YTSEARNINGS
                        </span>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about"> About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/service">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="why.html">Why Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="team.html">Team</a>
                            </li>
                            @if (auth()->user())
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('User.Dashboard') }}"> <i class="fa fa-user"
                                            aria-hidden="true"></i> Dashboard</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"> <i class="fa fa-user"
                                            aria-hidden="true"></i> Login</a>
                                </li>
                            @endif
                            <form class="form-inline">
                                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section " style="background-color: #ff3510 !important;">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Earn Money By Watching Youtube Shorts
                                        </h1>
                                        <p>
                                            Sign Up: Create your account in just a few clicks.
                                            Watch Shorts: Browse and enjoy an array of YouTube Shorts available on our
                                            platform.
                                            Earn Cash: Accumulate earnings with every video you watch.
                                            Instant Payouts: Withdraw your earnings seamlessly whenever you choose.
                                            Join thousands of users who have already transformed their downtime into a
                                            profitable venture. <strong>YTSEARNINGS</strong> is not just a platform;
                                            it's a community where entertainment meets earnings.

                                            Ready to make money watching YouTube Shorts? Sign up now and start your
                                            journey to effortless earnings!
                                        </p>
                                        <div class="btn-box">
                                            <a href="{{ route('register') }}" class="btn1">
                                                Get Started
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="images/slider-img.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Earn Money By Watching Youtube Shorts
                                        </h1>
                                        <p>
                                            Sign Up: Create your account in just a few clicks.
                                            Watch Shorts: Browse and enjoy an array of YouTube Shorts available on our
                                            platform.
                                            Earn Cash: Accumulate earnings with every video you watch.
                                            Instant Payouts: Withdraw your earnings seamlessly whenever you choose.
                                            Join thousands of users who have already transformed their downtime into a
                                            profitable venture. <strong>YTSEARNINGS</strong> is not just a platform;
                                            it's a community where entertainment meets earnings.

                                            Ready to make money watching YouTube Shorts? Sign up now and start your
                                            journey to effortless earnings!
                                        </p>
                                        <div class="btn-box">
                                            <a href="{{ route('register') }}" class="btn1">
                                                Get Started
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="images/slider-img.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <div class="detail-box">
                                        <h1>
                                            Earn Money By Watching Youtube Shorts
                                        </h1>
                                        <p>
                                            Sign Up: Create your account in just a few clicks.
                                            Watch Shorts: Browse and enjoy an array of YouTube Shorts available on our
                                            platform.
                                            Earn Cash: Accumulate earnings with every video you watch.
                                            Instant Payouts: Withdraw your earnings seamlessly whenever you choose.
                                            Join thousands of users who have already transformed their downtime into a
                                            profitable venture. <strong>YTSEARNINGS</strong> is not just a platform;
                                            it's a community where entertainment meets earnings.

                                            Ready to make money watching YouTube Shorts? Sign up now and start your
                                            journey to effortless earnings!
                                        </p>
                                        <div class="btn-box">
                                            <a href="{{ route('register') }}" class="btn1">
                                                Get Started
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="img-box">
                                        <img src="images/slider-img.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>

        </section>
        <!-- end slider section -->
    </div>


    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="service_container">
            <div class="container ">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>Services</span>
                    </h2>
                    <p>
                        Discover the key features that set us apart and make your experience remarkable.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s1.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Easy Money Making
                                </h5>
                                <p>
                                    Unlock the potential to earn money effortlessly. Experience a seamless process that
                                    rewards you for your time and engagement.
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s2.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Affiliate Program
                                </h5>
                                <p>
                                    Join our affiliate program and maximize your earnings. Share the platform with
                                    others and earn rewards for every referral.
                                </p>
                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s3.png" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Expert Advice Service
                                </h5>
                                <p>
                                    Access expert support and guidance to enhance your money-making journey. Our team of
                                    professionals is here to assist you in optimizing your earnings and navigating the
                                    platform effectively.
                                </p>

                                <a href="">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="btn-box">
          <a href="">
            View All
          </a>
        </div> -->
            </div>
        </div>
    </section>

    <!-- end service section -->


    <!-- about section -->
    <section class="about_section layout_padding" style="background-color: #ff3510 !important;">
        <div class="container  ">
            <div class="heading_container heading_center">
                <h2>
                    About <span>Us</span>
                </h2>
                <p>
                    Welcome to YTSEARNINGS, where your time meets rewards in the exciting world of YouTube Shorts!
                </p>
            </div>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src="images/about-img.jpg" alt="About YTSEARNINGS">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <h3>
                            We Are YTSEARNINGS
                        </h3>
                        <p>
                            At YTSEARNINGS, we believe in making your online experience both entertaining and lucrative.
                            Our platform allows you to earn real money by simply watching YouTube Shorts. We've
                            transformed the way users engage with short-form content, turning every view into a valuable
                            opportunity.
                        </p>
                        <p>
                            Our commitment is to provide a seamless and secure environment for users to explore a
                            diverse range of Shorts while earning cash effortlessly. Say goodbye to conventional online
                            experiences and hello to a world where your time is truly rewarded.
                        </p>
                        <a href="#">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end about section -->

    <!-- why section -->

    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Why Choose <span>Us</span>
                </h2>
            </div>
            <div class="why_container">
                <div class="box">
                    <div class="img-box">
                        <img src="images/w1.png" alt="Expert Management">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Expert Management
                        </h5>
                        <p>
                            Our platform is led by a team of seasoned experts dedicated to ensuring a seamless and
                            rewarding experience for our users. Benefit from expert guidance and management as you
                            navigate the world of earning through YouTube Shorts.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/w2.png" alt="Secure Investment">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Secure Investment
                        </h5>
                        <p>
                            Trust in a secure investment environment. We prioritize the safety of your earnings,
                            providing a robust and trustworthy platform for you to make the most of your time and
                            investment.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/w3.png" alt="Instant Withdrawal">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Instant Withdrawal
                        </h5>
                        <p>
                            Enjoy the convenience of instant withdrawals. Access your earnings quickly and hassle-free,
                            putting you in control of your money when you need it.
                        </p>
                    </div>
                </div>
                <div class="box">
                    <div class="img-box">
                        <img src="images/w4.png" alt="Happy Customers">
                    </div>
                    <div class="detail-box">
                        <h5>
                            Happy Customers
                        </h5>
                        <p>
                            Join our community of happy customers who have transformed their leisure time into a source
                            of income. Experience the satisfaction of being part of a platform that values and rewards
                            your engagement.
                        </p>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="#">
                    Read More
                </a>
            </div>
        </div>
    </section>


    <!-- end why section -->

    <!-- team section -->
    <section class="team_section layout_padding" style="background-color: #ff3510 !important;">
        <div class="container-fluid">
            <div class="heading_container heading_center">
                <h2 class="">
                    Our <span> Team</span>
                </h2>
            </div>

            <div class="team_container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/team-1.jpg" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Joseph Brown
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/team-2.jpg" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Nancy White
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/team-3.jpg" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Earl Martinez
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/team-4.jpg" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Josephine Allard
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end team section -->


    <!-- client section -->

    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center psudo_white_primary mb_45">
                <h2>
                    What says our <span>Customers</span>
                </h2>
            </div>
            <div class="carousel-wrap ">
                <div class="owl-carousel client_owl-carousel">
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/client1.jpg" alt="" class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            LusDen
                                        </h6>
                                        <p>
                                            magna aliqua. Ut
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/client2.jpg" alt="" class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            Zen Court
                                        </h6>
                                        <p>
                                            magna aliqua. Ut
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/client1.jpg" alt="" class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            LusDen
                                        </h6>
                                        <p>
                                            magna aliqua. Ut
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/client2.jpg" alt="" class="box-img">
                            </div>
                            <div class="detail-box">
                                <div class="client_id">
                                    <div class="client_info">
                                        <h6>
                                            Zen Court
                                        </h6>
                                        <p>
                                            magna aliqua. Ut
                                        </p>
                                    </div>
                                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end client section -->


    <!-- info section -->

    <section class="info_section layout_padding2" style="background-color: #ff3510 !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_contact">
                        <h4>
                            Address
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Location
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Call +01 1234567890
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    demo@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="info_social">
                        <a href="">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_detail">
                        <h4>
                            Info
                        </h4>
                        <p>
                            necessary, making this the first true generator on the Internet. It uses a dictionary of
                            over 200 Latin words, combined with a handful
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mx-auto info_col">
                    <div class="info_link_box">
                        <h4>
                            Links
                        </h4>
                        <div class="info_links">
                            <a class="active" href="index.html">
                                Home
                            </a>
                            <a class="" href="about.html">
                                About
                            </a>
                            <a class="" href="service.html">
                                Services
                            </a>
                            <a class="" href="why.html">
                                Why Us
                            </a>
                            <a class="" href="team.html">
                                Team
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col ">
                    <h4>
                        Subscribe
                    </h4>
                    <form action="#">
                        <input type="text" placeholder="Enter email" />
                        <button type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <section class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="/"> YTSEARNINGS</a>
                <!-- <a href="https://html.design/">Free Html Templates</a> -->
            </p>
        </div>
    </section>
    <!-- footer section -->
    <!-- jQery -->
    <script type="text/javascript" src=" {{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- owl slider -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->

</body>

</html>
