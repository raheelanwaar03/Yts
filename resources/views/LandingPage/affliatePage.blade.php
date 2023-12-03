@extends('layouts.app')

@section('content')
    <section class="bg_img hero-section-2 " data-background="{{ asset('assets/images/about/hero-bg4.png') }}">
        <div class="container">
            <div class="hero-content text-white">
                <h1 class="title">Affiliates</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        Affiliates
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--=======Banner-Section Ends Here=======-->


    <!--=======Affiliate-Section Starts Here=======-->
    <section class="affiliate-programe padding-top pt-max-lg-0">
        <div class="ball-3" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30" data-paroller-type="foreground"
            data-paroller-direction="horizontal">
            <img src="{{ asset('assets/images/balls/ball4.png') }}" alt="balls">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 padding-bottom padding-top">
                    <div class="section-header left-style">
                        <span class="cate">What You’ll Get As</span>
                        <h2 class="title fz-md-49">Affiliate Program</h2>
                        <p>
                            We give you the opportunity to earn money by recommending our website to others. You can start
                            earning money even if you do not invest.
                        </p>
                    </div>
                    <div class="affiliate-wrapper">
                        <div class="affiliate-item">
                            <div class="affiliate-inner">
                                <div class="affiliate-thumb">
                                    <h3 class="title">2</h3>
                                    <span class="remainder">%</span>
                                    <span class="cont">1st</span>
                                </div>
                            </div>
                        </div>
                        <div class="affiliate-item cl-two">
                            <div class="affiliate-inner">
                                <div class="affiliate-thumb">
                                    <h3 class="title">5</h3>
                                    <span class="remainder">%</span>
                                    <span class="cont">2nd</span>
                                </div>
                            </div>
                        </div>
                        <div class="affiliate-item cl-three">
                            <div class="affiliate-inner">
                                <div class="affiliate-thumb">
                                    <h3 class="title">12</h3>
                                    <span class="remainder">%</span>
                                    <span class="cont">3rd</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="affiliate-bottom">
                        <h6 class="title">Make money with hyipland</h6>
                        <a href="{{ route('LandingPage.Product') }}" class="custom-button">
                            learn more <i class="flaticon-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 d-lg-block d-none">
                    <div class="afiliate-thumb">
                        <img src="{{ asset('assets/images/affiliate/affiliate.png') }}" alt="affiliate">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=======Affiliate-Section Ends Here=======-->


    <!--=======Check-Section Starts Here=======-->
    <section class="call-section call-overlay bg_img" data-background="{{ asset('assets/images/call/call-bg.jpg') }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-xl-6">
                    <div class="call-item text-center text-sm-left">
                        <div class="call-icon">
                            <img src="{{ asset('assets/images/call/icon01.png') }}" alt="call">
                        </div>
                        <div class="call-content">
                            <h5 class="title">Ready To Start Your Earnings Through Crypto Currency</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-xl-6 text-center text-sm-left text-md-right">
                    <a href="{{ route('LandingPage.Product') }}" class="custom-button">learn more <i class="flaticon-right"></i></a>
                </div>
            </div>
        </div>
    </section>
@endsection
