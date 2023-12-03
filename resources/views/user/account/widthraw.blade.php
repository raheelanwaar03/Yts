@extends('user.layout.app')

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
                        </ul>
                        <div
                            class="dashboard-header-right d-flex flex-wrap justify-content-center justify-content-sm-between justify-content-lg-end align-items-center">
                            <ul class="dashboard-right-menus">
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
                                                    <a href="{{ route('profile.edit') }}"><i
                                                            class="fas fa-user-edit"></i>Edit
                                                </li>
                                                Profile</a>
                                                <li>
                                                    <form action="{{ route('logout') }}" method="POST">
                                                        @csrf
                                                        <button class="btn btn-block btn-primary">Logout</button>
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
                <h3 class="title">User Dashboard</h3>
                <ul class="">
                    <li>
                        Widthraw Balance
                    </li>
                </ul>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12 mb-4">
                    <div class="card mt-3">
                        <div class="card-title">
                            <h3 class="text-center m-3">Widthraw Balance</h3>
                            <h5 class="text-center m-3">Your account balance {{ auth()->user()->balance }}</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('User.Widthraw.Balance.Request') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="">Widthraw Amount</label>
                                    <input type="num" name="widthraw_amount" class="form-control"
                                        placeholder="Enter Amount Your want to widthraw" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Your Name</label>
                                    <input type="num" name="widthraw_name" class="form-control"
                                        placeholder="Enter Your bank Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Number</label>
                                    <input type="num" name="widthraw_num" class="form-control"
                                        placeholder="Enter Your Number" required>
                                </div>
                                <div class="form-group">
                                    <label for="">Select Bank</label>
                                    <select class="form-control" name="widthraw_bank">
                                        <option value="easypaisa">Easypaisa</option>
                                        <option value="jazzcash">Jazzcash</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Procced</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid sticky-bottom">
                <div class="dashboard-footer">
                    <div class="d-flex flex-wrap justify-content-between m-0-15-none">
                        <div class="left">
                            &copy; 2019 <a href="#0">{{ env('APP_NAME') }}</a> | All right reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
    @endsection
